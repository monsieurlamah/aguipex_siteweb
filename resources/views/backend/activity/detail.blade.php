@extends('backend.layout.baseAdmin')
@section('content')

    <!-- Start: Content -->
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="btn-group" role="group"><a class="btn btn-success" role="button"
                        href="{{ route('activity.index') }}"><i
                            class="fas fa-arrow-left"></i>&nbsp;<strong>&nbsp;</strong>Retour à la liste</a></div>

            </div>
        </div>
        <div class="row">
            <div class="colq col-md-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row row">
                            <div class="col col-12 bg-white px-3 mb-0 pb-3">
                                <h6>Détails de l'activité :</h6>

                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <p class="py-2">Titre :</p>
                                    <p class="py-2 text-muted">{{ $activity->title }}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <p class="py-2">Type :</p>
                                    <p class="py-2 text-muted">{{ $activity->type }}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <p class="py-2">Description :</p>
                                    <p class="py-2 text-muted">{{ $activity->description }}</p>
                                </div>

                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <p class="py-2">Date d'activité :</p>
                                    <p class="py-2 text-muted">{{ $activity->date_activitie }}</p>
                                </div>

                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <p class="py-2">image :</p>
                                    @if ($activity->image)
                                        <img class="img-fluid py-2" width="80" height="80" style="object-fit: cover;"
                                            src="{{ asset('assets/activity/'.$activity->image)}}">
                                    @endif
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <p class="py-2">Statut actuel :</p>
                                    <p class="py-2 text-muted">{{ $activity->status }}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    @if (isset($images))
                                        <p  class="py-2">Autres Images</p>
                                        @foreach ($images as $activityImages)
                                            <img src="{{ asset('assets/activity/activities/'. $activityImages->images) }}" alt="{{ $activity->title }}"
                                                width="50" height="50">
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


        </div>
    @endsection
