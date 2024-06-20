@extends('frontend.layout.base')

@section('content')

    <div class="container-fluid slider m-0 p-0 hero" data-aos="fade-up" data-aos-delay="100">
        <div class="row m-0 p-0">
            <div class="col-md-12 m-0 p-0">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        @foreach ($slides as $index => $slide)
                            <div class="item carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset('assets/slides/' . $slide->image) }}" alt="{{ $slide->title }}">
                                <div class="carousel-caption">
                                    <h2 style="color:black" data-aos="fade-right" data-aos-delay="100"
                                        style="visibility: visible; animation-delay:0.5s; animation-name: fadeInUp;">
                                        <span
                                            style="color:black;background:rgba(255,255,255,0.8)">{{ $slide->title }}</span>
                                    </h2>
                                    <h2 style="color:black" data-aos="fade-left" data-aos-delay="100"
                                        style="visibility: visible; animation-delay:0.8s; animation-name: fadeInUp;">
                                        <span
                                            style="color:black;background:rgba(255,255,255,0.8)">{{ $slide->subtitle }}</span>
                                    </h2>
                                    <p style="color:black" class="wow fadeInUp" data-wow-delay="1.5s"
                                        style="visibility: visible; animation-delay:1s; animation-name: fadeInUp;">
                                        <span
                                            style="color:black;background:rgba(255,255,255,0.8)">{{ $slide->description }}</span>
                                    </p>
                                    <div class="btn wow zoomIn" data-wow-delay="1.5s"
                                        style="visibility: visible; animation-delay:1s; animation-name: zoomIn; background-color: green;">
                                        <a style="font-weight:bold;font-family:Poppins-Regular;color: aliceblue;"
                                            href="{{ $slide->lien }}">{{ $slide->libelle }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- End Carousel Inner -->
                    <div class="bg-blanc">
                        <div class="container-fluid m-0 p-0">
                            <ul class="nav nav-pills nav-justified">
                                @foreach ($slides as $index => $slide)
                                    <li data-target="#myCarousel" data-slide-to="{{ $index }}"
                                        class="nav-item align-middle {{ $index == 0 ? 'active' : '' }} wow fadeInLeft"
                                        data-wow-delay="1s"
                                        style="visibility: visible; animation-delay:0s; animation-name: fadeInLeft">
                                        <a href="#" class="nav-link text-uppercase">
                                            <span class="badge">{{ $index + 1 }}</span>{{ $slide->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <!--
            <div class="container position-relative">
              <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                  <h2>Le Café <span>GUINEEN</span></h2>
                  <p>Le café Ziama, est un café robusta unique aux qualités exceptionnelles</p>
                  <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started">Savoir Plus</a>
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Vido</span></a>
                  </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                  <img src="assets/img/branding.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
              </div>
            </div>
            -->

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">
                    @if ($slidesBas)
                        @foreach ($slidesBas as $slidebas)
                            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="{{ $slidebas->icone }}"></i></div>
                                    <h4 class="title"><a href="" class="stretched-link">{{ $slidebas->title }}
                                        </a></h4>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">Aucune opportunité active et publiée trouvée.</p>
                    @endif
                    <!--End Icon Box -->

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End Hero Section -->







    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 class="mysection">Presentation</h2>
                    <p class="w-100 p-3 shadow-sm p-3 mb-5 bg-body-tertiary position-relative text-center- text-black">
                        <span style="font-weight: bold;">AGUIPEX</span>
                        @if (isset($presentation))
                            {{ $presentation->content }}
                        @endif
                    </p>
                </div>
            </div>
        </section>
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 class="mysection">Nos Services</h2>
                    <p>Avec pour mission principale d’assurer la valorisation et la promotion continue des produits et
                        services destinés à l’exportation, <span style="font-weight: bold;"> AGUIPEX offre plusieurs
                            services </span>
                    </p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <!--   <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative">
                      <div class="icon">
                        <i class="bi bi-activity"></i>
                      </div>
                      <h3>Veille</h3>
                      <p style="text-align: justify;">Veiller à la mise en place d’un cadre de concertation et d’échanges d’expériences entre les acteurs
                        des filières d’exportation et organiser toutes les filières d’exportation d’importance nationale.</p>
                      <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                      <div class="icon">
                        <i class="bi bi-broadcast"></i>
                      </div>
                      <h3>Mobilisation</h3>
                      <p style="text-align: justify;">Mobiliser les ressources nécessaires à l’exécution des programmes et projets de développement des infrastructures de
                        conditionnement, de conservation et de commercialisation des produits d’exportation .</p>
                      <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                      <div class="icon">
                        <i class="bi bi-easel"></i>
                      </div>
                      <h3>Coopération</h3>
                      <p style="text-align: justify;">Favoriser la coopération entre le secteur privé et les Institutions
                        d’appui au commerce dans le cadre de l’amélioration des exportations des produits et services.</p>
                      <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                      <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                      </div>
                      <h3>Assurer</h3>
                      <p style="text-align: justify;">Assurer la mise en œuvre de la loi sur la croissance et
                        les opportunités d'investissement en Afrique (AGOA) .</p>
                      <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                      <div class="icon">
                        <i class="bi bi-calendar4-week"></i>
                      </div>
                      <h3>Gérer</h3>
                      <p style="text-align: justify;">Mettre en place et gérer la base de données des exportateurs
                        et tenir les statistiques d’exportation des biens et services</p>
                      <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                      <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                      </div>
                      <h3 >Payer</h3>
                      <p style="text-align: justify;">Payer les cotisations de la Guinée dans les organisations africaines et internationales
                        de développement des filières d’exportation dont la Guinée est membre.</p>
                      <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative">
                      <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                      </div>
                      <h3>Participer</h3>
                      <p style="text-align: justify;">Participer aux rencontres nationales, sous régionales, régionales et internationales traitant
                        des questions liées au développement des exportations des biens et services.</p>
                      <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div> -->
                    @if ($services->count())
                        @foreach ($services as $service)
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item position-relative">
                                    <div class="icon">
                                        <i class="{{ $service->icone }}"></i>
                                    </div>
                                    <h3>{{ $service->title }}</h3>
                                    <p style="text-align: justify;">{{ $service->description }}</p>
                                    <a href="{{ route('serviceDetail', $service->id) }}"
                                        class="readmore stretched-link">Lire plus... <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                        <!-- Bouton Voir tout centré -->
                        {{-- <div class="col-12 text-center mt-4">
                            <a href="{{ route('allService') }}" class="btn btn-success">Plus de services <i
                                    class="bi bi-arrow-right"></i></a>
                        </div> --}}
                    @else
                        <p class="text-center">Aucun service active et publié trouvé.</p>
                    @endif

                </div>

            </div>
        </section>
        <!-- End Our Services Section -->
        <!-- ======= Foire section ======= -->
        <section id="foire" class="pricing sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2 class="mysection">Foires nationales et internationales</h2>
                    <p>C’est un espace de valorisation du « made in Guinea » Durant un temps variant entre 3 jours à 1 mois,
                        les entrepreneurs guinéens ont l’opportunité d’exposer leur savoir faire avec le contenu local sur
                        le territoire guinéeen ou à l'étranger. </p>
                </div>

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">
                        <div class="col-lg-6 myItemStyle">
                            <div class="pricing-item accordion-item accordion-header accordion collapsed"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                <div>
                                    <h2>
                                        <p>Foires Nationales</p>
                                    </h2>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <div class="col-lg-6 myItemStyle">
                            <div class="pricing-item accordion-item accordion collapsed accordion-header"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <div>
                                    <h2>
                                        <p>Foires internationales</p>
                                    </h2>
                                </div>
                            </div>
                        </div><!-- End Pricing Item -->

                        <!-- Début de la section pour les foires internationales -->
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="container">
                                <h2 style="color: crimson">Foires internationales</h2>
                                <p style="text-align: right"><a href="#ici"
                                        class="d-inline-flex bg-danger text-white text-right focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2 accordion-close"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">X</a></p>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="text-white text-bold">
                                            <th style="background-color: green; color:white" scope="col">N°</th>
                                            <th style="background-color: green; color:white" scope="col">DESIGNATION
                                            </th>
                                            <th style="background-color: green; color:white" scope="col">PERIODE</th>
                                            <th style="background-color: green; color:white" scope="col">PAYS</th>
                                            <th style="background-color: green; color:white" scope="col">LIEU</th>
                                            <th style="background-color: green; color:white" scope="col">Voir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($foiresInternationales as $foire)
                                            <tr>
                                                <th scope="row">{{ $foire->id }}</th>
                                                <td>{{ $foire->designation }}</td>
                                                <td>du {{ $foire->formatted_date_debut }} au
                                                    {{ $foire->formatted_date_fin }}</td>
                                                <td>{{ $foire->pays }}</td>
                                                <td>{{ $foire->lieu }}</td>
                                                <td align="center"> <a href="{{route('detailFoire', $foire->id)}}"><button type="button"
                                                    class="btn btn-success btn-circle">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Fin de la section pour les foires internationales -->

                        <!-- Début de la section pour les foires nationales -->
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="container">
                                <h2 style="color: crimson">Foires nationales</h2>
                                <p style="text-align: right"><a href="#ici"
                                        class="d-inline-flex bg-danger text-white text-right focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2 accordion-close"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">X</a></p>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="text-white text-bold">
                                            <th style="background-color: green; color:white" scope="col">N°</th>
                                            <th style="background-color: green; color:white" scope="col">DESIGNATION
                                            </th>
                                            <th style="background-color: green; color:white" scope="col">PERIODE</th>
                                            <th style="background-color: green; color:white" scope="col">LIEU</th>
                                            <th style="background-color: green; color:white" scope="col">Voir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($foiresNationales as $foire)
                                            <tr>
                                                <th scope="row">{{ $foire->id }}</th>
                                                <td>{{ $foire->designation }}</td>
                                                <td>du {{ $foire->formatted_date_debut }} au
                                                    {{ $foire->formatted_date_fin }}</td>
                                                <td>{{ $foire->lieu }}</td>
                                                <td align="center"> <a href="{{route('detailFoire', $foire->id)}}"><button type="button"
                                                    class="btn btn-success btn-circle">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Fin de la section pour les foires nationales -->

                    </div>

                    <p><a href="#ici"
                            class="d-inline-flex bg-danger text-white focus-ring focus-ring-alert py-1 px-2 text-decoration-none border rounded-2 accordion-close"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">Cliquez sur chaque catégorie de foire pour les détails</a>
                    </p>

                </div>
            </div>

        </section><!-- End Foire Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <h2 class="mysection text-center pb-5">Formalités d'Exportation</h2>
                <div class="row gy-4">
                    <p style="text-align: justify;">
                        D’une manière générale, dans le cadre de la promotion de la qualité des produits agricoles, pèches,
                        élevages destinés à l’exportation, tout exportateur en République de Guinée doit suivre un certain
                        nombre de critères qui sont entre autres :
                    </p>


                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <h3>Respecter les procédures d'exportation à AGUIPEX ! <strong>Importance</strong></h3>
                            <p>
                                La certification atteste que les produits sont conformes aux normes et exigences.
                                Elle donne une assurance aux produits d’exportation tout en garantissant une action
                                juridique,
                                loyale, d’analyse, de contrôle, et d’inspection par un document officiel à caractère
                                d’attestation, de confirmation, et de garantie (CERTIFICAT).
                                Ce qui permet aux exportateurs d'etre dans les normes pour le transport de leurs produits à
                                destination
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <span class="num">1.</span>
                                        Être détenteur du registre du commerce et crédit mobilier
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        L'immatriculation au RCCM constitue l'une des preuves de commercialité, et fait
                                        bénéficier aux Exportateurs/ Importateurs immatriculé la protection
                                        dans l’exercice de ses activités commerciales, qu’il soit une personne physique ou
                                        morale.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <span class="num">2.</span>
                                        Ouvrir une déclaration descriptive d’exportation (DDE) pour une manifestation
                                        d’intention d’exporter
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        La déclaration descriptive d’importation et d’exportation donne une garantie
                                        bancaire aux exportateurs et aux importateurs.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <span class="num">3.</span>
                                        Avoir un certificat d’analyse de l’ONCQ attestant la qualité du produit
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Le certificat d'analyse donne une assurance que le produit vendu satisfait certains
                                        paramètres, notamment de type physique et chimique,
                                        tels que la composition, l'humidité, l'acidité et autres, et que ceux-ci
                                        correspondent aux exigences internationales.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->



                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <span class="num">4.</span>
                                        Le certificat phytosanitaire pour les produits végétaux et d’origine végétale

                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Le certificat phytosanitaire couvre les produits végétaux et d’origine végétale
                                        contre les nuisibles des cultures
                                        (maladies, insectes, rongeurs, et graines de mauvais herbes) et la limite maximale
                                        de résidus de pesticides (LMR)
                                        dans le commerce international. Ce certificat est couvert par la Commission
                                        Internationale pour la Protection des Végétaux (CIPV),
                                        le conseil phytosanitaire interafricain (CPI) et l’organisation des nations unies
                                        pour l’alimentation et l’agriculture (FAO) dans le
                                        respect des normes phytosanitaires nationales et internationales prescrites dans la
                                        règlementation en vigueur.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <span class="num">5.</span>
                                        Le certificat de contrôle de qualité et normes
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Certificat de qualité et normes
                                        Le certificat de contrôle de qualité a un double objectif : protéger la santé des
                                        consommateurs et assurer la loyauté des transactions commerciales des produits
                                        alimentaires. En plus du respect des normes, la commission du Codex Alimentarius
                                        élabore et adopte des directives,
                                        des recommandations, des codes d’usage et réglementations de la mise a marché des
                                        produits de consommations.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-6">
                                        <span class="num">6.</span>
                                        Le certificat Vérétinaire
                                    </button>
                                </h3>
                                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Ce certificat est couvert à l’exportation par l’Office International des Epizooties
                                        (OIE) et délivré sur les produits et sous-produits animaux.
                                        Il atteste après contrôle et inspection par les autorités compétentes que les
                                        produits sont conformes aux standards internationaux et la législation d’un pays en
                                        ce qui concerne l’hygiène de production,
                                        les normes microbiologiques des produits alimentaires et garantit la transparence de
                                        la situation des maladies et contamination animales.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-7">
                                        <span class="num">7.</span>
                                        Certificat sanitaire
                                    </button>
                                </h3>
                                <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Le certificat sanitaire est un document officiel attestant la conformité des
                                        produits de la pêche et de l’aquaculture à l’exportation.
                                        Il répond aux exigences et aux respect des normes et
                                        réglementations sanitaires (directives et prescriptions) sur la qualité et
                                        l’assurance qualité des produits d’exportation.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-8">
                                        <span class="num">8.</span>
                                        Avoir les certificats d’origine
                                    </button>
                                </h3>
                                <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Certificat d’origine(C.O) Le Certificat d’origine offre un échange entre deux pays
                                        en franchise totale des droits de douanes et des taxes d’effet équivalent.
                                        Il couvre les exportations à destination de certains pays d’Afrique, d’Asie et
                                        d’Amérique.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-9">
                                        <span class="num">9.</span>
                                        Pour le café, cacao, cajou et l'huile de palme il faut un versement à la BCRG et
                                        Autorisation d'exportation
                                    </button>
                                </h3>
                                <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 class="mysection">
                        Formalités & Moyens D'Exportation
                    </h2>
                    <p>Les formalités sont fonctions du moyen de transport</p>
                </div>

                <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Voie Aerienne</h3>
                            <div class="icon">
                                <i class="bi bi-airplane"></i>
                            </div>
                            <ul>
                                <li><i class="bi bi-check"></i> La déclaration descriptive à la DDI </li>
                                <li><i class="bi bi-check"></i> Le certificat d'analyse à l'ONCQ </li>
                                <li><i class="bi bi-check"></i> Les certificats technique à l'aguipex </li>
                                <li><i class="bi bi-check"></i> Le certificat d'origine </li>
                                <li><i class="bi bi-check"></i> L'autorisation d'exportation </li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item featured">
                            <h3>Voie Maritine</h3>
                            <div class="icon">
                                <i class="bi bi-droplet-half"></i>
                            </div>
                            <ul>
                                <li><i class="bi bi-check"></i> La déclaration descriptive à la DDI </li>
                                <li><i class="bi bi-check"></i> Le certificat d'analyse à l'ONCQ </li>
                                <li><i class="bi bi-check"></i> Les certificats technique à l'aguipex </li>
                                <li><i class="bi bi-check"></i> Le certificat d'origine </li>
                                <li><i class="bi bi-check"></i> L'autorisation d'exportation </li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Voie Routière</h3>
                            <div class="icon">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <ul>
                                <li><i class="bi bi-check"></i> La déclaration descriptive à la DDI </li>
                                <li><i class="bi bi-check"></i> Le certificat d'analyse à l'ONCQ </li>
                                <li><i class="bi bi-check"></i> Les certificats technique à l'aguipex </li>
                                <li><i class="bi bi-check"></i> Le certificat d'origine </li>
                                <li><i class="bi bi-check"></i> L'autorisation d'exportation </li>
                            </ul>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>
        </section><!-- End Pricing Section -->
        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="assets/img/stats-img.png" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">



                        @if (isset($statistiques))
                            @php
                                $colors = ['red', 'yellow', 'green'];
                                $counter = 0;
                            @endphp
                            @forelse ($statistiques as $statistique)
                                <div class="stats-item d-flex align-items-center">
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $statistique->number }}"
                                        data-purecounter-duration="1" class="purecounter"
                                        style="color:{{ $colors[$counter % 3] }}"></span>
                                    <p><strong>{{ $statistique->title }} </strong></p>
                                </div><!-- End Stats Item -->
                                @php
                                    $counter++;
                                @endphp
                            @empty
                                <p>Aucune donnée statistique trouvée </p>
                            @endforelse
                        @endif



                    </div>

                </div>

            </div>
        </section><!-- End Stats Counter Section -->
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 class="mysection">Produits Exportés</h2>
                    <p>Les produits exportées sont soumis à des règles et contrôles pour une meilleure qualification et
                        rendre ainsi aux normes internationales et à l'attente des marchés de consommation</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    <div>
                        <ul class="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tous les produits</li>
                            @foreach ($categories as $categorie)
                                <li data-filter=".filter-{{ Str::slug($categorie->name) }}">{{ $categorie->name }}</li>
                            @endforeach
                        </ul><!-- End Portfolio Filters -->
                    </div>

                    <div class="row gy-4 portfolio-container">
                        @foreach ($produits as $produit)
                            <div
                                class="col-xl-4 col-md-6 portfolio-item filter-{{ Str::slug($produit->categorie->name) }}">
                                <div class="portfolio-wrap">
                                    <a href="{{route('detailProduit', $produit->id)}}"
                                        data-gallery="portfolio-gallery-{{ Str::slug($produit->categorie->name) }}"
                                        class="glightbox">
                                        <img src="{{ asset('assets/produit/' . $produit->image) }}" class="img-fluid"
                                            alt="{{ $produit->title }}">
                                    </a>
                                    <div class="portfolio-info">
                                        <h4><a href="{{route('detailProduit', $produit->id)}}" title="More Details">{{ $produit->title }}</a></h4>
                                        <p>{{ $produit->description }}</p>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 class="mysection">Témoignages</h2>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @if (isset($temoignages))
                            @forelse ($temoignages as $temoignage)
                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('assets/temoignage/' . $temoignage->image) }}"
                                                    class="testimonial-img flex-shrink-0" alt="{{ $temoignage->name }}">
                                                <div>
                                                    <h3>{{ $temoignage->name }}</h3>
                                                    <h4>{{ $temoignage->fonction }}</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                {{ Str::limit($temoignage->contenu, 300) }}

                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center">Aucun temoignage trouvé</p>
                            @endforelse
                        @endif
                        <!-- End testimonial item -->



                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 class="mysection">EQUIPE</h2>
                    <p>Pour accomplir sa mission, La Direction Génerale de AGUIPEX est composé de: </p>
                </div>

                <div class="row gy-4">
                    @if (isset($equipes))
                        @forelse ($equipes as $equipe)
                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                                <div class="member">
                                    <img src="{{ asset('assets/equipe/' . $equipe->image) }}" class="img-fluid"
                                        alt="">
                                    <h4>{{ $equipe->name }}</h4>
                                    <span>{{ $equipe->fonction }}</span>
                                    <div class="social">
                                        <a href="{{ $equipe->lienTwitter }}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ $equipe->lienLinkdln }}"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
                        @empty
                            <p class="text-center">Aucune équipe trouvée</p>
                        @endforelse
                    @endif






                </div>

            </div>
        </section><!-- End Our Team Section -->




        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2 class="mysection">Activités Recentes</h2>
                </div>

                <div class="row gy-4">

                    @if ($activities->count())
                        @foreach ($activities as $activity)
                            <div class="col-xl-4 col-md-6">
                                <article>
                                    <div class="post-img">
                                        <img src="{{ asset('assets/activity/' . $activity->image) }}"
                                            alt="{{ $activity->title }}" class="img-fluid img_100">
                                    </div>
                                    <p class="post-category">{{ $activity->title }}</p>
                                    <h4 class="title">
                                        <a href="#">{{ Str::limit($activity->description, 100) }}</a>
                                    </h4>
                                    <a href="{{ url('/activite/detail/' . $activity->id) }}" style="color:green;"
                                        class="readmore stretched-link">
                                        Voir plus... <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <p class="post-date">
                                            <time datetime="2022-01-01">{{ $activity->formatted_date }}</time>
                                        </p>
                                    </div>
                                </article>
                            </div><!-- End post list item -->
                        @endforeach
                        <div class="col-12 text-center mt-4">
                            <a href="{{ route('allActivity') }}" class="btn btn-success">Plus d'activité <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    @else
                        <p>Aucune activité active et publiée trouvée.</p>
                    @endif




                </div><!-- End recent posts list -->

            </div>
        </section><!-- End Recent Blog Posts Section -->
        <!-- section partenaires -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">
                <h2 class="mysection" id="#partenaire"
                    style="text-align: center; margin-bottom: 15px; font-weight: bold;">Nos Partenaires</h2>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/PDACG.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/FAEFF_logo.jpeg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/AFRICAN_LEASE_logo.jpeg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->
        <!-- ======= Contact Section ======= -->
        @include('frontend.layout.contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
