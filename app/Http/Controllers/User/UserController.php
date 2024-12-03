<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.landing');
    }

    public function login (Request $request)
    {
        $username - Masyarakat::where('username', $request->username)->first();

        if (!username) {
            return redirect()->back()->with(['pesan'=>'Username Not Found']);
        }

        $password = Hash::check($request->password, $username->username);

        if(!password) {
            return redirect()->back()->with(['pesan'=>'Wrong Password']);
        }

        if (Auth::guard('masyarakats')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->back();
        } else {
            return redirect()->back()->with(['pesan' => 'Account Not Registered']);
        }
    }

    public function formRegister()
    {
        return view('user.register');
    }
}