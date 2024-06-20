<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\storeSlideRequest;
use App\Http\Requests\UpdateSlideRequest;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::where('active', true)->paginate(10);
        return view('backend.slide.list', compact('slides'));
    }

    public function create()
    {
        return view('backend.slide.create');
    }

    public function store(Slide $slide, storeSlideRequest $request)
    {
        try {
            $slide->title = $request->title;
            $slide->numero = $request->numero;
            $slide->subtitle = $request->subtitle;
            $slide->description = $request->description;
            $slide->libelle = $request->libelle;
            $slide->lien = $request->lien;
            $slide->status = $request->status;
            $slide->save();
            $idSlide = $slide->id;
            $imageP = $request->file('image');
            $teaser_imageP = $idSlide . '.' . 'png';
            $destinationPathP = public_path('/assets/slides');
            $imageP->move($destinationPathP, $teaser_imageP);
            DB::table('slides')->where('id', $slide->id)->update(['image'=>$teaser_imageP]);

            
            return redirect()->route('slide.index')->with('success', 'Le sile est enrégistré !');
            
        } catch (Exception $e) {
            // dd($e);
            throw new Exception('Une erreure est survenue lors de la validation du slide');
        }
    }

    public function edit(Slide $slide)
    {
        return view('backend.slide.edit',compact('slide'));
    }

    public function update(Slide $slide, UpdateSlideRequest $request)
    {
        try {
            $slide->numero = $request->numero;
            $slide->title = $request->title;
            $slide->subtitle = $request->subtitle;
            $slide->description = $request->description;
            $slide->libelle = $request->libelle;
            $slide->lien = $request->lien;
            $slide->status = $request->status;
            $slide->update();
            
            $idSlide = $slide->id;
            $imageP = $request->file('image');
            if ($imageP) {
                $teaser_imageP = $idSlide . '.' . 'png';
                $destinationPathP = public_path('/assets/slides');
                $imageP->move($destinationPathP, $teaser_imageP);
                DB::table('slides')->where('id', $slide->id)->update(['image'=>$teaser_imageP]);
            }
            return redirect()->route('slide.index')->with('success','Slide modifié !');
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function delete(Slide $slide, Request $request)
    {
        try {
            $slide->delete();
            $idSlide = $slide->id;
            $imageP = $request->file('image');
            if ($imageP) {
                $teaser_imageP = $idSlide . '.' . 'png';
                $destinationPathP = public_path('/assets/slides');
                $imageP->move($destinationPathP, $teaser_imageP);
                DB::table('slides')->where('id', $slide->id)->delete(['image'=>$teaser_imageP]);
            }
            
            return redirect()->route('slide.index')->with('success_msg', 'Slide supprimé !');
        } catch (Exception $e) {
            //dd($e);
            throw new Exception("Une erreur est survenue lors de la suppression du slide");
        }
    }

    public function detail(Slide $slide)
    {
       return view('backend.slide.detail', compact('slide'));
    }
    
}
