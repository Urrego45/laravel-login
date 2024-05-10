<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function register(Request $req) {

        $user = new User();

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);

        $user->save();

        Auth::login($user);

        return redirect(route('privada'));
        
    }

    public function login(Request $req) {

        $credentials = [
            "email" => $req->email,
            "password" => $req->password
        ];

        $remember = ($req->has('remember') ? true : false);

        if (Auth::attempt($credentials, $remember)) {

            $req->session()->regenerate();
            
            return redirect()->intended(route('privada'));

        } else {
            return redirect('login');
        }

    }

    public function logout(Request $req) {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect(route('login'));
    }
}
