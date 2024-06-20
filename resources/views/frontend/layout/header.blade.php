<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Agence guinéene de promotions des exportations">
    <meta name="keywords" content="Exportation, café, Foire, cacao, cajou, anacarde">

    <title>AGUIPEX Agence guinéene de promotion des exportations</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/slider.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
      .scroll-container {
        display: flex;
        align-items: center;
        background-color: #f5f5f5;
        /* padding: 10px; */
        font-size: 16px;
        color: #333;
      }
  
      .scroll-text {
        white-space: nowrap;
        overflow: hidden;
      }
  
      .scroll-text span {
        display: inline-block;
        /* padding-left: 100%; */
        animation: scroll 15s linear infinite;
      }
  
      @keyframes scroll {
        0% {
          transform: translateX(100%);
        }
        100% {
          transform: translateX(-100%);
        }
      }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">

                <i class="me-4"> <img src="{{ asset('assets/img/branding.png') }}" width="50"
                        alt="BRANDING" /></i>
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@aguipex.gov.gn</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+224 611 75 65 52</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://www.facebook.com/Agence.Guineenne.de.Promotion.des.Exportations" class="twitter"><i
                        class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/Agence.Guineenne.de.Promotion.des.Exportations" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.linkedin.com/company/82341575/admin/" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/agence-guineenne-de-promotion-des-exportations-aguipex/mycompany/"
                    class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->


    <header id="header" class="header d-flex align-items-center" style="background-color: whitesmoke;">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ route('frontend.home') }}" class="logo d-flex align-items-center"
                style="position: relative; right: 25;">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="{{ asset('assets/img/LOGO_AGUIPEX.png') }}" width="200" alt="LOGO_AGUIPEX" />
                <!-- <h1 style="width: 50; height: 50; border-style: solid; border-color: red;"><span>.</span></h1> -->
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="http://localhost:8000/#hero">Accueil</a></li>
                    <li><a href="http://localhost:8000/#about">Presentation</a></li>
                    <li><a href="http://localhost:8000/#services">Services</a></li>
                    <li><a href="http://localhost:8000/#faq">Formalités Exportation</a></li>
                    <li><a href="http://localhost:8000/#portfolio">Produits Exportés</a></li>
                    <li><a href="http://localhost:8000/#recent-posts">Activés Recentes</a></li>
                    <!-- <li><a href="#team">Team</a></li>
           -->
                    <li><a href="http://localhost:8000/#foire">Foires</a></li>

                    {{-- <section id="scrolling-text" class="scrolling-text">
            <div class="container">
            
            </div>
          </section> --}}
                    <!-- End Scrolling Text Section -->
                    <li class="dropdown"><a href="#"><span>GENERAL</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="http://localhost:8000/#team">Team</a></li>
                            <li><a href="blog.html">Activés Recentes</a></li>
                            <li><a href="http://localhost:8000/#testimonial">Temoignages</a></li>
                            <li><a href="http://localhost:8000/#contact">Nous Contactez</a></li>
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
                        </ul>
                    </li>
                    <section id="scrolling-text" class="scrolling-text">
                        <div class="container">

                        </div>
                    </section>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
        <!-- ======= Scrolling Text Section ======= -->

    </header><!-- End Header -->
   <!-- ======= Scrolling Text Section ======= -->
  <section id="scrolling-text" class="scrolling-text p-0 m-0" style="background-color: #f5f5f5;">
    <div class="container-fluid p-0 m-0 scroll-container">
      <div class="fixed-text" style="background-color:#008000; color:#ffff; font-family: 'Montserrat', sans-serif;"><b>Découvrez nos activités à venir :</b> &nbsp;</div>
      <div class="scroll-text">
        <span style="font-family: 'Open Sans', sans-serif;">Foire internationale à Conakry du 10 au 15 juillet, Séminaire sur les exportations durables le 20 juillet, et plus encore !</span>
      </div>
    </div>
  </section><!-- End Scrolling Text Section -->



</body>

</html>
