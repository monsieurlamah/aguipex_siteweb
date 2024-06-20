@extends('frontend.layout.base')

@section('content')
<main id="main">
  <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">

      <!-- Produits Section -->
      <div class="section-header">
        <h2 class="text-danger">DETAIL DU PRODUIT</h2>
      </div>
      
      <div class="row">
        @if (isset($produit))
          <div class="col-md-12 mb-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
              <div class="row g-0">
                <div class="col-md-5">
                  <div class="card border-0">
                    <img src="{{ asset('assets/produit/' . $produit->image) }}" alt="{{ $produit->titre }}" class="card-img-top img-fluid" style="border-radius: 10px;">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h3 class="card-title text-success">{{ $produit->title }}</h3>
                    <p class="card-text">{{ $produit->description }}</p>
                    <p class="card-text"><strong>Catégorie:</strong> {{ $produit->categorie->name }}</p>
                  </div>
                </div>
              </div>
              <!-- Bouton Télécharger la fiche du produit -->
                <div class="row justify-content-end">
                    <div class="col-md-12  text-end">
                    <a href="{{ asset('assets/produit/fiche/lamah.pdf') }}" target="_blank" class="btn btn-success" style="border-radius: 45px;">Télécharger la fiche du produit</a>
                    </div>
                </div>
            </div>
          </div>
        @endif
      </div>

      

    </div>
  </section><!-- End Portfolio Details Section -->

  @include('frontend.layout.contact')

  <!-- End Contact Section -->

</main><!-- End #main -->
@endsection
