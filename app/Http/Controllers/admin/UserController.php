<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = User::paginate(10);
        return view('admin/users', compact('users'));
    }

    public function create()
    {
        return view('admin/addUser');
    }

    public function changeStatus($id)
    {
        $user = User::find($id);

        if ($user->user_status == 1) {
           $user->user_status = 0;
        }else{
           $user->user_status = 1;
        }

        $user->save(); 
        //return redirect('admin/users');
        return response()->json(true);
    }

    public function store(Request $request)
    { 
        $this->validateUser($request);
        
        $users = new User;
        $users->username = $request->username;
        $users->password = bcrypt($request->password);
        $users->email    = $request->email;
        $users->avatar   = $this->saveImage($request, 'avatar', 'users');
        $users->phone    = $request->phone;
        $users->gender   = $request->gender;
        $users->roles_id = $request->role;
        $users->save();

      return redirect('admin/users');
    }

     public function validateUser(Request $request)
    {
        $this->validate($request, [
            'username' => 'min:4|max:20|unique:users,username',
            'password' => 'confirmed|min:6',
            'email'    => 'unique:users,email',
            'avatar' => 'image|nullable|max:1999'
          ]);
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy( $id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(true);
    }
}
