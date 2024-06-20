@extends('backend.layout.baseAdmin')
@section('content')

        <!-- Start: Content -->
        <div class="content">
            <div class="row">
                <div class="col">
                   <div class="btn-group" role="group"><a class="btn btn-success" role="button" href="{{route('produit.index')}}"><i class="fas fa-arrow-left"></i>&nbsp;<strong>&nbsp;</strong>Retour à la liste</a></div>
                
                </div>
            </div>
            <div class="row">
                <div class="colq col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row row">
                                <div class="col col-12 bg-white px-3 mb-0 pb-3">
                                    <h6>Détails du produit :</h6>
                                   
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Titre :</p>
                                        <p class="py-2 text-muted">{{ $product->title }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Sous titre :</p>
                                        <p class="py-2 text-muted">{{ $product->categorie->name }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Description :</p>
                                        <p class="py-2 text-muted">{{ $product->description }}</p>
                                    </div>

                                   
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">image :</p>
                                        <img class="img-fluid py-2" width="50" height="50"
                                            style="object-fit: cover; border-radius:50%"
                                            src="{{asset('assets/produit/'.$product->image)}}">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Statut actuel :</p>
                                        <p class="py-2 text-muted">{{ $product->status }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </div>
        @endsection
