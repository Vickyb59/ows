<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        $notification = array(
            'message' => 'Admin Logged Out Successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }
    public function Profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.pages.profile', compact('adminData'));
    }
    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);

        return view('admin.pages.profile_edit', compact('editData'));
    }
    public function StoreProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;

        $data->save();

        $notification = array(
            'message' => 'Admin Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    }
    public function ChangePassword()
    {
        return view('admin.pages.password_edit');
    }
    public function UpdatePassword(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword'
        ]);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $id = Auth::user()->id;
            $user = User::find($id);
            $user->password = Hash::make($request->newpassword);
            $user->save();
            
            session()->flash('message','Password Updated Successfully');
            return redirect()->back();
        } else{
            session()->flash('message','Incorrect old password');
            return redirect()->back();
        }
    }
}