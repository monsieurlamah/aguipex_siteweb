<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\User;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeUserRequest;
use App\Http\Requests\updateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        $adminCount = User::where('apRole', 'ADMIN')->count();
        $usebloqueCount = User::where('active', false)->count();
        return view('backend.user.index', compact('users', 'adminCount', 'usebloqueCount'));
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(User $user, storeUserRequest $request)
    {
        // dd($request->all());
        try {
            $this->validate($request,[
                'name' => 'required',
                'email' => 'required|unique:users',
                'phone' => 'required|unique:users',
                'address'=>'required',
                'apRole' => 'required',
                'first_name' => 'required',

               ]);
            $user->name = $request->name;
            $user->first_name = $request->first_name;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->apRole = $request->apRole;
            $user->name = $request->name;
            $user->password = bcrypt('testing');
            // $user->password = bcrypt($request->password);
            $user->save();

            //Envoie de lien de creation
            $request->session()->put('emailUser', $request->email);
            $email = $request->email;
            $details = [
                'title' => 'Mail d\'AGUIPEX',
                'body' => "Bonjour $request->first_name $request->name, votre compte a été créé, merci de cliquer sur http://localhost:8000/creation-mot-de-passe  pour créer un mot de passe pour votre authentification."
            ];
            \Mail::to($email)->send(new SendMail($details));
            return redirect()->route('user.index')->with('success', 'Utilisateur créé !');
        } catch (Exception $e) {
            dd($e);
            throw new Exception('Une erreur est survenue lors de l\'enregistrement d\'un utilisateur');
        }
    }

    

    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
        
    }

    public function update(User $user, updateUserRequest $request)
    {
        try {
            $this->validate($request,[
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address'=>'required',
                'apRole' => 'required',
                'first_name' => 'required',

               ]);
            $user->name = $request->name;
            $user->first_name = $request->first_name;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->apRole = $request->apRole;
            $user->name = $request->name;
            $user->password = '';
            // $user->password = bcrypt($request->password);
            $user->update();
            return redirect()->route('user.index')->with('success', 'Utilisateur modifié !');
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function userBloquer()
    {
        $users = User::where('active', false)->get();
        
        $adminCount = User::where('apRole', 'ADMIN')->count();
        $usebloqueCount = User::where('active', false)->count();
        return view('backend.user.bloquer', compact('users', 'adminCount', 'usebloqueCount'));
    }

    public function admin()
    {
        $users = User::where('apRole', 'ADMIN')->get();
        
        $adminCount = User::where('apRole', 'ADMIN')->count();
        $usebloqueCount = User::where('active', false)->count();
        return view('backend.user.admins', compact('users', 'adminCount', 'usebloqueCount'));
    }

    public function activecompte(Request $request)
    {

        if($request->status==1){
            $r=DB::table('users')
                ->where('id',$request->iduser)
                ->update(['active' =>0]);
            $request->session()->flash('danger', 'Le compte a été desactive');
            return redirect()->back();
        }else{
            $r=DB::table('users')
                ->where('id',$request->iduser)
                ->update(['active' =>1]);
            $request->session()->flash('success', 'Le compte a été active');
            return redirect()->back();
        }



    }

    
}
