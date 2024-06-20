@extends('backend.layout.baseAdmin')
@section('content')
    <!-- Start: Content -->
    <div class="content">
        @if (Session::get('success_msg'))
            <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
        @if (Session::get('danger'))
            <div class="alert alert-danger">{{ Session::get('danger') }}</div>
        @endif
        <div>
          
            <!-- Start: Row -->
            <div class="row card-wizard-2">
                <div class="tabs">
                    <div class="single-tabs tabs-four">
                        <ul class="nav nav-justified " id="myTab" role="tablist">
                            <li class="nav-item"><a id="profil-tab" class="text-decoration-none  active"
                                    data-bs-toggle="tab" href="#profil" role="tab" aria-controls="profil"
                                    aria-selected="true">Editer le
                                    Profil</a></li>
                            <li class="nav-item"><a id="password-tab" class="text-decoration-none" data-bs-toggle="tab"
                                    href="#password" role="tab" aria-controls="password" aria-selected="false">Editer le
                                    mot de pass</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div id="profil" class="tab-pane fade show active" role="tabpanel"
                                aria-labelledby="profil-tab">
                                <div class="tab-text" style="background-color:white">
                                    <div class="row mt-4">
                                        <div class="col col-md-12">
                                            <div class="toolbar"></div>
                                            <div class="col-lg-12">
                                                <div class="h-100">
                                                    <div class="card-header">
                                                        <h5 class="text-success font-weight-bolder">Info Utilisateur</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <form method="post" action="{{route('reglage.store')}}">
                                                            @csrf
                                                            @method('POST')
                                                            <!-- Start: Row -->
                                                            <div class="row row">
                                                                <div class="col-lg-6 pr-1">
                                                                    <div class="form-group"><label class="form-label"
                                                                            for="nomDeLaBanque">Nom</label>
                                                                        <div class="input-group">
                                                                            <div
                                                                                class="input-group-text input-group-prepend">
                                                                                <span class="input-group-text"><i
                                                                                        class="fas fa-user"></i></span>
                                                                            </div><input class="form-control form-control"
                                                                                type="text" name="name" value="{{$infoUser->name}}"
                                                                                placeholder="Nom">
                                                                                @if ($errors->has('name'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div><!-- End: Column -->
                                                                <div class="col-lg-6 pr-1">
                                                                    <div class="form-group"><label class="form-label"
                                                                            for="nomDeLaBanque">Prénom</label>
                                                                        <div class="input-group">
                                                                            <div
                                                                                class="input-group-text input-group-prepend">
                                                                                <span class="input-group-text"><i
                                                                                        class="fas fa-user"></i></span>
                                                                            </div><input class="form-control form-control"
                                                                                type="text" name="first_name" value="{{$infoUser->first_name}}"
                                                                                placeholder="Prénom">
                                                                                @if ($errors->has('first_name'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div><!-- End: Column -->
                                                                <div class="col-lg-4 pr-1">
                                                                    <div class="form-group"><label class="form-label"
                                                                            for="nomDeLaBanque">Email</label>
                                                                        <div class="input-group">
                                                                            <div
                                                                                class="input-group-text input-group-prepend">
                                                                                <span class="input-group-text"><i
                                                                                        class="fas fa-envelope"></i></span>
                                                                            </div><input class="form-control form-control"
                                                                                type="email" name="email"
                                                                                placeholder="Email" value="{{$infoUser->email}}">
                                                                                @if ($errors->has('email'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div><!-- End: Column -->

                                                                <div class="col-lg-4 pr-1">
                                                                    <div class="form-group"><label class="form-label"
                                                                            for="nomDeLaBanque">Adresse</label>
                                                                        <div class="input-group">
                                                                            <div
                                                                                class="input-group-text input-group-prepend">
                                                                                <span class="input-group-text"><i
                                                                                        class="fas fa-map-marked"></i></span>
                                                                            </div><input class="form-control form-control"
                                                                                type="text" name="address" value="{{$infoUser->address}}"
                                                                                placeholder="Adresse">
                                                                                @if ($errors->has('address'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('address') }}</strong>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div><!-- End: Column -->
                                                                @if(Auth::check())
                                                                @if(Auth::user()->apRole == "ADMIN")
                                                                <div class="col-lg-4 pr-1">
                                                                    <div class="form-group"><label class="form-label"
                                                                            for="nomDeLaBanque">Rôle</label>
                                                                        <div class="input-group">
                                                                            <div
                                                                                class="input-group-text input-group-prepend">
                                                                                <span class="input-group-text"><i
                                                                                        class="fas fa-user"></i></span>
                                                                            </div>
                                                                            <select name="apRole" id="" class="form-control form-control">
                                                                                @if ($infoUser->apRole == "ADMIN")
                                                                                <option value="ADMIN" selected>Administrateur</option>
                                                                                <option value="USR">Utilisateur</option>
                                                                                <option value="COM">Communication</option>
                                                                                <option value="MARKETING" >Marketing</option>
                                                                                <option value="STATIC">Statistique</option>
                                                                                @elseif ($infoUser->apRole == "USR")
                                                                                <option value="ADMIN">Administrateur</option>
                                                                                <option value="USR" selected>Utilisateur</option>
                                                                                <option value="COM">Communication</option>
                                                                                <option value="MARKETING" >Marketing</option>
                                                                                <option value="STATIC">Statistique</option>
                                                                                @elseif ($infoUser->apRole == "COM")
                                                                                <option value="ADMIN">Administrateur</option>
                                                                                <option value="USR">Utilisateur</option>
                                                                                <option value="COM" selected>Communication</option>
                                                                                <option value="MARKETING" >Marketing</option>
                                                                                <option value="STATIC">Statistique</option>
                                                                                @elseif ($infoUser->apRole == "MARKETING")
                                                                                <option value="ADMIN">Administrateur</option>
                                                                                <option value="USR">Utilisateur</option>
                                                                                <option value="COM">Communication</option>
                                                                                <option value="MARKETING" selected>Marketing</option>
                                                                                <option value="STATIC">Statistique</option>
                                                                                @else
                                                                                <option value="ADMIN">Administrateur</option>
                                                                                <option value="USR">Utilisateur</option>
                                                                                <option value="COM">Communication</option>
                                                                                <option value="MARKETING">Marketing</option>
                                                                                <option value="STATIC" selected>Statistique</option>
                                                                                @endif

                                                                            </select>    
                                                                            @if ($errors->has('apRole'))
                                                                            <span class="invalid-feedback">
                                                                                <strong>{{ $errors->first('apRole') }}</strong>
                                                                            </span>
                                                                        @endif                                                               </div>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                @endif
                                                                <!-- End: Column -->
                                                            </div>
                                                       
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-6"><button name="info" value="info"
                                                                    class="btn btn-warning btn btn-success mx-1"
                                                                    type="submit">Mise à jour</button><button
                                                                    class="btn btn-success mx-1"
                                                                    type="submit">Annuler</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <div id="password" class="tab-pane fade" role="tabpanel" aria-labelledby="password-tab">
                                <div class="tab-text" style="background-color:white">
                                    <div class="row mt-4">
                                        <div class="col col-md-12">
                                            <div class="toolbar"></div>
                                            <div class="col-lg-12">
                                                <div class="h-100">
                                                    <div class="card-header">
                                                        <h5 class="text-success font-weight-bolder">Info Utilisateur</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <form method="post" action="{{route('updatePassword')}}">
                                                            @csrf
                                                            @method('POST')
                                                            <!-- Start: Row -->
                                                            <div class="row row">
                                                                <!-- Start: Column -->
                                                                <div class="col-lg-4 pr-1">
                                                                    <div class="form-group"><label class="form-label"
                                                                            for="nomDeLaBanque">Mot de passe actuel</label>
                                                                        <div class="input-group">
                                                                            <div
                                                                                class="input-group-text input-group-prepend">
                                                                                <span class="input-group-text"><i
                                                                                        class="fas fa-lock"></i></span>
                                                                            </div><input class="form-control form-control"
                                                                                type="password" name="ancienpassword">
                                                                                @if ($errors->has('ancienpassword'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('ancienpassword') }}</strong>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div><!-- End: Column -->
                                                                <div class="col-lg-4 pr-1">
                                                                    <div class="form-group"><label class="form-label"
                                                                            for="nomDeLaBanque">Nouveau mot de pass</label>
                                                                        <div class="input-group">
                                                                            <div
                                                                                class="input-group-text input-group-prepend">
                                                                                <span class="input-group-text"><i
                                                                                        class="fas fa-lock"></i></span>
                                                                            </div><input class="form-control form-control"
                                                                                type="password" name="nouveaupassword">
                                                                                @if ($errors->has('nouveaupassword'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('nouveaupassword') }}</strong>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div><!-- End: Column -->
                                                                <div class="col-lg-4 pr-1">
                                                                    <div class="form-group"><label class="form-label"
                                                                            for="nomDeLaBanque">Confirmer mot de
                                                                            passe</label>
                                                                        <div class="input-group">
                                                                            <div
                                                                                class="input-group-text input-group-prepend">
                                                                                <span class="input-group-text"><i
                                                                                        class="fas fa-lock"></i></span>
                                                                            </div><input class="form-control form-control"
                                                                                type="password" name="password_repeat">
                                                                                @if ($errors->has('password_repeat'))
                                                                                <span class="invalid-feedback">
                                                                                    <strong>{{ $errors->first('password_repeat') }}</strong>
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div><!-- End: Column -->


                                                            </div>
                                                       
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="col-lg-6"><button name="updatePassword" value="updatePassword"
                                                                    class="btn btn-warning btn btn-success mx-1"
                                                                    type="submit">Mise à jour</button><button
                                                                    class="btn btn-success mx-1"
                                                                    type="submit">Annuler</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- End: Column -->
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- End: Column -->
            </div>
    <!-- End: Row -->
        </div>
    </div><!-- End: Content -->
@endsection
