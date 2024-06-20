@extends('backend.layout.baseAdmin')
@section('content')
<style>
    .input-file {
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
    }
</style>
        <div class="content">

            <form method="POST" action="{{ route('slide.update', $slide->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row card-wizard-2">

                    <!-- Start: Column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                </div>
                                <img id="image-preview" class="img-fluid" src="{{asset('assets/slides/'.$slide->image)}}" alt="image-preview">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="text-success font-weight-bolder">Modification d'un slide sur la page d'accueil du site
                                </h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <!-- Start: Row -->
                                    <div class="row row">
                                        <div class="col-lg-4 pr-1">
                                            <div class="form-group"><label class="form-label">Numero du slide * </label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control " type="number" name="numero"
                                                        placeholder="Entrer le numéro..." value="{{$slide->numero}}">
                                                    @error('numero')
                                                        <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- End: Column -->
                                        <div class="col-lg-4 pr-1">
                                            <div class="form-group"><label class="form-label"
                                                    for="Lieu de l'infraction *">Titre *</label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control" type="text" name="title"
                                                        placeholder="Entre le titre..." value="{{$slide->title}}">
                                                    @error('title')
                                                        <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- End: Column -->
                                        <div class="col-lg-4 pr-1">
                                            <div class="form-group"><label class="form-label" for="Montant">Sous
                                                    titre</label>
                                                <div class="input-group">
                                                    <div class="input-group-text input-group-prepend"><span
                                                            class="input-group-text"><i class="fas fa-list"></i></span>
                                                    </div><input class="form-control" type="text" name="subtitle"
                                                        placeholder="Entrer le sous titre..." value="{{$slide->subtitle}}">
                                                    @error('subtitle')
                                                        <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- End: Column -->
                                        <!-- Start: Row -->
                                        <div class="row row">
                                            <div class="col-lg-6 pr-1">
                                                <div class="form-group"><label class="form-label">Lien * </label>
                                                    <div class="input-group">
                                                        <div class="input-group-text input-group-prepend"><span
                                                                class="input-group-text"><i
                                                                    class="fas fa-list"></i></span>
                                                        </div><input class="form-control " type="text" name="lien"
                                                            placeholder="Entrer le lien..." value="{{$slide->lien}}">
                                                        @error('lien')
                                                            <div class="text-danger"> <strong>{{ $message }}</strong>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!-- End: Column -->
                                            <div class="col-lg-6 pr-1">
                                                <div class="form-group"><label class="form-label"
                                                        for="Lieu de l'infraction *">Libéllé du lien *</label>
                                                    <div class="input-group">
                                                        <div class="input-group-text input-group-prepend"><span
                                                                class="input-group-text"><i
                                                                    class="fas fa-list"></i></span>
                                                        </div><input class="form-control" type="text" name="libelle"
                                                            placeholder="Entre le libéllé..." value="{{$slide->libelle}}">
                                                        @error('libelle')
                                                            <div class="text-danger"> <strong>{{ $message }}</strong>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div><!-- End: Column -->
                                            <div class="col-lg-12 pr-1">
                                                <div class="form-group"><label class="form-label"
                                                        for="Lieu de l'infraction *">Image</label>
                                                    <div class="input-group input-file">
                                                        <div class="input-group-text input-group-prepend"><span
                                                                class="input-group-text"><i class="fas fa-file"></i></span>
                                                        </div><input id="image-input" class="form-control border" type="file"
                                                            name="image" value="{{$slide->image}}">
                                                    </div>
                                                </div>
                                                @error('image')
                                                    <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                                @enderror
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
                                                            @if ($slide->status === 'brouillon')
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
                                            <!-- End: Column --> 
                                            <div class="col-lg-12 pr-1">
                                                <div class="form-outline">
                                                    <label class="form-label" for="nomDeLaBanque">Description</label>
                                                    <textarea class="form-control" id="textAreaExample1" name="description" placeholder="Entrer une description..."
                                                        rows="4">{{$slide->description}}</textarea>
                                                        @error('description')
                                                            <div class="text-danger"> <strong>{{ $message }}</strong>
                                                            </div>
                                                        @enderror
                                                </div>
                                            </div><!-- End: Column -->

                                        </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6"><button class="btn btn-success mx-1"
                                            type="submit">Modifier</button>
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
