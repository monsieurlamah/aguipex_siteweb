@extends('backend.layout.baseAdmin')
@section('content')
    <style>
        .input-file {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.300rem 0.2rem;
            font-size: 1rem;
            line-height: 1;
            color: #495057;
            background-color: #fff;
        }
    </style>
        <div class="content">

            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row card-wizard-2">

                    <!-- Start: Column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                </div>
                                <img id="image-preview" class="img-fluid" src="{{ asset('backend/assets/img/iconeImage.png') }}" alt="image-preview">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="text-success font-weight-bolder">Création d'un produit sur le site
                                </h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <!-- Start: Row -->
                                    <div class="row row">
                                        <div class="col-lg-6 pr-1">
                                            <div class="form-group"><label class="form-label">Catégorie * </label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div>
                                                    <select class="form-control" name="categorie_id" id="categorie_id">
                                                        <option value="" selected disabled>Sélectionner la catégorie
                                                        </option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            @error('categorie_id')
                                                <div class="text-danger"> <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div><!-- End: Column -->
                                        <div class="col-lg-6 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="Lieu de l'infraction *">Titre *</label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control" type="text" name="title"
                                                        placeholder="Entre le titre..." value="{{ old('title') }}">

                                                </div>
                                            </div>
                                            @error('title')
                                                <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                            @enderror
                                        </div><!-- End: Column -->
                                        <div class="col-lg-6 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="Lieu de l'infraction *">Image</label>
                                                <div class="input-group input-file">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-file"></i></span>
                                                    </div><input id="image-input" class="form-control border" type="file"
                                                        name="image" value="{{ old('image') }}">
                                                </div>
                                            </div>
                                            @error('image')
                                                <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                            @enderror
                                        </div><!-- End: Column -->
                                        <div class="col-lg-6 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="Lieu de l'infraction *">Fiches</label>
                                                <div class="input-group input-file">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-file"></i></span>
                                                    </div><input class="form-control border" type="file"
                                                        name="file_path" value="{{ old('file_path') }}">
                                                </div>
                                            </div>
                                            @error('file_path')
                                                <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                            @enderror
                                        </div><!-- End: Column -->
                                        <div class="col-lg-12 pr-1">
                                            <div class="form-group"><label class="form-label">En vedette </label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div>
                                                    <select class="form-control" name="featured" id="featured">
                                                        <option value="" selected disabled>Sélectionner
                                                        </option>
                                                            <option value="1">Oui</option>
                                                            <option value="0">Non</option>
                                                        </select>
                                                </div>
                                            </div>
                                            @error('featured')
                                                <div class="text-danger"> <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div><!-- End: Column -->
                                        <!-- Start: Row -->
                                        <div class="row row">
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
                                                                <option value="brouillon">Brouillon</option>
                                                                <option value="publier">Publier</option>
                                                            </select>

                                                    </div>
                                                </div>
                                                @error('status')
                                                    <div class="text-danger"> <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div><!-- End: Column -->
                                            @endif
                                            @endif
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

                                        </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6"><button class="btn btn-success mx-1"
                                            type="submit">Valider</button>
                                        <a href="{{ route('slide.index') }}" class="btn btn-primary  mx-1">Rejeter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End: Column -->
                </div>
                <!-- End: Row -->
            </form>
        </div><!-- End: Content -->
        <!-- Modal Face A -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Face A</h5>
                    </div>
                    <div class="modal-body">
                        <img class="img-fluid" src="/assets/img/Cellcom-bloc.jpg">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Face b-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Face B</h5>
                    </div>
                    <div class="modal-body">
                        <img class="img-fluid" src="/assets/img/Cellcom-bloc.jpg">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('image-input').addEventListener('change', function(event) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('image-preview').src = e.target.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            });
        </script>
    @endsection
