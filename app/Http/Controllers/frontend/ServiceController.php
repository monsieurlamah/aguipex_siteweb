<?php

namespace App\Http\Controllers\frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function detailService(Service $service)
    {
        $services = Service::where('active', true)
        ->where('status', 'publier')
        ->limit(3)
        ->latest()
        ->get();
        return view('frontend.service.detail', compact('service', 'services'));
    }

    public function allService()
    {
        $services = Service::where('active', true)
        ->where('status', 'publier')
        ->latest()
        ->get();
        return view('frontend.service.list', compact('services'));
    }
}
