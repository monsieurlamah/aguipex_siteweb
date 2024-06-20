<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CreatePasswordController extends Controller
{
    public function index(Request $request)
    {
        
        $email = $request->session()->get('emailUser');
        // dd($email);
        return view('createpassword.create', compact('email'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'password' => 'required',
            'password_repeat' => 'same:password'
           ]);
        $email = $request->session()->get('emailUser');
        DB::table('users')->where('email', $email)->update([
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->route('connexion')->with('success', 'Mot de passe créé, connectez-vous.');
    }
}
