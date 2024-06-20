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
        <form method="POST" action="{{ route('activity.update', $activity->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row card-wizard-2">
                <!-- Start: Column -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header"></div>
                            <img id="image-preview" class="img-fluid" src="{{ asset('assets/activity/' . $activity->image) }}"
                                alt="image-preview">
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
                                            <input class="form-control" type="text" name="title"
                                                placeholder="Entrer le titre..." value="{{ $activity->title }}">
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
                                            <input class="form-control" type="text" name="type"
                                                placeholder="Entre le type..." value="{{ $activity->type }}">
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
                                            <input class="form-control" type="date" name="date_activitie"
                                                placeholder="Entrer la date..." value="{{ $activity->date_activitie }}">
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
                                            <input id="image-input" class="form-control border" type="file"
                                                name="image" value="{{ $activity->image }}">
                                        </div>
                                    </div>
                                    @error('image')
                                        <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                    @enderror
                                </div><!-- End: Column -->
                            </div><!-- End: Row -->

                            <!-- Start: Row -->
                            <!-- Champs pour les images supplémentaires -->
                            <div class="row">
                                @for ($index = 0; $index < 4; $index++)
                                    <div class="col-lg-3 pr-1">
                                        <div class="form-group">
                                            <label class="form-label" for="images">Image supplémentaire {{ $index + 1 }}</label>
                                            
                                            @if (isset($images[$index]))
                                                <!-- Si l'image existe, afficher l'image existante -->
                                                <img id="image-preview-{{ $index }}" class="image-preview img-fluid" src="{{ asset('assets/activity/activities/' . $images[$index]->images) }}" alt="image-preview-{{ $index }}">
                                                <div class="input-group input-file">
                                                    <div class="input-group-text input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-file"></i></span>
                                                    </div>
                                                    <input id="image-input-{{ $index + 1 }}" class="form-control border" type="file" name="images[]" data-preview-target="#image-preview-{{ $index }}">
                                                </div>
                                            @else
                                                <!-- Si l'image n'existe pas, afficher un champ vide pour l'upload -->
                                                <div class="input-group input-file">
                                                    <div class="input-group-text input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-file"></i></span>
                                                    </div>
                                                    <input id="image-input-{{ $index + 1 }}" class="form-control border" type="file" name="images[]" data-preview-target="#image-preview-new-{{ $index + 1 }}">
                                                    <img id="image-preview-new-{{ $index + 1 }}" class="image-preview img-fluid" src="" alt="image-preview-new-{{ $index + 1 }}" style="display: none;">
                                                </div>
                                            @endif
                        
                                            @error('images')
                                                <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                            @enderror
                                        </div>
                                    </div><!-- End: Column -->
                                @endfor
                            </div><!-- End: Row -->


                            <div class="col-lg-12 pr-1">
                                <div class="form-group">
                                    <label class="form-label">Statut</label>
                                    <div class="input-group">
                                        <div class="input-group-text input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-list"></i></span>
                                        </div>
                                        <select class="form-control" name="status" id="categorie_id">
                                            <option value="" selected disabled>Sélectionner le statut</option>
                                            <option value="brouillon"
                                                {{ $activity->status == 'brouillon' ? 'selected' : '' }}>Brouillon</option>
                                            <option value="publier"
                                                {{ $activity->status == 'publier' ? 'selected' : '' }}>Publier</option>
                                        </select>
                                    </div>
                                </div>
                                @error('status')
                                    <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                @enderror
                            </div><!-- End: Column -->

                            <div class="col-lg-12 pr-1">
                                <div class="form-outline">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" id="textAreaExample1" name="description" placeholder="Entrer une description..."
                                        rows="4">{{ $activity->description }}</textarea>
                                </div>
                                @error('description')
                                    <div class="text-danger"> <strong>{{ $message }}</strong></div>
                                @enderror
                            </div><!-- End: Column -->
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn btn-success mx-1" type="submit">Modifier</button>
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

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('input[type="file"]').forEach(function(input) {
                input.addEventListener('change', function(event) {
                    const input = event.target;
                    const previewId = input.getAttribute('data-preview-target');
                    const preview = document.querySelector(previewId);

                    if (input.files && input.files[0]) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        }

                        reader.readAsDataURL(input.files[0]);
                    } else {
                        preview.style.display = 'none';
                    }
                });
            });
        });

        // @for ($i = 1; $i <= 4; $i++)
        //     document.getElementById('image-input-{{ $i }}').addEventListener('change', function(event) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             document.getElementById('image-preview-{{ $i }}').src = e.target.result;
        //         }
        //         reader.readAsDataURL(event.target.files[0]);
        //     });
        // @endfor
    </script>
@endsection
