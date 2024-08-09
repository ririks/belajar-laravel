<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function auth(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
    ];

    if (Auth::attempt($data)) {
       return redirect(route('home'));
    }
    return back()->with(["error" => "Email atau password anda salah"]);
    }

}
