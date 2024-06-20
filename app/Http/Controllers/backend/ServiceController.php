<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\saveServiceRequest;
use App\Http\Requests\updateServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('active', true)->paginate(10);
        return view('backend.service.list', compact('services'));
    }

    public function create()
    {
        return view('backend.service.create');
    }

    public function store(Service $service, saveServiceRequest $request)
    {
        try {
            $data = Service::create($request->all());
            if ($data) {
                return redirect()->route('service.index')->with('success', 'Service enrégistré !');
            }
        } catch (Exception $e) {
            // dd($e);
            throw new Exception("Une erreur est survenue lors de l'enrégistrement du service !");
        }
    }

    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }

    public function update(Service $service , updateServiceRequest $request)
    {
        try {
            $service->title = $request->title;
            $service->icone = $request->icone;
            $service->description = $request->description;
            $service->update();
            return redirect()->route('service.index')->with("success", "Service modifié !");

        } catch (Exception $e) {
            // dd($e);
            throw new Exception("Une erreur est survenue lors de la modification du service !");
        }
    }

    public function detail(Service $service)
    {
        return view('backend.service.detail', compact('service'));
    }
}
