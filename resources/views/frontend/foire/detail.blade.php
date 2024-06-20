@extends('frontend.layout.base')

@section('content')
<main id="main">

  <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-description">
          <h2>
            @if ($foire->type === 'FOIRE_NATIONALE')
                Foire Nationale
                @else
                Foire Internationale
            @endif
          </h2>

        </div>

        <div class="row justify-content-between gy-4 mt-4">
          <!-- Card 1 -->
          <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">Total Visiteurs</h5>
                <p class="card-text display-4">12</p>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">Pers. Financées</h5>
                <p class="card-text display-4">{{$foire->nbre_personne_finance}}</p>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">Produits Vendus</h5>
                <p class="card-text display-4">{{$foire->nbre_produit_vendu}}</p>
              </div>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h5 class="card-title">Total d'Activités</h5>
                <p class="card-text display-4">5</p>
              </div>
            </div>
          </div>
        </div>


        <div class="row mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              {{-- <h2>
                @if ($foire->type === 'FOIRE_NATIONALE')
                    Foire Nationale
                    @else
                    Foire Internationale
                @endif
              </h2> --}}
              <p>
                {{$foire->description}}
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Foire informations</h3>
              <ul>
                <li><strong>Type </strong> <span> {{
                    $foire->type === 'FOIRE_NATIONALE' ? 'Foire Nationale' :
                    ($foire->type === 'FOIRE_INTERNATIONALE' ? 'Foire Internationale' : $foire->type)
                  }}</span></li>

                <li><strong>Pays:</strong> <span>{{ $foire->pays }}</span></li>
                <li><strong>Lieu:</strong> <span>{{$foire->lieu}}</span></li>

                <li><strong>Date de lancement</strong> <span>{{$foire->date_debut}}</span></li>
                <li><strong>Date de cloture</strong> <span>{{$foire->date_fin}}</span></li>
                {{-- <li><strong>Project URL</strong> <a href="#">www.example.com</a></li> --}}
                <li><a href="/" class="btn-visit align-self-start">aguipex</a></li>
              </ul>
            </div>
          </div>

        </div>
        
       

        {{-- <div class="section-header">
          <h2 class="text-danger">IMAGES DES TEMPS FORT DE L'EVENEMENT</h2>
        </div>
        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">  
              @if (isset($images))
              @foreach ($images as $activityImages)
              <div class="swiper-slide">
                <img src="{{ asset('assets/activity/activities/'. $activityImages->images) }}" alt="{{ $activity->title }}"
                    width="250" height="500">         
            </div>
            @endforeach
            @endif 
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div> --}}

      </div>
    </section><!-- End Portfolio Details Section -->

    @include('frontend.layout.contact')

  <!-- End Contact Section -->

</main><!-- End #main -->
@endsection
