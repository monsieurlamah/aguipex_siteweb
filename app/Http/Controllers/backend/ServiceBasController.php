<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\BasSlide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\saveServiceBasRequest;
use App\Http\Requests\updateServiceBasRequest;

class ServiceBasController extends Controller
{
    public function index()
    {
        $services_bas = BasSlide::where('active', true)->paginate(10);
        return view('backend.service_bas.list', compact('services_bas'));
    }

    public function create()
    {
        return view('backend.service_bas.create');
    }

    public function store(BasSlide $service_bas, saveServiceBasRequest $request)
    {
        try {
            $data = BasSlide::create($request->all());
            if ($data) {
                return redirect()->route('service_bas.index')->with('success', 'Service du bas slide enrégistré !');
            }
        } catch (Exception $e) {
            // dd($e);
            throw new Exception("Une erreur est survenue lors de l'enrégistrement du Service du bas slide !");
        }
    }

    public function edit(BasSlide $service_bas)
    {
        return view('backend.service_bas.edit', compact('service_bas'));
    }

    public function update(BasSlide $service_bas , updateServiceBasRequest $request)
    {
        try {
            $service_bas->title = $request->title;
            $service_bas->icone = $request->icone;
            $service_bas->status = $request->status;
            $service_bas->update();
            return redirect()->route('service_bas.index')->with("success", "Service du bas slide modifié !");

        } catch (Exception $e) {
            // dd($e);
            throw new Exception("Une erreur est survenue lors de la modification du Service du bas slide !");
        }
    }

    public function delete(BasSlide $service_bas)
    {
        try {
            $service_bas->delete();
            return redirect()->route('service_bas.index')->with("success", "service bas supprimée !");
        } catch (Exception $e) {
            // dd($e);
            throw new Exception('Une erreur est survenue lors de la suppression de la du service bas');
        }
    }

    public function detail(BasSlide $service_bas)
    {
        return view('backend.service_bas.detail', compact('service_bas'));
    }
}
