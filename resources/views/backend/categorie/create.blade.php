@extends('backend.layout.baseAdmin')
@section('content')
        <div class="content">

            <form method="post" action="{{ route('categorie.store') }}">
                @csrf
                @method('POST')
                <div class="row card-wizard-2">

                    <!-- Start: Column -->
                    <div class="col-lg-12">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="text-success font-weight-bolder">Ajout de catégorie</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <!-- Start: Row -->
                                    <div class="row row">
                                        <div class="col-lg-12 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="nomDeLaBanque">Nom</label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control form-control" type="text"
                                                        name="name" placeholder="Nom de la catégorie..." value="{{old('name')}}">
                                                    @error('name')
                                                        <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- End: Column -->
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6"><button class="btn btn-primary btn btn-success mx-1"
                                            type="submit">Ajouter</button><a href="{{route('categorie.create')}}"
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
