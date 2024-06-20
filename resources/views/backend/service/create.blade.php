@extends('backend.layout.baseAdmin')
@section('content')
    <div class="content">

        <form method="post" action="{{ route('service.store') }}">
            @csrf
            @method('POST')
            <div class="row card-wizard-2">

                <!-- Start: Column -->
                <div class="col-lg-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="text-success font-weight-bolder">Ajout de service</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <!-- Start: Row -->
                                <div class="row row">
                                    <div class="col-lg-6 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Titre</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span
                                                        class="input-group-text"><i class="fas fa-list"></i></span>
                                                </div><input class="form-control form-control" type="text" name="title"
                                                    placeholder="Titre du service..." value="{{ old('title') }}">
                                                @error('title')
                                                    <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->
                                    <div class="col-lg-6 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Icône</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span
                                                        class="input-group-text"><i class="fas fa-list"></i></span>
                                                </div><input class="form-control form-control" type="text" name="icone"
                                                    placeholder="Icône du service..." value="{{ old('icone') }}">
                                                @error('icone')
                                                    <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->
                                    <div class="row row">   
                                        @if (Auth::check())
                                        @if (Auth::user()->apRole == "ADMIN")
                                                
                                                                             
                                        <div class="col-lg-12 pr-1">
                                            <div class="form-group"><label class="form-label">Statut * </label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div>
                                                    <select class="form-control" name="status" id="categorie_id">
                                                        <option value="" selected disabled>Sélectionner le statut
                                                        </option>
                                                            <option value="brouillon">Brouillon</option>
                                                            <option value="publier">Publier</option>
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

                                    </div>
                                    <div class="col-lg-12 pr-1">
                                        <div class="form-outline">
                                            <label class="form-label" for="nomDeLaBanque">Description</label>
                                            <textarea class="form-control" id="textAreaExample1" name="description" placeholder="Entrer une description..."
                                                rows="4" value="{{ old('description') }}"></textarea>

                                        </div>
                                        @error('description')
                                            <div class="text-danger"> <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div><!-- End: Column -->
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-6"><button class="btn btn-primary btn btn-success mx-1"
                                        type="submit">Ajouter</button><a href="{{ route('service.create') }}"
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
