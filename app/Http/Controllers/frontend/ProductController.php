<?php

namespace App\Http\Controllers\frontend;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function detailProduit(Produit $produit)
    {
        return view('frontend.produit.detail', compact('produit'));
    }

    public function download($filename)
{
    $file = public_path('assets/produit/fiche/' . $filename);

    return response()->download($file);
}
}
