<?php

namespace App\Http\Controllers\backend;

use Exception;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\storeProductRequest;
use App\Http\Requests\updateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $produits = Produit::with('categorie')->paginate(10);
        return view("backend.product.list", compact('produits'));
    } 

    public function create()
    {
        $categories = Categorie::all();
        return view('backend.product.create', compact('categories'));
    }

    public function store(Produit $produit, storeProductRequest $request)
    {
        try {
            $produit->categorie_id = $request->categorie_id;
            $produit->title = $request->title;
            $produit->status = $request->status;
            $produit->description = $request->description;
            $produit->featured = $request->featured;
           
            $produit->save();
            //Enregistrement l'image principale
            $idProduct = $produit->id;
            $imageP = $request->file('image');
            $teaser_imageP = $idProduct . '.' . 'png';
            $destinationPathP = public_path('/assets/produit');
            $imageP->move($destinationPathP, $teaser_imageP);
            DB::table('produits')->where('id', $produit->id)->update(['image'=>$teaser_imageP]);
    
            return redirect()->route('produit.index')->with('success', 'Produit enrégistré !');
        } catch (Exception $e) {
            dd($e);
            // throw new Exception("Une erreur est survenue lors de l'enrégistrement du produit");
        }
    }
    
    

    public function edit(Produit $product)
    {
        $categories = Categorie::all();
        return view('backend.product.edit', compact('product', 'categories'));
    }

    public function update(Produit $product, updateProductRequest $request)
    {
        try {
           $product->title = $request->title;
           $product->description = $request->description;
           $product->file_path = $request->file_path;
           $product->categorie_id = $request->categorie_id;
           $product->update();
           $idProduct = $product->id;
            $imageP = $request->file('image');
            if ($imageP) {
                $teaser_imageP = $idProduct . '.' . 'png';
                $destinationPathP = public_path('/assets/produit');
                $imageP->move($destinationPathP, $teaser_imageP);
                DB::table('produits')->where('id', $product->id)->update(['image'=>$teaser_imageP]);
            }
           return redirect()->route('produit.index')->with('success', 'Produit modifié !');
        } catch (Exception $e) {
            throw new Exception('Une erreur est survenue lors de la modification du produit');
        }
    }

    public function delete(Produit $product, Request $request)
    {
        try {
        
            $product->delete();
            $idProduct = $product->id;
            $imageP = $request->file('image');
            if ($imageP) {
                $teaser_imageP = $idProduct . '.' . 'png';
                $destinationPathP = public_path('/assets/produit');
                $imageP->move($destinationPathP, $teaser_imageP);
                DB::table('produits')->where('id', $product->id)->delete(['image'=>$teaser_imageP]);
            }
            return redirect()->route("produit.index")->with('success_msg', "Produit supprimé !");
        } catch (Exception $e) {
            // dd($e);
            throw new Exception("Une erreur est survenue lors de la suppression du produit");
        }
    }

    public function detail(Produit $product)
    {
        return view('backend.product.detail', compact('product'));
    }
}
