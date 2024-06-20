
@extends('frontend.layout.base')

@section('content')
<main id="main">
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Decouvrez tous nos services</h2>
            {{-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{route('frontend.home')}}">Acceuil</a></li>
          <li>services</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

  <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2 class="mysection">Tous les services</h2>
        <p>Avec pour mission principale d’assurer la valorisation et la promotion continue des produits et services destinés à l’exportation,  <span style="font-weight: bold;">  AGUIPEX offre plusieurs services </span>
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
              <i class="{{$service->icone}}"></i>
            </div>
            <h3>{{$service->title}}</h3>
            <p style="text-align: justify;">{{$service->description}}</p>
            <a href="{{route('serviceDetail', $service->id)}}" class="readmore stretched-link">Lire plus... <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        @endforeach
         
        @else
        <p class="text-center">Aucun service active et publié trouvé.</p>
      @endif

      </div>

    </div>
  </section>
  <!-- End Our Services Section -->
  @include('frontend.layout.contact')
  <!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection