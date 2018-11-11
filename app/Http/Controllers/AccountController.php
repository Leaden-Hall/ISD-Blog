<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }

    public function show($id) {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $account = User::find($id);

        return view('account/account', compact(['recentAnnouncements', 'recentEvents', 'account']));
    }

    public function edit($id) {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        $editAccount = User::find($id);

        return view('account/account_edit', compact(['recentAnnouncements', 'recentEvents', 'editAccount']));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'username' => 'required|string|unique:users,username,' . $request->user_id,
            'gender' => 'required',
            'phone' => 'required|min:9|max:10|string',
            'notify' => 'required'
        ]);

        if($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $logoExt = $avatar->clientExtension();
            $avatarName = $request->username .".".$logoExt;
            $avatar->move('storage/storage/images/users', $avatarName);
            $avatarPath = url('/') . "/storage/storage/images/users/" . $avatarName;
        }

        $updateUser = User::find($request->user_id);

        $updateUser->username = $request->username;
        $updateUser->gender = $request->gender;
        $updateUser->phone = $request->phone;
        $updateUser->is_notified = $request->notify;

        if($request->file('avatar')) {
            $updateUser->avatar = $avatarPath;
        }

        $updateUser->save();

        session()->flash('account_update', 'Your account information has been updated successfully');
        return redirect()->back();
    }

    public function password() {
        $Announcements = new AnnouncementController();
        $recentAnnouncements = $Announcements->bigAnnouncements();

        $Events = new EventController();
        $recentEvents = $Events->bigEvents();

        return view('account/changePassword', compact(['recentAnnouncements', 'recentEvents']));
    }

    public function changePassword(Request $request, $id) {
        $this->validate($request, [
            'old_password' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $old_pass = $request->old_password;
        $user = User::find($id);

        if (Hash::check($old_pass, $user->password)) {
            $new_pass = Hash::make($request->password);
            $user->password = $new_pass;
            $user->save();

            session()->flash('password_update', 'Your account password has been updated successfully.');
            return redirect("account/$id");
        }

        session()->flash('password_update_fail', 'Your old password is incorrect');
        return redirect()->back();


    }

    public function deactivate($id) {
        $deactivateUser = User::find($id);
        $deactivateUser->user_status = User::DEACTIVATED;
        $deactivateUser->save();

        Auth::logout();
        return redirect()->route('index');
    }
}
