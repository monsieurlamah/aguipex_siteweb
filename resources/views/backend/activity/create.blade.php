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
    .image-preview {
        width: 100%;
        height: auto;
        margin-bottom: 1rem;
    }
</style>
 
<div class="content">
    <form method="POST" action="{{ route('activity.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row card-wizard-2">
            <!-- Start: Column -->
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header"></div>
                        <img id="image-preview" class="img-fluid" src="{{ asset('backend/assets/img/iconeImage.png') }}" alt="image-preview">
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="text-success font-weight-bolder">Ajout d'une activité sur le site</h5>
                    </div>
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <div class="col-lg-4 pr-1">
                                <div class="form-group">
                                    <label class="form-label">Titre d'activité</label>
                                    <div class="input-group">
                                        <div class="input-group-text input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-list"></i></span>
                                        </div>
                                        <input class="form-control" type="text" name="title" placeholder="Entrer le titre..." value="{{ old('title') }}">
                                    </div>
                                </div>
                                @error('title')
                                    <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                @enderror
                            </div><!-- End: Column -->
                            <div class="col-lg-4 pr-1">
                                <div class="form-group">
                                    <label class="form-label" for="type">Type d'activité *</label>
                                    <div class="input-group">
                                        <div class="input-group-text input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-list"></i></span>
                                        </div>
                                        <input class="form-control" type="text" name="type" placeholder="Entre le type..." value="{{ old('type') }}">
                                    </div>
                                </div>
                                @error('type')
                                    <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                @enderror
                            </div><!-- End: Column -->
                            <div class="col-lg-4 pr-1">
                                <div class="form-group">
                                    <label class="form-label" for="date_activitie">Date d'activité</label>
                                    <div class="input-group">
                                        <div class="input-group-text input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-list"></i></span>
                                        </div>
                                        <input class="form-control" type="date" name="date_activitie" placeholder="Entrer la date..." value="{{ old('date_activitie') }}">
                                    </div>
                                </div>
                                @error('date_activitie')
                                    <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                @enderror
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->

                        <!-- Start: Row -->
                        <div class="row">
                            <div class="col-lg-12 pr-1">
                                <div class="form-group">
                                    <label class="form-label" for="image">Image principale *</label>
                                    <div class="input-group input-file">
                                        <div class="input-group-text input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file"></i></span>
                                        </div>
                                        <input id="image-input" class="form-control border" type="file" name="image" value="{{ old('image') }}">
                                    </div>
                                </div>
                                @error('image')
                                    <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                @enderror
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->

                        <!-- Start: Row -->
                        <div class="row">
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="col-lg-3 pr-1">
                                    <div class="form-group">
                                        <label class="form-label" for="images">Image supplémentaire {{ $i }}</label>
                                        <img id="image-preview-{{ $i }}" class="image-preview img-fluid" src="{{ asset('backend/assets/img/iconeImage.png') }}" alt="image-preview-{{ $i }}">
                                        <div class="input-group input-file">
                                            <div class="input-group-text input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file"></i></span>
                                            </div>
                                            <input id="image-input-{{ $i }}" class="form-control border" type="file" name="images[]">
                                        </div>
                                    </div>
                                    @error('images')
                                        <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                    @enderror
                                </div><!-- End: Column -->
                            @endfor
                        </div><!-- End: Row -->
                        @if(Auth::check())
                        @if(Auth::user()->apRole == "ADMIN")
                        <div class="col-lg-12 pr-1">
                            <div class="form-group">
                                <label class="form-label">Statut</label>
                                <div class="input-group">
                                    <div class="input-group-text input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list"></i></span>
                                    </div>
                                    <select class="form-control" name="status" id="categorie_id">
                                        <option value="" selected disabled>Sélectionner le statut</option>
                                        <option value="brouillon">Brouillon</option>
                                        <option value="publier">Publier</option>
                                    </select>
                                </div>
                            </div>
                            @error('status')
                                <div class="text-danger"> <strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        @endif
                        @endif
                        <!-- End: Column -->

                        <div class="col-lg-12 pr-1">
                            <div class="form-outline">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" id="textAreaExample1" name="description" placeholder="Entrer une description..." rows="4">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                                <div class="text-danger"> <strong>{{ $message }}</strong></div>
                            @enderror
                        </div><!-- End: Column -->
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-success mx-1" type="submit">Ajouter</button>
                                <a href="{{ route('activity.index') }}" class="btn btn-primary mx-1">Rejeter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End: Column -->
        </div><!-- End: Row -->
    </form>
</div><!-- End: Content -->

<script>
    document.getElementById('image-input').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('image-preview').src = e.target.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    });

    @for ($i = 1; $i <= 4; $i++)
        document.getElementById('image-input-{{ $i }}').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('image-preview-{{ $i }}').src = e.target.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });
    @endfor
</script>
@endsection
