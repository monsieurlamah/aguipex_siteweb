
@extends('frontend.layout.base')

@section('content')
<main id="main">
  <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Decouvrez toutes nos activités</h2>
            {{-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{route('frontend.home')}}">Acceuil</a></li>
          <li>activité</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Breadcrumbs -->

  <section id="recent-posts" class="recent-posts sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="mysection">Nos activités</h2>
        </div>

        <div class="row gy-4">

            @if ($activities->count())
                @foreach ($activities as $activity)
                    <div class="col-xl-4 col-md-6">
                        <article>
                            <div class="post-img">
                                <img src="{{asset('assets/activity/'.$activity->image)}}" alt="{{ $activity->title }}"
                                    class="img-fluid img_100">
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
                
            @else
                <p>Aucune activité active et publiée trouvée.</p>
            @endif




        </div><!-- End recent posts list -->

    </div>
</section><!-- End Recent Blog Posts Section -->

@include('frontend.layout.contact')
<!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection