@extends('frontend.layout.base')

@section('content')<main id="main">

  <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">


        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>{{$activity->title}}</h2>
              <p>
                {{$activity->description}}
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Event informations</h3>
              <ul>
                <li><strong>Type </strong> <span>{{$activity->type}}</span></li>
                {{-- <li><strong>Lieu</strong> <span>{{$activite->place}}</span></li> --}}
                <li><strong>Date d'activité :</strong> <span>{{ $activity->formatted_date }}</span></li>
{{-- 
                <li><strong>Date de lancement</strong> <span>{{$activite->dateDebut}}</span></li>
                <li><strong>Date de cloture</strong> <span>{{$activite->dateFin}}</span></li> --}}
                {{-- <li><strong>Project URL</strong> <a href="#">www.example.com</a></li> --}}
                <li><a href="/" class="btn-visit align-self-start">aguipex</a></li>
              </ul>
            </div>
          </div>

        </div>
        <div class="section-header">
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

        </div>


      </div>
    </section><!-- End Portfolio Details Section -->

    @include('frontend.layout.contact')

  <!-- End Contact Section -->

</main><!-- End #main -->
@endsection
