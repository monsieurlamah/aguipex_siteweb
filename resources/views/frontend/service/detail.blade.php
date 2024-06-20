
@extends('frontend.layout.base')

@section('content')
<main id="main">
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>{{$service->title}}</h2>
            {{-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{route('frontend.home')}}">Acceuil</a></li>
          <li>{{$service->title}}</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">
            {{-- caroussel des image en commentaire --}}
          {{-- <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="public/assets/img/portfolio/app-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="public/assets/img/portfolio/product-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="public/assets/img/portfolio/branding-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="public/assets/img/portfolio/books-1.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

          </div> --}}

          <div class="row justify-content-between gy-4 mt-1">

            <div class="col-lg-8">
              <div class="portfolio-description">
                <h2 style="text-transform:uppercase">
                    {{$service->title}}</h2>
                <p>
                   {{$service->description}}
                </p>
                

                {{-- <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <div>
                    <img src="public/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sia Kanio TOLNO</h3>
                    <h4>Directrice Générale Adjointe (AGUIPEX)</h4>
                  </div>
                </div> --}}

                {{-- <p>
                  Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

                <p>
                  Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
                </p> --}}

              </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                  <h3>Nos services</h3>
                  <ul>
                    <li>
                      <h5>Services Récents</h5>
                    </li>
                    @forelse ($services as $service)
                    <li>
                      <a href="{{route('serviceDetail', $service->id)}}"><span><i class="{{$service->icone}}"></i> {{$service->title}}</span></a>
                      </li>
                      @empty
                        <p>Aucun service trouvé</p>
                      @endforelse
                    <li><strong>Contact : </strong> <span>+224 611 75 65 52</span></li>
                    <li><a href="/" class="btn-visit align-self-start">AGUIPEX</a></li>
                  </ul>
                </div>
              </div>

          </div>

        </div>
      </section><!-- End Portfolio Details Section -->

      @include('frontend.layout.contact')
    
      <!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection