@extends('backend.layout.baseAdmin')
@section('content')
    <!-- Start: Content -->
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="btn-group" role="group"><a class="btn btn-success" role="button"
                        href="{{ route('user.create') }}"><i class="fas fa-plus"></i>&nbsp;<strong>&nbsp;</strong>Ajouter un
                        Utilisateur</a></div>

            </div>
        </div>
        @if (Session::get('success_msg'))
                        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @endif
        <div class="row mt-4">
            <div class="col col-md-12">
                <div class="card">
                    <div class="row card-body">
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-12">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <!-- Start: Row -->
                                    <div class="row">
                                        <!-- Start: Column -->
                                        <div class="col col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning"><img
                                                    src="{{ asset('backend/assets/img/img-profil.png') }}" width="50px"
                                                    height="50px"></div>
                                        </div><!-- End: Column -->
                                        <!-- Start: Column -->
                                        <div class="col col-7 col-md-8">
                                            <div class="numbers">
                                                <!-- Start: Paragraph -->
                                                <p class="card-category">Super Admin</p><!-- End: Paragraph -->
                                                <!-- Start: Paragraph -->
                                                <p class="card-title" style="font-size:20px">{{$adminCount}}</p><!-- End: Paragraph -->
                                                <!-- Start: Paragraph -->
                                                <p></p><!-- End: Paragraph -->
                                            </div>
                                        </div><!-- End: Column -->
                                    </div><!-- End: Row -->
                                </div>

                                <div class="card-footer">
                                    <hr>
                                    <div class="row">
                                        <div class="text-right" style="margin-left:35px"><a href="#"
                                                style="text-decoration:none">
                                                <p class="stats">Cliquer pour voir la liste</p>
                                            </a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-12">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <!-- Start: Row -->
                                    <div class="row">
                                        <!-- Start: Column -->
                                        <div class="col col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning"><img
                                                    src="{{ asset('backend/assets/img/img-profil.png') }}" width="50px"
                                                    height="50px"></div>
                                        </div><!-- End: Column -->
                                        <!-- Start: Column -->
                                        <div class="col col-7 col-md-8">
                                            <div class="numbers">
                                                <!-- Start: Paragraph -->
                                                <p class="card-category">Validateur</p><!-- End: Paragraph -->
                                                <!-- Start: Paragraph -->
                                                <p class="card-title" style="font-size:20px">500</p><!-- End: Paragraph -->
                                                <!-- Start: Paragraph -->
                                                <p></p><!-- End: Paragraph -->
                                            </div>
                                        </div><!-- End: Column -->
                                    </div><!-- End: Row -->
                                </div>

                                <div class="card-footer">
                                    <hr>
                                    <div class="row">
                                        <div class="text-right" style="margin-left:35px"><a href="#"
                                                style="text-decoration:none">
                                                <p class="stats">Cliquer pour voir la liste</p>
                                            </a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-12">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <!-- Start: Row -->
                                    <div class="row">
                                        <!-- Start: Column -->
                                        <div class="col col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning"><img
                                                    src="{{ asset('backend/assets/img/img-profil.png') }}" width="50px"
                                                    height="50px"></div>
                                        </div><!-- End: Column -->
                                        <!-- Start: Column -->
                                        <div class="col col-7 col-md-8">
                                            <div class="numbers">
                                                <!-- Start: Paragraph -->
                                                <p class="card-category">Back-office</p><!-- End: Paragraph -->
                                                <!-- Start: Paragraph -->
                                                <p class="card-title" style="font-size:20px">500</p><!-- End: Paragraph -->
                                                <!-- Start: Paragraph -->
                                                <p></p><!-- End: Paragraph -->
                                            </div>
                                        </div><!-- End: Column -->
                                    </div><!-- End: Row -->
                                </div>

                                <div class="card-footer">
                                    <hr>
                                    <div class="row">
                                        <div class="text-right" style="margin-left:35px"><a href="#"
                                                style="text-decoration:none">
                                                <p class="stats">Cliquer pour voir la liste</p>
                                            </a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-12">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <!-- Start: Row -->
                                    <div class="row">
                                        <!-- Start: Column -->
                                        <div class="col col-5 col-md-4">
                                            <div class="icon-big text-center icon-warning"><img
                                                    src="{{ asset('backend/assets/img/img-profil.png') }}" width="50px"
                                                    height="50px"></div>
                                        </div><!-- End: Column -->
                                        <!-- Start: Column -->
                                        <div class="col col-7 col-md-8">
                                            <div class="numbers">
                                                <!-- Start: Paragraph -->
                                                <p class="card-category">Users bloqués </p><!-- End: Paragraph -->
                                                <!-- Start: Paragraph -->
                                                <p class="card-title" style="font-size:20px">{{$usebloqueCount}}</p><!-- End: Paragraph -->
                                                <!-- Start: Paragraph -->
                                                <p></p><!-- End: Paragraph -->
                                            </div>
                                        </div><!-- End: Column -->
                                    </div><!-- End: Row -->
                                </div>

                                <div class="card-footer">
                                    <hr>
                                    <div class="row">
                                        <div class="text-right" style="margin-left:35px"><a href="#"
                                                style="text-decoration:none">
                                                <p class="stats">Cliquer pour voir la liste</p>
                                            </a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="toolbar"></div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-hover table-bordered display nowrap"
                                style="width:100%">
                                <thead class="text-nowrap text-success">
                                    <tr class="text-muted">
                                        <th>#ID</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Adresse</th>
                                        <th>Téléphone</th>
                                        <th>Rôle</th>
                                        <th>E-mail</th>
                                        <th>Date</th>
                                        <th>Statut</th>
                                        <th>control</th>
                                        <th colspan="2">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($users))
                                    @forelse ($users as $user)
                                        
                                  
                                    <tr style="text-align:center">
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td> {{$user->first_name}} </td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>
                                            @if ($user->apRole == 'ADMIN')
                                                Administrateur
                                            @elseif ($user->apRole == 'USR')
                                            Utilisateur
                                            @elseif ($user->apRole == 'COM')
                                            Communication
                                            @elseif ($user->apRole == 'MARKETING')
                                            Marketing
                                            @else
                                            Statistique
                                            @endif
                                        </td>
                                        <td>{{$user->email}}</td>
                                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                        @if ($user->active==1)
                                        <td><span class="badge badge-pill badge-success">Actif</span></td>
                                        @else
                                        <td><span class="badge badge-pill badge-success">Inactif</span></td>
                                        @endif

                                      
                                       {{-- <td class="text-center"> --}}
                                        {{-- <a  onclick="confirm('vous le')" href="modif-user.html" class="btn btn-success btn-round btn-icon mx-1" role="button"
                                        rel="tooltip" href="#"><i class="fa fa-star fa fa-unlock"></i></a> --}}
                                        <td style="text-align: center">
                                            @if(Auth::check())
                                                @if(Auth::user()->apRole=="ADMIN")
                                                    <form method="POST" action="{{route('activecompte', $user->id)}}">
                                                        @csrf
                                                        {{--                                    <a title="Modifier  le profile" class="btn btn-primary fa fa-edit" href="#"></a>--}}
                                                        <input hidden type="text" name="iduser" value="{{$user->id}}">
                                                        <input hidden type="text" name="status" value="{{$user->active}}">
                                                        @if($user->active==1)
                                                            <button  title="le compte est activé" type="submit" class="btn btn-success btn-round btn-icon mx-1"  onclick="return  confirm('Voulez-vous désactiver ce compte ?')"><span class="fa fa-unlock"></span></button>
                                                        @else
                                                            <button title="le compte est desactivé" type="submit" class="btn btn-danger btn-round btn-icon mx-1"  onclick="return  confirm('Voulez-vous activer ce compte ?')"><span class="fa fa-lock"></span></button>
                                                        @endif
                                                    </form>
    
                                                @endif
    
                                            @endif
                                        </td>
                                        <td class="text-center"><a href="{{route('user.edit', $user->id)}}"
                                                class="btn btn-primary btn-round btn-icon mx-1" role="button"
                                                rel="tooltip" ><i class="fa fa-star fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <td colspan="12">Aucun utilisateur trouvé</td>
                                    @endforelse
                                    @endif
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- End: Column -->
        </div><!-- End: Row -->
    </div><!-- End: Content -->
@endsection
