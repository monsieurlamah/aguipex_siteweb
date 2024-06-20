<?php

namespace App\Http\Controllers\frontend;

use Carbon\Carbon;
use App\Models\Foire;
use App\Models\Slide;
use App\Models\Equipe;
use App\Models\Produit;
use App\Models\Service;
use App\Models\BasSlide;
use App\Models\Activitie;
use App\Models\Categorie;
use App\Models\Temoignage;
use App\Models\Statistique;
use App\Models\Presentation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        Carbon::setLocale('fr');
        $slides = Slide::where('active', true)
        ->where('status', 'publier')
        ->limit(4)
        ->get();
        // dd($slides);
        $slidesBas = BasSlide::where('active', true)
        ->where('status', 'publier')
        ->limit(4)
        ->get();
        $services = Service::where('active', true)
        ->where('status', 'publier')
        ->limit(3)
        ->get();
        $produits = Produit::where('active', true)
                        ->where('status', 'publier')
                        ->with('categorie')  
                        ->get();
        $categories = Categorie::all();
        $activities = Activitie::where('active', true)
                        ->where('status', 'publier')
                        ->latest()
                        ->limit(3)
                        ->get()
                        ->map(function($activity) {
                            $activity->formatted_date = Carbon::parse($activity->date_activitie)->translatedFormat('j F Y');
                            return $activity;
                        });
                        
        $foiresInternationales = Foire::where('type', 'FOIRE_INTERNATIONALE')
                        ->where('status', 'publier')
                        ->where('active', true)
                        ->latest()
                        ->get()
                        ->map(function($foire) {
                            $foire->formatted_date_debut = Carbon::parse($foire->date_debut)->translatedFormat('j F Y');
                            $foire->formatted_date_fin = Carbon::parse($foire->date_fin)->translatedFormat('j F Y');
                            return $foire;
                        });
        
      
        $foiresNationales = Foire::where('type', 'FOIRE_NATIONALE')
                ->where('status', 'publier')
                ->where('active', true)
                ->latest()
                ->get()
                ->map(function($foire) {
                    $foire->formatted_date_debut = Carbon::parse($foire->date_debut)->translatedFormat('j F Y');
                    $foire->formatted_date_fin = Carbon::parse($foire->date_fin)->translatedFormat('j F Y');
                    return $foire;
        });

        $presentation = Presentation::where('active', true)
        ->where('status', 'publier')
        ->first();
        $temoignages = Temoignage::where('active', true)
        ->where('status', 'publier')
        ->latest()
        ->get();
        $equipes = Equipe::where('active', true)
        ->where('status', 'publier')
        ->latest()
        ->get();
        $statistiques = Statistique::where('active', true)
        ->where('status', 'publier')
        ->latest()
        ->get();
        return view('frontend.home', compact(
            'slides',
            'slidesBas',
            'services',
            'produits',
            'categories',
            'activities', 
            'foiresInternationales', 
            'foiresNationales',
            'presentation',
            'temoignages',
            'equipes',
            'statistiques',
        ));
    }
    
   
}
