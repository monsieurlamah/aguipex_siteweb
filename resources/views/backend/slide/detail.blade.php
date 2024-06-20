@extends('backend.layout.baseAdmin')
@section('content')
        <!-- Start: Content -->
        <div class="content">
            <div class="row">
                <div class="col">
                   <div class="btn-group" role="group"><a class="btn btn-success" role="button" href="{{route('slide.index')}}"><i class="fas fa-arrow-left"></i>&nbsp;<strong>&nbsp;</strong>Retour à la liste</a></div>
                
                </div>
            </div>
            <div class="row">
                <div class="colq col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row row">
                                <div class="col col-12 bg-white px-3 mb-0 pb-3">
                                    <h6>Détails de slide :</h6>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">N° :</p>
                                        <p class="py-2 text-muted">{{ $slide->numero }} </p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Titre :</p>
                                        <p class="py-2 text-muted">{{ $slide->title }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Sous titre :</p>
                                        <p class="py-2 text-muted">{{ $slide->subtitle }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Description :</p>
                                        <p class="py-2 text-muted">{{ $slide->description }}</p>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Libelle :</p>
                                        <p class="py-2 text-muted">{{ $slide->libelle }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Lien :</p>
                                        <p class="py-2 text-muted">{{ $slide->lien }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">image :</p>
                                        <img class="img-fluid py-2" width="50" height="50"
                                            style="object-fit: cover; border-radius:50%"
                                            src="{{ asset('backend/assets/img/mangue.jpg') }}">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom">
                                        <p class="py-2">Statut actuel :</p>
                                        <p class="py-2 text-muted">{{ $slide->status }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </div>
        @endsection
