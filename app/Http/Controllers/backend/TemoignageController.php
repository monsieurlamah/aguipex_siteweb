<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeTemoignageRequest;
use App\Http\Requests\updateTemoignageRequest;

class TemoignageController extends Controller
{
    public function index()
    {
        $temoignages = Temoignage::paginate(10);
        return view('backend.temoignage.list', compact('temoignages'));
    }
    
    public function create()
    {
     return view('backend.temoignage.create');
    }

    public function store(Temoignage $temoignage, storeTemoignageRequest $request)
    {
        // dd($request->all());
        try {
            $temoignage->name = $request->name;
            $temoignage->fonction = $request->fonction;
            $temoignage->contenu = $request->contenu;
            $temoignage->status = $request->status;
            $temoignage->image = "";
            $temoignage->save();
            
            $idTemoignage = $temoignage->id;
            $imageT = $request->file('image');
            $teaser_imageT = $idTemoignage . '.' . 'png';
            $destinationPathT = public_path('/assets/temoignage');
            $imageT->move($destinationPathT, $teaser_imageT);
            // dd($teaser_imageE);
            DB::table('temoignages')->where('id', $temoignage->id)->update(['image'=>$teaser_imageT]);
            
            return redirect()->route('temoignage.index')->with('success', 'Temoignage enrégistré !');
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreure est survenue lors de l'enregistrement du temoignage");
        }
        
    }

    public function edit(Temoignage $temoignage)
    {
        return view('backend.temoignage.edit', compact('temoignage'));
    }

    public function update(Temoignage $temoignage, updateTemoignageRequest $request)
    {
        try {
            $temoignage->name = $request->name;
            $temoignage->fonction = $request->fonction;
            $temoignage->contenu = $request->contenu;
            $temoignage->status = $request->status;
            $temoignage->image = "";
            $temoignage->update();
            
            $idTemoignage = $temoignage->id;
            $imageT = $request->file('image');
            if ($imageT) {
                $teaser_imageT = $idTemoignage . '.' . 'png';
                $destinationPathT = public_path('/assets/temoignage');
                $imageT->move($destinationPathT, $teaser_imageT);
                // dd($teaser_imageE);
                DB::table('temoignages')->where('id', $temoignage->id)->update(['image'=>$teaser_imageT]);
            }
            return redirect()->route('temoignage.index')->with('success', 'Temoignage modifié !');
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreure est survenue lors de l'enregistrement du temoignage");
        }
        
    }

    public function delete(Temoignage $temoignage, Request $request)
    {
        try {
            $temoignage->delete();
            $idTemoignage = $temoignage->id;
            $imageT = $request->file('image');
            if ($imageT) {
                $teaser_imageT = $idTemoignage . '.' . 'png';
                $destinationPathT = public_path('/assets/temoignage');
                $imageT->move($destinationPathT, $teaser_imageT);
                // dd($teaser_imageE);
                DB::table('temoignages')->where('id', $temoignage->id)->update(['image'=>$teaser_imageT]);
            }
            return redirect()->route('temoignage.index')->with('success', 'Temoignage supprimé !');
        } catch (Exception $e) {
            dd($e);
            throw new Exception("Une erreur est survenue lors de la suppression de ce temoignage");
        }
    }

    public function detail(Temoignage $temoignage)
    {
        return view('backend.temoignage.detail', compact('temoignage'));
    }
}
