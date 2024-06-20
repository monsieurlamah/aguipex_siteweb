@extends('backend.layout.baseAdmin')
@section('content')
        <div class="content">

            <form method="post" action="{{ route('service_bas.update',$service_bas->id) }}">
                @csrf
                @method('PUT')
                <div class="row card-wizard-2">

                    <!-- Start: Column -->
                    <div class="col-lg-12">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="text-success font-weight-bolder">Modification de mission</h5>
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
                                                        name="title" placeholder="Titre du service..." value="{{$service_bas->title}}">
                                                    @error('title')
                                                        <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- End: Column -->
                                        <div class="col-lg-6 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="nomDeLaBanque">Icône</label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control form-control" type="text"
                                                        name="icone" placeholder="Icône du service..." value="{{$service_bas->icone}}">
                                                    @error('icone')
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
                                                        @if ($service_bas->status === 'brouillon')
                                                            <option selected value="brouillon">Brouillon</option>
                                                            <option value="publier">Publier</option>
                                                        @else
                                                            <option value="brouillon">Brouillon</option>
                                                            <option selected value="publier">Publier</option>
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
                                       
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6"><button class="btn btn-primary btn btn-success mx-1"
                                            type="submit">Modifier</button><a href="{{route('service_bas.create')}}"
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
