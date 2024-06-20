<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="mysection">Contact</h2>
            <p>
                Nous sommes disponible pour faciliter vos exportations</p>
        </div>

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>Cité Chemin de Fer, Immeuble Boké – 3ème étage - Commune de Kaloum</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>contact@aguipex.gov.gn</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+224 611 75 65 52</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>Open Hours:</h4>
                            <p>Lundi-vendredi: 8H - 17H</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

            </div>

            <div class="col-lg-8">
                @if (Session::get('success_msg'))
                    <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                @endif
                <form action="{{ route('contact.store') }}" method="post" role="form" class="">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Votre Nom" required>
                                @error('name')
                                <div class="text-danger"> <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Votre Email" required>
                            @error('email')
                                <div class="text-danger"> <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet"
                            required>
                            @error('subject')
                            <div class="text-danger"> <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="7" placeholder="Votre Message" required></textarea>
                    @error('message')
                        <div class="text-danger"> <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                    </div>
                    {{-- <div class="my-3">
                        <div class="loading">Lecture</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Votre message a été envoyé avec succès. Merci!</div>
                    </div> --}}
                    <div class="text-center"><button type="submit" style="border-radius: 50px" class="btn btn-success">Envoyé Message</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>
</section><!-- End Contact Section -->
