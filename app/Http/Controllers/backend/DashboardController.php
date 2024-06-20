<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Foire;
use App\Models\Produit;
use App\Models\Service;
use App\Models\BasSlide;
use App\Models\Activitie;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduits = Produit::all()->count();
        $aujourdHui = Carbon::today();
        $activitiesDuJour = Activitie::whereDate('created_at', $aujourdHui)->count();
        $totalFoires = Foire::all()->count();
        $totalServices = Service::all()->count();
        $totalCategorie = Categorie::all()->count();
        $totalMission = BasSlide::all()->count();
        $totalFoiresNational = Foire::where('type', 'FOIRE_NATIONALE')->count();
        $totalFoiresInternational = Foire::where('type', 'FOIRE_INTERNATIONALE')->count();

        return view('backend.home',
         compact('totalProduits',
         'activitiesDuJour',
         'totalFoires',
         'totalServices', 
         'totalFoiresNational',
         'totalFoiresInternational',
         'totalCategorie',
         'totalMission'
        ));
    }
}
