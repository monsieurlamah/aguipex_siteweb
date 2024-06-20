<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.login');
    }

    public function handleLogin(AuthRequest $request)
    {
        // dd($request->only('email', 'password'));

        $credentials = $request->only('email', 'password');
        $verifyUser = DB::table('users')->where('email', $request->email)->first();
        if ($verifyUser->active == false) {
            return redirect()->back()->with('error_msg', "Votre compte est bloqué, Merci de consulter l'administrateur");
        }
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashbord.home');
        }else{
            return redirect()->back()->with('error_msg', 'Informations incorrectes.');
        }
    }
}
