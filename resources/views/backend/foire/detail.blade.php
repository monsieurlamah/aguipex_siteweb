@extends('backend.layout.baseAdmin')
@section('content')
        <!-- Start: Content -->
        <div class="content">
            <div class="row">
                <div class="col">
                   <div class="btn-group" role="group"><a class="btn btn-success" role="button" href="{{route('foire.index')}}"><i class="fas fa-arrow-left"></i>&nbsp;<strong>&nbsp;</strong>Retour à la liste</a></div>
                
                </div>
            </div>
            <div class="row">
                <div class="colq col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row row">
                                <div class="col col-12 bg-white px-3 mb-0 pb-3">
                                    <h6>Détails de la foire :</h6>
                                   
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Designation :</p>
                                        <p class="py-2 text-muted">{{ $foire->designation }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Type :</p>
                                        <p class="py-2 text-muted">
                                            @if ($foire->type === 'FOIRE_NATIONALE')
                                            Foire nationale
                                            @else
                                            Foire internationale
                                            @endif
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Pays :</p>
                                        <p class="py-2 text-muted">{{ $foire->pays }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Lieu :</p>
                                        <p class="py-2 text-muted">{{ $foire->lieu }}</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Description :</p>
                                        <p class="py-2 text-muted">{{ $foire->description }}</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Nombre de produit vendu :</p>
                                        <p class="py-2 text-muted">{{ $foire->nbre_produit_vendu }} ventes</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Nombre de personne financée :</p>
                                        <p class="py-2 text-muted">{{ $foire->nbre_personne_finance }} personnes financées</p>
                                    </div>

                                   
                                    {{-- <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">image :</p>
                                        <img class="img-fluid py-2" width="50" height="50"
                                            style="object-fit: cover; border-radius:50%"
                                            src="{{ asset('backend/assets/img/mangue.jpg') }}">
                                    </div> --}}
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Statut actuel :</p>
                                        <p class="py-2 text-muted">{{ $foire->status }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </div>
        @endsection
