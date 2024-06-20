<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Presentation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\savePresentationRequest;
use App\Http\Requests\updatePresentationRequest;

class PresentationController extends Controller
{
    public function index()
    {
        $presentations = Presentation::where('active', true)->paginate(10);
        return view('backend.presentation.list', compact('presentations'));
    }
    
    public function create()
    {
        return view('backend.presentation.create');
    }

    public function store(Presentation $presentation, savePresentationRequest $request)
    {
        try {
            $query =  Presentation::create($request->all());
            if ($query) {
               return redirect()->route('presentation.index')->with('success', "Presentation Enrégistrée !");
            }
        } catch (Exception $e) {
            dd($e);
        }
        
    }

    public function edit(Presentation $presentation)
    {
        return view('backend.presentation.edit', compact('presentation'));
    }

    public function update(Presentation $presentation, updatePresentationRequest $request)
    {
        try {
            $presentation->content = $request->content;
            $presentation->status = $request->status;
            $presentation->update();
            return redirect()->route('presentation.index')->with("success", "Présentation modifiée !");
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreur est survenue lors de la modification de la presentation");
        }
    }

    public function delete(Presentation $presentation)
    {
        try {
            $presentation->delete();
            return redirect()->route('presentation.index')->with('success', 'Présentation supprimée !');
        } catch (Exception $e) {
           dd($e);
           throw new Exception("Une erreur est survenue lors de la suppression de la presentation");
        }
    }
}
