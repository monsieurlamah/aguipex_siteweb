@extends('backend.layout.baseAdmin')
@section('content')
<div class="content">
            
    <form method="post" action="{{route('user.store')}}">
        @csrf
        @method('POST')
        <div class="row card-wizard-2">
           
            <!-- Start: Column -->
            <div class="col-lg-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="text-success font-weight-bolder">Info Utilisateur</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <!-- Start: Row -->
                            <div class="row row">
                                <div class="col-lg-6 pr-1">
                                    <div class="form-group"><label class="form-label" for="nomDeLaBanque">Nom</label>
                                        <div class="input-group">
                                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div><input class="form-control form-control" type="text" name="name" placeholder="Nom">
                                        </div>
                                    </div>
                                    @error('name')
                                    <div class="text-danger"> <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                </div><!-- End: Column -->
                                <div class="col-lg-6 pr-1">
                                    <div class="form-group"><label class="form-label" for="nomDeLaBanque">Prénom</label>
                                        <div class="input-group">
                                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div><input class="form-control form-control" type="text" name="first_name" placeholder="Prénom">
                                        </div>
                                    </div>
                                    @error('first_name')
                                    <div class="text-danger"> <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                </div><!-- End: Column -->
                                <div class="col-lg-6 pr-1">
                                    <div class="form-group"><label class="form-label" for="nomDeLaBanque">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope"></i></span></div><input class="form-control form-control" type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    @error('email')
                                    <div class="text-danger"> <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                </div><!-- End: Column -->
                                <div class="col-lg-6 pr-1">
                                    <div class="form-group"><label class="form-label" for="nomDeLaBanque">Tel</label>
                                        <div class="input-group">
                                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-phone"></i></span></div><input class="form-control form-control" type="tel" name="phone" placeholder="Tel">
                                        </div>
                                    </div>
                                    @error('phone')
                                    <div class="text-danger"> <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                </div><!-- End: Column -->		
                                <div class="col-lg-6 pr-1">
                                    <div class="form-group"><label class="form-label" for="nomDeLaBanque">Adresse</label>
                                        <div class="input-group">
                                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marked"></i></span></div><input class="form-control form-control" type="text" name="address" placeholder="Adresse">
                                        </div>
                                    </div>
                                    @error('address')
                                    <div class="text-danger"> <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                </div><!-- End: Column -->
                                <div class="col-lg-6 pr-1">Rôle</label>
                                        <div class="input-group">
                                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div><select class="form-select" name="apRole">
                                                <optgroup label="Rôle">
                                                    <option value="USR">Utilisateur</option>
                                                    <option value="ADMIN">Administrateur</option>
                                                    <option value="COM">Communication</option>
                                                    <option value="MARKETING">Marketing</option>
                                                    <option value="STATIC">Certification</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        @error('apRole')
                                        <div class="text-danger"> <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="col-lg-6 pr-1">
                                    <div class="form-group"><label class="form-label" for="nomDeLaBanque">Mot de passe</label>
                                        <div class="input-group">
                                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                                            <input type="password" id="pwd" name="password" class="form-control" placeholder="Password" aria-describedby="pwdHelpBlock">
                                            <button type="button" id="eye" style="color:#FFF;background-color:#DE2F17"><i class="far fa-eye"></i></button>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- End: Column -->
                                {{-- <div class="col-lg-6 pr-1">
                                    <div class="form-group"><label class="form-label" for="nomDeLaBanque">Confirmer mot de passe</label>
                                        <div class="input-group">
                                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                                            <input type="password" id="pwd" name="password2" class="form-control" placeholder="Password" aria-describedby="pwdHelpBlock">
                                            <button type="button" id="eye" style="color:#FFF;background-color:#DE2F17"><i class="far fa-eye"></i></button>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- End: Column -->
                                </div> 											                         
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="row"> 
                            <div class="col-lg-6"><button class="btn btn-primary btn btn-success mx-1" type="submit">Ajouter</button><a href="{{route('user.index')}}" class="btn btn-primary btn btn-primary mx-1" type="submit">Annuler</a></div>
                        </div>
                    </div>
                </div>
            </div><!-- End: Column -->
        </div>
         <!-- End: Row -->
    </form>
</div>
<!-- End: Content -->
@endsection