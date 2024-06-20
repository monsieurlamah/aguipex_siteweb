<?php

namespace App\Http\Controllers\backend;

use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeDepartementRequest;
use Exception;

class DepartementController extends Controller
{
    public function index()
    {
        $departements = Departement::where('active', true)->paginate(10);
        return view('backend.departement.index', compact('departements'));
    }

    public function create()
    {
        return view('backend.departement.create');
    }

    public function store(Departement $departement, storeDepartementRequest $request)
    {
        // dd($request->name);
        try {
            $departement->name = $request->name;
            $departement->save();
            return redirect()->route('departement.index')->with('success','Departement enrégistré !');
        } catch (Exception $e) {
            // dd($e);
            throw new Exception('Une erreur est survenue lors d\'enregistrment du departement');
        }
    }

    public function edit(Departement $departement)
    {
        return view('backend.departement.edit', compact('departement'));
    }

    public function update(Departement $departement, storeDepartementRequest $request)
    {
        // update une catégorie
        $departement->name = $request->name;
        $departement->update();
        return redirect()->route('departement.index')->with('success', 'Departement modifié !');
    }

    public function delete(Departement $departement)
    {
        $departement->delete();
        return redirect()->route('departement.index')->with('success', 'Departement supprimé !');
    }
}
