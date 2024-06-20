<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Statistique;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\saveStatistiqueRequest;
use App\Http\Requests\updateStatistiqueRequest;

class StatistiqueController extends Controller
{
    public function index()
    {
        $statistiques = Statistique::where('active', true)->paginate(10);
        return view('backend.statistique.list', compact('statistiques'));
    }

    public function create()
    {
        return view('backend.statistique.create');
    }

    public function store(Statistique $statistique, saveStatistiqueRequest $request)
    {
        try {
            $data = Statistique::create($request->all());
            if ($data) {
                return redirect()->route('statistique.index')->with('success', 'Statistique enrégistrée !');
            }
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Erreur lors de l'enregistrement de la statistique");
        }
    }

    public function edit(Statistique $statistique)
    {
        return view('backend.statistique.edit', compact('statistique'));
    }

    public function update(Statistique $statistique, updateStatistiqueRequest $request)
    {
        try {
           $statistique->title = $request->title;
           $statistique->number = $request->number;
           $statistique->status = $request->status;
           $statistique->update();
           return redirect()->route('statistique.index')->with('success', 'Statistique modifiée !');
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreur est survenue lors de la modification de la statistique");
        }
    }
    public function delete(Statistique $statistique)
    {
        try {
            $statistique->delete();
            return redirect()->route('statistique.index')->with('success', 'Statistique supprimée !');
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreur est survenue lors de la suppression de la statistique");
        }
    }
}
