<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //$users = User::all();
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
           $user->save();
        }else{
           $user->user_status = 1;
           $user->save(); 
        }

        return redirect('admin/users');
    }

    public function store(Request $request)
    { 
          $this->validate($request, [
            'username' => 'min:4|max:20|unique:users,username',
            'password' => 'confirmed|min:6',
            'email'    => 'unique:users,email'
          ]);

          $this->validate($request, [
            'avatar' => 'image|nullable|max:1999'
          ]);


        if ($request->hasfile('avatar')) {
            $fileNameWithExt = $request->file('avatar')->getClientOriginalName();
            $fileName = pathinfo( $fileNameWithExt, PATHINFO_FILENAME);
            if (strlen($fileName) > 10) {
                $fileName = substr($fileName,0,10);
            }
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.$extension;
            $path = $request->file('avatar')->storeAs('public/assets/admin/img/avatars', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $password = md5($request->password);
        
        $users = new User;
        $users->username = $request->username;
        $users->password = $password;
        $users->email    = $request->email;
        $users->avatar   = $fileNameToStore;
        $users->phone    = $request->phone;
        $users->gender   = $request->gender;
        $users->roles_id = $request->role;
        $users->save();

      return redirect('admin/users');
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

    public function destroy($id)
    {
        // try {
        //   $user->delete();
        //   return redirect('/admin/users')->with('DeleteUser', 'Delete user successfully');
        // } catch (\Exception $e) {
        //   $e->getMessage();
        // }
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
}
