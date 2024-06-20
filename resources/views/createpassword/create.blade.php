<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('login/assets/img/LOGO_AGUIPEX.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('login/assets/img/LOGO_AGUIPEX.png') }}">
    <title>AGUIPEX - AUTHENTIFICATION</title>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="{{ asset('login/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('login/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="{{ asset('login/assets/css/style.css') }}" rel="stylesheet" />
</head>

<body class="nav-fond">
    <nav class="navbar bg-body-tertiary position-fixed" style="width:100%;">
        <div class="container-fluid">
            <a class="navbar-brand"></a>
            <div class="d-flex" role="search" style="text-decoration: none; color:white;">
                <a style="cursor:pointer; color:white;" href="">Discuter</a>&nbsp;&nbsp;
                <a style="cursor:pointer; color:white;" href="">Partenaire</a>&nbsp;&nbsp;
                <a style="cursor:pointer; color:white;" href="">Connexion</a>
            </div>
        </div>
    </nav>

    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 ">
                                    <div class="row">
                                        {{-- <img src="{{ asset('login/assets/img/LOGO_AGUIPEX.jpg') }}" alt="main_logo"> --}}
                                        <b class="text-center text-white">Bonjour et bienvenue chez AGUIPEX ! Veuillez créer votre mot de passe unique et le conserver soigneusement. Merci.</b>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <form role="form" class="text-start" method="POST"
                                    action="{{ route('passwordcreate') }}">
                                    @csrf
                                    @method('POST')
                                    <div class="input-group input-group-outline my-3">
                                        @if (isset($email))
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $email }}" readonly>
                                        @endif
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <input type="password" name="password"
                                            class="form-control form-control-user {{ $errors->has('password_repeat') ? ' is-invalid' : '' }}"
                                            placeholder="Votre mot de passe..." required>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="password" name="password_repeat" class="form-control"
                                            placeholder="Confirmation du mot de passe..." required>
                                        @if ($errors->has('password_repeat'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password_repeat') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    @if ($errors->any())
                                        <span class="text-danger">{{ $errors->first() }}</span>
                                    @endif
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn bg-gradient-primary w-100 my-4 mb-2">Valider</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="text-center">
                            @if (Session::get('error_msg'))
                                <b style="color: red">{{ Session::get('error_msg') }}</b>
                            @endif
                        </div>
                        {{-- {{Hash::make('testing')}} --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
