<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Foire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeFoireRequest;
use App\Http\Requests\updateFoireRequest;

class FoireController extends Controller
{
    public function index()
    {
        $foires = Foire::where('active', true)->paginate(10);
        return view('backend.foire.list', compact('foires'));
    }

    public function create()
    {
        return view('backend.foire.create');
    }

    public function store(Foire $foire, storeFoireRequest $request)
    {
        // dd($request->all());
        try {
            $data = Foire::create($request->all());
            if ($data) {
                return redirect()->route('foire.index')->with("success", "Foire enrégistrée");
            }
        } catch (Exception $e) {
            // dd($e);
            throw new Exception("Une erreur  est survenue lors de l'enregistrement de la foire");
        }
    }

    public function edit(Foire $foire)
    {
        return view('backend.foire.edit', compact('foire'));
    }

    public function update(Foire $foire ,updateFoireRequest $request)
    {
        try {
            $foire->designation = $request->designation;
            $foire->description = $request->description;
            $foire->date_debut = $request->date_debut;
            $foire->date_fin = $request->date_fin;
            $foire->pays = $request->pays;
            $foire->lieu = $request->lieu;
            $foire->type = $request->type;
            $foire->nbre_produit_vendu = $request->nbre_produit_vendu;
            $foire->nbre_personne_finance = $request->nbre_personne_finance;
            $foire->update();
            return redirect()->route('foire.index')->with("success", "Foire modifiée !");
        } catch (Exception $e) {
            dd($e);
            // throw new Exception("Une erreur est survenue lors de la modification de la foire");
        }
    }

    public function delete(Foire $foire)
    {
        try {
            $foire->delete();
            return redirect()->route('foire.index')->with("success", "Foire supprimée !");
        } catch (Exception $e) {
            // dd($e);
            throw new Exception('Une erreur est survenue lors de la suppression de la foire');
        }
    }

    public function detail(Foire $foire)
    {
        return view('backend.foire.detail', compact('foire'));
    }
}
