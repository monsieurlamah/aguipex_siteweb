@extends('backend.layout.baseAdmin')
@section('content')
    <!-- Start: Content -->
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="btn-group" role="group"><a class="btn btn-success" role="button"
                        href="{{ route('temoignage.create') }}"><i
                            class="fas fa-plus-circle"></i>&nbsp;<strong>&nbsp;</strong>Ajouter un temoignage</a></div>

            </div>
        </div>
        @if (Session::get('success_msg'))
            <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
        <div class="row mt-4">
            <div class="col col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tous les temoignages</h4>
                    </div>
                    <div class="card-body">

                        <div class="toolbar"></div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-hover table-bordered display nowrap"
                                style="width:100%">
                                <thead class="text-nowrap text-success">
                                    <tr class="text-muted">
                                        <th>N°</th>
                                        <th>Photo</th>
                                        <th>Nom</th>
                                        <th>Fonction</th>
                                        <th>Status</th>
                                        <th colspan="2">Action</th>
                                        <th>Voir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($temoignages as $temoignage)
                                        <tr style="text-align:center">
                                            <td>{{ $temoignage->id }}</td>
                                            @if ($temoignage->image)
                                                <td><img src="{{asset('assets/temoignage/'.$temoignage->image)}}" height="50" width="50"
                                                        style="object-fit: cover" alt="{{ $temoignage->title }}"></td>
                                            @endif
                                            <td>{{ $temoignage->name }}</td>
                                            <td>{{ $temoignage->fonction }}</td>
                                            <td><span class="badge badge-pill badge-success">{{ $temoignage->status }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('temoignage.edit', $temoignage->id) }}"><i
                                                        class="fa fa-edit"></i></a>
                                            </td>
                                            <td><a href="{{ route('temoignage.delete', $temoignage->id) }}"><i
                                                        class="fa fa-trash"></i></a></td>
                                            <td align="center">
                                                <a href="{{ route('temoignage.detail', $temoignage->id) }}"><button
                                                        type="button" class="btn btn-primary btn-circle">
                                                        <i class="fas fa-eye"></i>
                                                    </button></a>
                                            </td>
                                        </tr>

                                    @empty
                                        <td class="text-center" colspan="10">Aucun temoignage trouvé</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- End: Column -->
        </div><!-- End: Row -->
    </div><!-- End: Content -->
    <div class="modal fade" role="dialog" tabindex="-1" id="Modification">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center"><i class="far fa-edit fs-1 mt-2 text-primary"></i>
                    <h4 class="modal-title">Modification</h4>
                    <p class="fs-6">Vous en êtes sûr ?</p>
                </div>
                <div class="modal-footer d-xxl-flex justify-content-xxl-center"><a class="btn btn-primary" role="button"
                        href="/mes-employes/mes-employes--Postes--Modification.html">Oui</a><button class="btn btn-light"
                        type="button" data-bs-dismiss="modal">Non</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="Desactivation">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center"><i class="fas fa-lock-open fs-1 mt-2 text-danger"></i>
                    <h4 class="modal-title">Désactivation</h4>
                    <p class="fs-6">Vous en êtes sûr ?</p>
                </div>
                <div class="modal-footer d-xxl-flex justify-content-xxl-center"><button class="btn btn-primary"
                        type="button">Oui</button><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal">Non</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="Activation">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center"><i class="fas fa-lock fs-1 mt-2 text-success"></i>
                    <h4 class="modal-title">Activation</h4>
                    <p class="fs-6">Vous en êtes sûr ?</p>
                </div>
                <div class="modal-footer d-xxl-flex justify-content-xxl-center"><button class="btn btn-primary"
                        type="button">Oui</button><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal">Non</button></div>
            </div>
        </div>
    </div>
@endsection
