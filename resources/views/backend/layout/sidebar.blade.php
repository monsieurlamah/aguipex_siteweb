<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tableau de bord - Aguipex</title>
    <meta name="twitter:image" content="/assets/img/police.svg?h=4fccfc0de6f41823b69a77967b750f7e">
    <meta property="og:image" content="/assets/img/police.svg?h=f5e6ebce85a75c28075c271a9b7e980a">
    <meta name="twitter:title" content="police">
    <meta property="og:type" content="article">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatibl" content="IE=edge,chrome=1">
    <meta name="description" content="Paiement de masse, gestion de paie et de gestion des ressources humaines…">
    <meta name="twitter:description"
        content="Paiement de masse, gestion de paie et de gestion des ressources humaines…">
    <meta name="twitter:card" content="summary">
    <link rel="icon" type="image/svg+xml" sizes="656x199"
        href="{{ asset('backend/assets/img/police.svg?h=f5e6ebce85a75c28075c271a9b7e980a') }}">
    <link rel="icon" type="image/svg+xml" sizes="656x199"
        href="{{ asset('backend/assets/img/police.svg?h=f5e6ebce85a75c28075c271a9b7e980a') }}">
    <link rel="icon" type="image/svg+xml" sizes="656x199"
        href="{{ asset('backend/assets/img/police.svg?h=f5e6ebce85a75c28075c271a9b7e980a') }}">
    <link rel="icon" type="image/svg+xml" sizes="656x199"
        href="{{ asset('backend/assets/img/police.svg?h=f5e6ebce85a75c28075c271a9b7e980a') }}">
    <link rel="icon" type="image/svg+xml" sizes="656x199"
        href="{{ asset('backend/assets/img/police.svg?h=f5e6ebce85a75c28075c271a9b7e980a') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/bootstrap/css/bootstrap.min.css?h=3f30c2c47d7d23c7a994db0c862d45a5') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/fcicons.css?h=fe88b45c35925015352e886633bc3fbc') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/nucleo-icons.css?h=72422a3f4e5d1df789db73d45e4f4c0e') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/fonts/fontawesome-all.min.css?h=bb270fba1988038f5680f75b7475565e') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/fonts/font-awesome.min.css?h=bb270fba1988038f5680f75b7475565e') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/fonts/fontawesome5-overrides.min.css?h=bb270fba1988038f5680f75b7475565e') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/css/--help-with-picture-and-text.css?h=c0032359b80f645ff4d3fd29ca05be6e') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/css/accordion-faq-list.css?h=5a6de662e9218dfcf8d9ceb66931ac08') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/css/countrySelect.css?h=48682d5c31216499d50acc7a9d9db38b') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/css/Features-Cards-icons.css?h=befd8a398792e305b7ffd4a176b5b585') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/E-police.css?h=922b32c9493382cd919652d7f1cc24c6') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/assets/css/modal-as-left-or-right%20sidebar.css?h=b25415220c6aa6ef687f488a1c674453') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/tab.css?h=822c5a1341f1f6c865e4095bf2b6c410') }}">
</head>

<body>
    <!-- Start: Wrapper -->
    <div class="wrapper">
        <!-- Start: Sidebar -->
        <div class="sidebar" style="background-image: url({{ asset('backend/assets/img/cellcom-font.jpg') }});"
            data-color="default" data-active-color="warning">
            <!-- Start: logo -->
            <div class="logo">
                <a class="simple-text logo-normal pb-4" href="{{ route('dashbord.home') }}">
                    <div class="logo-image-big"><img class="img-fluid"
                            src="{{ asset('backend/assets/img/LOGO_AGUIPEX.jpg') }}" width="300">
                    </div>
                </a>
            </div><!-- End: logo -->
            <!-- Start: Sidebar Wrapper -->
            <div class="sidebar-wrapper">
                <!-- Start: User -->

                <!-- Start: Sidebar Menu -->
                <ul class="nav">
                    <!-- TABLEAU DE BORD -->
                    <li class="nav-item active"><a class="nav-link" href="{{ route('dashbord.home') }}"><i
                                class="fas fa-tv"></i>
                            <p>Tableau de bord</p>
                        </a>
                    </li>
                    <!-- End: TABLEAU DE BORD -->
                    <!-- Historique -->
                    {{-- <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-history"></i>
                            <p>Historique</p>
                        </a>
                    </li> --}}
                    <!-- category -->
                    @if (Auth::check())
                        @if (Auth::user()->apRole == 'ADMIN')
                            <li class="nav-item"><a class="nav-link" href="{{ route('categorie.index') }}"><i
                                        class="fas fa-list-alt "></i>
                                    <p>Catégorie</p>
                                </a>
                            </li>
                            <!-- Product -->
                            <li class="nav-item"><a class="nav-link" href="{{ route('produit.index') }}"><i
                                        class="fas fa-list"></i>
                                    <p>Produit</p>
                                </a>
                            </li>
                            <!-- Foire -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('foire.index') }}">
                                    <i class="fas fa-bullseye"></i>
                                    <p>Foire</p>
                                </a>
                            </li>
                            <!-- Services -->
                            <li class="nav-item"><a class="nav-link" href="{{ route('service.index') }}"><i
                                        class="fas fa-support"></i>
                                    <p>Services</p>
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('activity.index') }}"><i
                                        class="fas fa-list-ol"></i>
                                    <p>Activités</p>
                                </a>
                            </li>
                            <!-- Start: Configuration -->
                            <li class="nav-item"><a class="nav-link collapsed" data-bs-toggle="collapse"
                                    href="#collapseSlider" aria-controls="collapseSlider" role="button"
                                    aria-expanded="false"><i class="fas fa-users-cog"></i>
                                    <p>Configuration<strong class="caret"></strong></p>
                                </a>
                                <div class="clearfix"></div>
                                <div id="collapseSlider" class="collapse border-start border-4 border-warning">
                                    <!-- Start: UL -->
                                    <ul class="nav">
                                        <li><a href="{{ route('slide.index') }}"><span
                                                    class="sidebar-mini-icon me-2"><i
                                                        class="fas fa-list fs-5 m-0"></i></span><span
                                                    class="sidebar-normal">Slide<br></span></a></li>
                                        <li><a href="{{ route('service_bas.index') }}"><span
                                                    class="sidebar-mini-icon me-2"><i
                                                        class="fas fa-user-slash fs-5 m-0"></i></span><span
                                                    class="sidebar-normal">Mission</span></a></li>
                                                    <li><a href="{{route('departement.index')}}"><span
                                                        class="sidebar-mini-icon me-2"><i
                                                            class="fas fa-user-slash fs-5 m-0"></i></span><span
                                                        class="sidebar-normal">Departement</span></a></li>
                                                        <li><a href="{{ route('equipe.index') }}"><span
                                                            class="sidebar-mini-icon me-2"><i
                                                                class="fas fa-user-slash fs-5 m-0"></i></span><span
                                                            class="sidebar-normal">Equipe</span></a></li>
                                                            <li><a href="{{route('temoignage.index')}}"><span
                                                                class="sidebar-mini-icon me-2"><i
                                                                    class="fas fa-user-slash fs-5 m-0"></i></span><span
                                                                class="sidebar-normal">Temoignage</span></a></li>
                                                                <li><a href="{{route('statistique.index')}}"><span
                                                                    class="sidebar-mini-icon me-2"><i
                                                                        class="fas fa-user-slash fs-5 m-0"></i></span><span
                                                                    class="sidebar-normal">Statistique</span></a></li>
                                                                    <li><a href="{{route('presentation.index')}}"><span
                                                                        class="sidebar-mini-icon me-2"><i
                                                                            class="fas fa-user-slash fs-5 m-0"></i></span><span
                                                                        class="sidebar-normal">Presentation</span></a></li>
                                    </ul><!-- End: UL -->
                                </div>
                            </li><!-- End: Configuration -->

                            <!-- Agents -->
                            <li class="nav-item"><a class="nav-link" href="{{ route('user.admin') }}"><i
                                        class="fas fa-user-tag"></i>
                                    <p>Administrateurs</p>
                                </a>
                            </li>

                            <!-- Start: UTILISATEURS -->
                            <li class="nav-item"><a class="nav-link collapsed" data-bs-toggle="collapse"
                                    href="#collapseUtilisateurs" aria-controls="collapseUtilisateurs" role="button"
                                    aria-expanded="false"><i class="fas fa-users-cog"></i>
                                    <p>utilisateurs<strong class="caret"></strong></p>
                                </a>
                                <div class="clearfix"></div>
                                <div id="collapseUtilisateurs" class="collapse border-start border-4 border-warning">
                                    <!-- Start: UL -->
                                    <ul class="nav">
                                        <li><a href="{{ route('user.index') }}"><span
                                                    class="sidebar-mini-icon me-2"><i
                                                        class="fas fa-list fs-5 m-0"></i></span><span
                                                    class="sidebar-normal">liste utilisateurs<br></span></a></li>
                                        <li><a href="{{ route('user.bloquer') }}"><span
                                                    class="sidebar-mini-icon me-2"><i
                                                        class="fas fa-user-slash fs-5 m-0"></i></span><span
                                                    class="sidebar-normal">Utilisateurs bloqués</span></a></li>
                                    </ul><!-- End: UL -->
                                </div>
                            </li><!-- End: UTILISATEURS -->
                        @elseif(Auth::user()->apRole == 'STATIC')
                            <li class="nav-item"><a class="nav-link" href="{{ route('categorie.index') }}"><i
                                        class="fas fa-list-alt "></i>
                                    <p>Catégorie</p>
                                </a>
                            </li>
                            <!-- Product -->
                            <li class="nav-item"><a class="nav-link" href="{{ route('produit.index') }}"><i
                                        class="fas fa-list"></i>
                                    <p>Produit</p>
                                </a>
                            </li>
                            <!-- Foire -->
                        @elseif(Auth::user()->apRole == 'MARKETING')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('foire.index') }}">
                                    <i class="fas fa-bullseye"></i>
                                    <p>Foire</p>
                                </a>
                            </li>
                            <!-- Activity -->
                        @elseif (Auth::user()->apRole == 'COM')
                            <li class="nav-item"><a class="nav-link" href="{{ route('categorie.index') }}"><i
                                        class="fas fa-list-alt "></i>
                                    <p>Catégorie</p>
                                </a>
                            </li>
                            <!-- Product -->
                            <li class="nav-item"><a class="nav-link" href="{{ route('produit.index') }}"><i
                                        class="fas fa-list"></i>
                                    <p>Produit</p>
                                </a>
                            </li>
                            <!-- Services -->
                            <li class="nav-item"><a class="nav-link" href="{{ route('service.index') }}"><i
                                        class="fas fa-support"></i>
                                    <p>Services</p>
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('activity.index') }}"><i
                                        class="fas fa-list-ol"></i>
                                    <p>Activités</p>
                                </a>
                            </li>
                            <!-- Start: Configuration -->
                            <li class="nav-item"><a class="nav-link collapsed" data-bs-toggle="collapse"
                                    href="#collapseSlider" aria-controls="collapseSlider" role="button"
                                    aria-expanded="false"><i class="fas fa-users-cog"></i>
                                    <p>Configuration<strong class="caret"></strong></p>
                                </a>
                                <div class="clearfix"></div>
                                <div id="collapseSlider" class="collapse border-start border-4 border-warning">
                                    <!-- Start: UL -->
                                    <ul class="nav">
                                        <li><a href="{{ route('slide.index') }}"><span
                                                    class="sidebar-mini-icon me-2"><i
                                                        class="fas fa-list fs-5 m-0"></i></span><span
                                                    class="sidebar-normal">Slide<br></span></a></li>
                                        <li><a href="{{ route('service_bas.index') }}"><span
                                                    class="sidebar-mini-icon me-2"><i
                                                        class="fas fa-user-slash fs-5 m-0"></i></span><span
                                                    class="sidebar-normal">Mission</span></a></li>
                                    </ul><!-- End: UL -->
                                </div>
                            </li><!-- End: Configuration -->
                        @endif
                    @endif

                    <li class="nav-item"><a class="nav-link" href="{{ route('reglage.index') }}"><i
                                class="fas fa-cogs"></i>
                            <p>Profil</p>
                        </a>
                    </li>

                </ul><!-- End: Sidebar Menu -->
            </div><!-- End: Sidebar Wrapper -->
        </div><!-- End: Sidebar -->
