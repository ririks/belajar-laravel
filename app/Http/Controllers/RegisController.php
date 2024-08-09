<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisController extends Controller
{
    function index()
    {
        return view('registrasi');
    }

    function store(Request $request)
    {
        $cekUser = User::where('email', $request->email)->first();
        if ($cekUser) {
            return back()->with(["error" => "Email yang anda masukkan telah terdaftar"]);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 'customer';
        $user->save();

        return redirect(route('login'));
    }
}
