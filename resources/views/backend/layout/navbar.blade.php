<div class="main-panel">
    <!-- Start: Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <!-- Start: Container -->
        <div class="container container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-minimize"><button class="btn btn-danger btn btn-icon btn-round" id="minimizeSidebar"><i class="fas fa-chevron-right text-center visible-on-sidebar-mini"></i><i class="fas fa-chevron-left text-center visible-on-sidebar-regular"></i></button></div>
                <div class="navbar-toggle"><button class="btn btn-primary navbar-toggler h-auto px-2 me-2" type="button"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button></div><a class="navbar-brand" href="{{route('dashbord.home')}}"><b>Bienvenue {{Auth::user()->name}}</b></a>
            </div><button class="btn btn-primary navbar-toggler h-auto px-1 ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar navbar-kebab"></span><span class="navbar-toggler-bar navbar-kebab"></span><span class="navbar-toggler-bar navbar-kebab"></span></button>
            <div id="navigation" class="collapse navbar-collapse justify-content-end">
                <form>
                    {{-- <div class="input-group input-group no-border"><input class="form-control form-control" type="text" value="" placeholder="Rechercher..." >
                        <div class="input-group-text input-group-append">
                            <div class="input-group-text"><i class="fas fa-search"></i></div>
                        </div>
                    </div> --}}
                </form>
                <ul class="nav navbar-nav">
                    {{-- <li class="nav-item"><a class="nav-link active nav-link btn-magnify" href="javascript:;"><i class="fas fa-th-large"></i>
                            <p><span class="d-lg-none d-md-block">Stats</span></p>
                        </a></li>
                    <li class="nav-item btn-rotate dropstart"><a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" data-bs-display="static"><i class="fas fa-bell"></i>
                            <p><span class="d-lg-none d-md-block">Some Actions</span></p>
                        </a><!-- Start: dropdown-menu -->
                        <div class="dropdown-menu dropdown-menu-and" aria-labelledby="navbarDarkDropdownMenuLink"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div><!-- End: dropdown-menu -->
                    </li> --}}
                    <li class="nav-item btn-rotate dropstart"><a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" data-bs-display="static"><i class="fas fa-cog"></i>
                        </a><!-- Start: dropdown-menu -->
                        @auth
                            
                        <div class="dropdown-menu dropdown-menu-and" aria-labelledby="navbarDarkDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" onclick="event.preventDefault();getElementById('frmlogout').submit();" href="{{route('logout')}}">Déconnexion</a>
                        <form action="{{route('logout')}}" id="frmlogout" method="POST">
                            @csrf
                        </form>
                        </div>
                        @endauth
                        
                        <!-- End: dropdown-menu -->
                    </li>
                </ul>
            </div>
        </div><!-- End: Container -->
    </nav><!-- End: Navbar -->