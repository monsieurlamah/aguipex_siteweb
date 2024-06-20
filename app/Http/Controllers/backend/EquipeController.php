<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Equipe;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\BinaryOp\Equal;
use App\Http\Requests\storeEquipeRequest;
use App\Http\Requests\updateEquipeRequest;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::with('departement')->paginate(10);
        return view('backend.equipe.list', compact('equipes'));
    }
    
    public function create()
    {
    $departements = Departement::all();
     return view('backend.equipe.create', compact('departements'));
    }

    public function store(Equipe $equipe, storeEquipeRequest $request)
    {
        // dd($request->all());
        try {
            $equipe->departement_id = $request->departement_id;
            $equipe->name = $request->name;
            $equipe->fonction = $request->fonction;
            $equipe->email = $request->email;
            $equipe->contact = $request->contact;
            $equipe->lienLinkdln = $request->lienLinkdln;
            $equipe->lienTwitter = $request->lienTwitter;
            $equipe->status = $request->status;
            $equipe->image = "";
            $equipe->save();
            
            $idEquipe = $equipe->id;
            $imageE = $request->file('image');
            $teaser_imageE = $idEquipe . '.' . 'png';
            $destinationPathE = public_path('/assets/equipe');
            $imageE->move($destinationPathE, $teaser_imageE);
            // dd($teaser_imageE);
            DB::table('equipes')->where('id', $equipe->id)->update(['image'=>$teaser_imageE]);
            
            return redirect()->route('equipe.index')->with('success', 'Membre enrégistré !');
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreure est survenue lors de l'enregistrement du membre");
        }
        
    }

    public function edit(Equipe $equipe)
    {
        $departements = Departement::all();
        return view('backend.equipe.edit', compact('equipe', 'departements'));
    }

    public function update(Equipe $equipe, updateEquipeRequest $request)
    {
        try {
            $equipe->departement_id = $request->departement_id;
            $equipe->name = $request->name;
            $equipe->fonction = $request->fonction;
            $equipe->email = $request->email;
            $equipe->contact = $request->contact;
            $equipe->lienLinkdln = $request->lienLinkdln;
            $equipe->lienTwitter = $request->lienTwitter;
            $equipe->status = $request->status;
            $equipe->image = "";
            $equipe->update();
            
            $idEquipe = $equipe->id;
            $imageE = $request->file('image');
            if ($imageE) {
                $teaser_imageE = $idEquipe . '.' . 'png';
                $destinationPathE = public_path('/assets/equipe');
                $imageE->move($destinationPathE, $teaser_imageE);
                // dd($teaser_imageE);
                DB::table('equipes')->where('id', $equipe->id)->update(['image'=>$teaser_imageE]);
            }
            return redirect()->route('equipe.index')->with('success', 'Info modifiée !');
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreure est survenue lors de l'enregistrement du membre");
        }
        
    }

    public function delete(Equipe $equipe, Request $request)
    {
        try {
            $equipe->delete();
            $idEquipe = $equipe->id;
            $imageE = $request->file('image');
            if ($imageE) {
                $teaser_imageE = $idEquipe . '.' . 'png';
                $destinationPathE = public_path('/assets/equipe');
                $imageE->move($destinationPathE, $teaser_imageE);
                // dd($teaser_imageE);
                DB::table('equipes')->where('id', $equipe->id)->delete(['image'=>$teaser_imageE]);
            }
            return redirect()->route('equipe.index')->with('success', 'Info supprimée !');
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreur est survenue lors de la suppression de cet employé");
        }
    }

    public function detail(Equipe $equipe)
    {
        return view('backend.equipe.detail', compact('equipe'));
    }
}
