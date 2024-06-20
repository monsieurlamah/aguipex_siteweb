@extends('backend.layout.baseAdmin')
@section('content')
        <div class="content">

            <form method="post" action="{{ route('statistique.update', $statistique->id) }}">
                @csrf
                @method('PUT')
                <div class="row card-wizard-2">

                    <!-- Start: Column -->
                    <div class="col-lg-12">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="text-success font-weight-bolder">Modification de statistique</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <!-- Start: Row -->
                                    <div class="row row">
                                        <div class="col-lg-6 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="nomDeLaBanque">Titre</label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control form-control" type="text"
                                                        name="title" placeholder="Nom de la statistique..." value="{{$statistique->title}}">
                                                    @error('title')
                                                        <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- End: Column -->
                                        <div class="col-lg-6 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="nomDeLaBanque">Nombre</label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control form-control" type="number"
                                                        name="number" placeholder="Entrer le nombre..." value="{{$statistique->number}}">
                                                    @error('number')
                                                        <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- End: Column -->
                                        
                                        @if (Auth::check())
                                        @if (Auth::user()->apRole == 'ADMIN')
                                        <div class="col-lg-12 pr-1">
                                            <div class="form-group"><label class="form-label">Statut * </label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div>
                                                    <select class="form-control" name="status" id="categorie_id">
                                                        <option value="" selected disabled>Sélectionner le statut
                                                        </option>
                                                           @if ($statistique->status == "brouillon")
                                                           <option value="brouillon" selected>Brouillon</option>
                                                           <option value="publier">Publier</option>
                                                           @else
                                                           <option value="brouillon">Brouillon</option>
                                                           <option value="publier" selected>Publier</option>
                                                           @endif
                                                        </select>
                                                </div>
                                            </div>
                                            @error('status')
                                                <div class="text-danger"> <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        @endif
                                        @endif
                                        <!-- End: Column -->
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6"><button class="btn btn-primary btn btn-success mx-1"
                                            type="submit">Modifier</button><a href="{{route('statistique.index')}}"
                                            class="btn btn-primary btn btn-primary mx-1">Annuler</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End: Column -->
                </div>
                <!-- End: Row -->
            </form>
        </div><!-- End: Content -->
    @endsection
