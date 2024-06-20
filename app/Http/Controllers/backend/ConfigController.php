<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ConfigController extends Controller
{
    public function index()
    {
        $idUser = Auth::user()->id;
        $infoUser = DB::table('users')->where('id', $idUser)->first();
        return view('backend.reglage.index', compact('infoUser'));
    }

    public function updateUser(Request $request)
    {
      
      if ($request->info == "info" ) {
        // dd($request->all());
        $this->validate($request,[
            'email' => 'required',
            'name' => 'required',
            'first_name' => 'required',
            'address' => 'required',
            'apRole' => 'required',
           ]);
           DB::table('users')->where('id',auth()->user()->id)->update([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'email' => $request->email,
            'address' => $request->address,
            'apRole' => $request->apRole,
        ]);
        return redirect()->back()->with('success_msg', 'Information mise à jour avec succès !');           
      }
      // else if ($request->updatePassword == "updatePassword"){
      //     // $idUser = Auth::user()->id;
      //     $this->validate($request,[
      //       'nouveaupassword' => 'required',
      //       'password_repeat' => 'same:nouveaupassword'
      //      ]);
      //      dd($request->all());
      //      $infouser=DB::table('users')->where('id',Auth()->user()->id)->first();
      //      if(password_verify($request->ancienpassword,$infouser->password)){
      //       $nouveaupassword=Hash::make($request->nouveaupassword);
            
            
      //       // modification
      //       DB::table('users')->where('id',auth()->user()->id)->update([
      //           'password' =>$nouveaupassword
      //       ]);
      //       return redirect()->back()->with('success_msg', 'Information mise à jour avec succès !');
      //     }else{
      //       return back()->with('danger', 'Votre mot de passe ne correspond pas');
      //     }
      // }  
        
    }

    public function updatePassword(Request $request)
    {
      if ($request->updatePassword == "updatePassword"){
        // dd($request->all());
        // $idUser = Auth::user()->id;
        $this->validate($request,[
          'nouveaupassword' => 'required',
          'password_repeat' => 'same:nouveaupassword'
         ]);
         $infouser=DB::table('users')->where('id',Auth()->user()->id)->first();
         if(password_verify($request->ancienpassword,$infouser->password)){
          $nouveaupassword=Hash::make($request->nouveaupassword);
          
          
          // modification
          DB::table('users')->where('id',auth()->user()->id)->update([
              'password' =>$nouveaupassword
          ]);
          return redirect()->back()->with('success', 'Mot de passe modifié avec succès !');
        }else{
          return back()->with('danger', 'Votre mot de passe ne correspond pas');
        }
    }  
    }
}
