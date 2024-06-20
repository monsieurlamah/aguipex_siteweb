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

            <form method="POST" action="{{ route('temoignage.update', $temoignage->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row card-wizard-2">

                    <!-- Start: Column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                </div>
                                <img id="image-preview" class="img-fluid" src="{{ asset('assets/temoignage/'. $temoignage->image) }}" alt="image-preview">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="text-success font-weight-bolder">Modification d'un temoignage
                                </h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <!-- Start: Row -->
                                    <div class="row row">
                                        
                                    
                                      
                                        <div class="col-lg-6 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="Lieu de l'infraction *">Nom *</label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control" type="text" name="name"
                                                        placeholder="Entre le nom..." value="{{$temoignage->name}}">

                                                </div>
                                            </div>
                                            @error('name')
                                                <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                            @enderror
                                        </div><!-- End: Column -->
                                        <div class="col-lg-6 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="Lieu de l'infraction *">Fonction *</label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control" type="text" name="fonction"
                                                        placeholder="Entre la fonction..." value="{{ $temoignage->fonction }}">

                                                </div>
                                            </div>
                                            @error('fonction')
                                                <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                            @enderror
                                        </div><!-- End: Column -->
                                        <div class="col-lg-12 pr-1">
                                            <div class="form-outline">
                                                <label class="form-label" for="nomDeLaBanque">Contenu</label>
                                                <textarea class="form-control" id="textAreaExample1" name="contenu" placeholder="Entrer le contenu..."
                                                    rows="4" value="{{ old('contenu') }}">{{$temoignage->contenu}}</textarea>
                                            </div>
                                            @error('contenu')
                                                <div class="text-danger"> <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div><!-- End: Column -->
                                     
                                        <div class="col-lg-12 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="Lieu de l'infraction *">Image</label>
                                                <div class="input-group input-file">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-file"></i></span>
                                                    </div><input id="image-input" class="form-control border" type="file"
                                                        name="image" value="{{ $temoignage->image }}">
                                                </div>
                                            </div>
                                            @error('image')
                                                <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                            @enderror
                                        </div><!-- End: Column -->
                                    
                                        <!-- Start: Row -->
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
                                                               @if ($temoignage->status == "brouillon")
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

                                        </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6"><button class="btn btn-success mx-1"
                                            type="submit">Valider</button>
                                        <a href="{{ route('temoignage.index') }}" class="btn btn-primary  mx-1">Rejeter</a>
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
