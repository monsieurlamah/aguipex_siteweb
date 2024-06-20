@extends('backend.layout.baseAdmin')
@section('content')
    <div class="content">
    
        <form method="post" action="{{route('foire.update', $foire->id)}}">
            @csrf
            @method('PUT')
            <div class="row card-wizard-2">
               
                <!-- Start: Column -->
                <div class="col-lg-12">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="text-success font-weight-bolder">Info Foire</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <!-- Start: Row -->
                                <div class="row row">
                                    <div class="col-lg-6 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Designation</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div><input class="form-control form-control" type="text" value="{{$foire->designation}}" name="designation" placeholder="La designation...">
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->
                                    <div class="col-lg-6 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Pays</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div><input class="form-control form-control" type="text" name="pays" value="{{$foire->pays}}" placeholder="Le pays...">
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->
                                    <div class="col-lg-6 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Lieu</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope"></i></span></div><input class="form-control form-control" type="text" value="{{$foire->lieu}}" name="lieu" placeholder="Le lieu...">
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->
                                    <div class="col-lg-6 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Date debut</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-phone"></i></span></div><input class="form-control form-control" type="date" name="date_debut" value="{{$foire->date_debut}}" placeholder="Date de début">
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->		
                                    <div class="col-lg-6 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Date fin</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marked"></i></span></div><input class="form-control form-control" type="date" name="date_fin" value="{{$foire->date_fin}}" placeholder="Date de fin">
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->
                                    <div class="col-lg-6 pr-1">Type de foire</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div><select class="form-select" name="type">
                                                    <optgroup label="Selectionner le type de foire">
                                                        <option value="FOIRE_INTERNATIONALE" selected="">Foire internationnale</option>
                                                        <option value="FOIRE_NATIONALE" selected="">Foire nationnale</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-lg-6 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Nombre de produit vendu</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                                                <input type="number" id="pwd" name="nbre_produit_vendu" value="{{$foire->nbre_produit_vendu}}" class="form-control" placeholder="Nombre de produit..." aria-describedby="pwdHelpBlock">
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->
                                    <div class="col-lg-6 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Nombre de personne financée</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                                                <input type="number" id="pwd" name="nbre_personne_finance" value="{{$foire->nbre_personne_finance}}" class="form-control" placeholder="Nombre de personne" aria-describedby="pwdHelpBlock">
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->
                                    <div class="col-lg-12 pr-1">
                                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Description</label>
                                            <div class="input-group">
                                                <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                                                <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Description de la foire...">{{$foire->description}}</textarea>
                                            </div>
                                        </div>
                                    </div><!-- End: Column -->
                                    </div> 											                         
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="row"> 
                                <div class="col-lg-6"><button class="btn btn-primary btn btn-success mx-1" type="submit">Modifier</button><a href="{{route('foire.index')}}" class="btn btn-primary btn btn-primary mx-1" type="submit">Annuler</a></div>
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