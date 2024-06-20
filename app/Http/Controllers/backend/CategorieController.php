<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\saveCategorieRequest;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::where('active', true)->paginate(10);

        return view('backend.categorie.liste', compact('categories'));
    }

    public function create()
    {
        return view('backend.categorie.create');
    }

    public function store(Categorie $categorie, saveCategorieRequest $request)
    {
        // dd($request->name);
        try {
            $categorie->name = $request->name;
            $categorie->save();
            return redirect()->route('categorie.index')->with('success_msg','Catégorie enrégistrée !');
        } catch (Exception $e) {
            // dd($e);
            throw new Exception('Une erreur est survenue lors d\'enregistrment de la catégorie');
        }
    }

    public function edit(Categorie $categorie)
    {
        return view('backend.categorie.edit', compact('categorie'));
    }

    public function update(Categorie $categorie, saveCategorieRequest $request)
    {
        // update une catégorie
        $categorie->name = $request->name;
        $categorie->update();
        return redirect()->route('categorie.index')->with('success_msg', 'Catégorie modifiée !');
    }

    public function delete(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categorie.index')->with('success_msg', 'Catégorie supprimée !');
    }
}
