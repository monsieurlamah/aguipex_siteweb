@extends('backend.layout.baseAdmin')
@section('content')

    <!-- Start: Content -->
    <div class="content">
        <div class="row">
            @if(Auth::check())
            @if(Auth::user()->apRole == "ADMIN" )
            <div class="col-sm-6 col-md-6 col-lg-3 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Incident.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Categorie</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalCategorie}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
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
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Incident.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Produit</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalProduits}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
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
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/journalière.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                           
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Activités du jour</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$activitiesDuJour}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/rémorqués.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Foire</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalFoires}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Déclation.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Service</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalServices}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/rémorqués.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Mission</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalMission}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
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
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Incident.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Employé</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalProduits}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Déclation.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Foire Nationale</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalFoiresNational}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Déclation.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Foire Internationale</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalFoiresInternational}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            @elseif (Auth::user()->apRole == "MARKETING")
       
            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/rémorqués.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Foire</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalFoires}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Déclation.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Foire Nationale</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalFoiresNational}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Déclation.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Foire Internationale</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalFoiresInternational}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            @elseif (Auth::user()->apRole == "STATIC")
            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Incident.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Produit</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalProduits}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Incident.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Catégorie</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalCategorie}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            @elseif (Auth::user()->apRole == "COM")
            <div class="col-sm-6 col-md-6 col-lg-3 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Incident.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Categorie</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalCategorie}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
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
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Incident.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Produit</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalProduits}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
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
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Incident.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Employé</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalProduits}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
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
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/journalière.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                           
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Activités du jour</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$activitiesDuJour}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/rémorqués.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Mission</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalMission}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <!-- Start: Row -->
                        <div class="row">
                            <!-- Start: Column -->
                            <div class="col col-5 col-md-4">
                                <div class="icon-big text-center icon-warning"><img src="{{asset('backend/assets/img/Déclation.svg')}}" width="50px" height="50px"></div>
                            </div><!-- End: Column -->
                            <!-- Start: Column -->
                            <div class="col col-7 col-md-8">
                                <div class="numbers">
                                    <!-- Start: Paragraph -->
                                    <p class="card-category">Total Service</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p class="card-title" style="font-size:20px">{{$totalServices}}</p><!-- End: Paragraph -->
                                    <!-- Start: Paragraph -->
                                    <p></p><!-- End: Paragraph -->
                                </div>
                            </div><!-- End: Column -->
                        </div><!-- End: Row -->
                    </div>
                    
                    <div class="card-footer">
                        <hr>
                        <div class="row">
                        <div class="text-right" style="margin-left:35px"><p class="stats"> AGUIPEX</p></div>
                         
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endif
        </div><!-- End: Row -->
                            
    {{-- <div class="card">
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-lg-5  pr-1">
                    <div class="form-group"><label class="form-label" for="nomDeLaBanque">Date début</label>
                        <div class="input-group">
                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-clock"></i></span></div><input class="form-control form-control" type="date" name="date">
                                </div>
                        </div>
                </div>
                <div class="col-lg-5  pr-1">
                        <div class="form-group"><label class="form-label" for="nomDeLaBanque">Date fin</label>
                        <div class="input-group">
                            <div class="input-group-text input-group-prepend"><span class="input-group-text"><i class="fas fa-clock"></i></span></div><input class="form-control form-control" type="date" name="date">
                        </div>
                        </div>
                </div>
                <div class="col-lg-2" style="padding-top:19px">
                                    
                <button class="btn btn-secondary p-3"  type="submit"><i class="fa fa-search"></i> Rechercher</button>
                </div>
                </div> 											                         
        </form>
    <div class="row">
                        <div class="col-xl-6" >
            <div >
                <img src="{{asset('backend/assets/img/mangue.jpg')}}" width="530px" height="340px">
            </div>
        </div>
        <div class="col-xl-6" >				
            <div class="x_panel">
                <div class="x_title">
                   <h3>Votre Statistique</h3>
                </div>
                <div class="x_content">
                   <canvas id="mybarChart"></canvas>
                </div>
            </div>
        </div>

        
    </div>
    </div>
       
    </div> --}}
    </div><!-- End: Content -->
    <footer class="footer footer-black footer-white">
        <!-- Start: Container -->
        <div class="container container-fluid">
            <!-- Start: Row -->
            <div class="row row">
                <div class="col-md-12 col-lg-6">
                    <nav class="footer-nav">
                        <!-- Start: UL -->
                        <ul>
                            <li><a class="link-primary" href="{{route('frontend.home')}}" target="_blank"><strong>AGUIPEX</strong></a></li>
                            <li><a class="link-primary" href="{{route('frontend.home')}}" target="_blank"><strong>Blog</strong></a></li>
                            <li><a class="link-primary" href="{{route('frontend.home')}}" target="_blank"><strong>Licenses</strong></a></li>
                        </ul><!-- End: UL -->
                    </nav>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="credits ml-auto"><span class="copyright"> Copyright © 2024&nbsp;All rights reserved | Made with&nbsp;&nbsp;<i class="fa fa-heart heart"></i><a class="ms-1 link-primary" href="#"><strong>Lamah</strong></a></span></div>
                </div>
            </div><!-- End: Row -->
        </div><!-- End: Container -->
    </footer>
</div><!-- End: Main Panel -->
@endsection
