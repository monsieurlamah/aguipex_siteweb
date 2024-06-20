<?php

namespace App\Http\Controllers\frontend;

use App\Models\Foire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoireController extends Controller
{
    public function detailFoire(Foire $foire)
    {
        return view('frontend.foire.detail', compact('foire'));
    }
}
