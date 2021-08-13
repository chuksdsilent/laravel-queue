<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return $this->checkCredentials(request()->get("url"));
    }
    public function checkCredentials($url)
    {
        request()->validate([
            "username" => "required",
            "password" => "required|max:6"
        ], [
            "username.required" => "Username is required",
            "password.required" => "Password is required",
            "password.max" => "Password is must be greater than 6",
        ]);

        $userCredentials = ["username" => request()->get("username"), "password" => request()->get("password")];

        if (Auth::attempt($userCredentials)) {
            return redirect($url);
        }
        return redirect()->back()->with("msg", "Invalid Username/Password");
    }

    public function changePassword()
    {
        return view("change_password");
    }

    public function updateAdminPassword()
    {

        request()->validate([
            "old_password" => "required",
            "password" => "required|confirmed",
            "password_confirmation" => "required"
        ], [
            "old_password.required" => "Old Pasword is required",
            "password.required" => "Pasword is required",
            "password_confirmation.required" => "Confirm Pasword is required",
        ]);
        $old_password = request()->get("old_password");
        $password = request()->get("password");

        if (Hash::check($old_password, User::where("username", Auth::user()->username)->value("password"))) {
            User::where("username", Auth::user()->username)->update(["password" => Hash::make($password)]);
            return redirect()->back()->with("msg", "Password Changes Successfully.");
        } else {
            return redirect()->back()->with("errmsg", "Password Does not match Our record");
        }
    }
}
