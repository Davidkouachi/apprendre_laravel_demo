<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{asset('image/1.png')}}">
    <title>Création de compte | Dealexpress</title>
    <link rel="stylesheet" href="{{asset('assets/css/dashlite55a0.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('assets/css/theme55a0.css')}}">
</head>

<body class="nk-body ui-rounder npc-general ui-light pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a class="logo-link">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('image/1.png')}}" srcset="{{asset('image/1.png')}}">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Se connecter</h4>
                                        <!-- <div class="nk-block-des">
                                            <p>Create New Dashlite Account</p>
                                        </div> -->
                                    </div>
                                </div>
                                <form id="registre" class="" action="/auth_login" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <div class="form-control-wrap">
                                            <input autocomplete="off" name="email" type="email" class="form-control form-control-md" id="email" placeholder="Entrer votre Email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Mot de passe</label>
                                            <a class="link link-primary link-sm" href="#">Mot de passe oublié ?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch md" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" value="{{ old('password') }}" name="password" class="form-control form-control-md" id="password" placeholder="Entrer votre Mot de passe">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-lg btn-dim btn-outline-success btn-block">
                                            <span>Connexion</span>
                                            <em class="icon ni ni-arrow-right-circle" ></em>
                                        </button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4">
                                    Vous n'avez pas de compte ? 
                                    <a class="" href="{{route('registre')}}">Créer un compte</a>
                                </div>
                                <!-- <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                </div>
                                <ul class="nav justify-center gx-8">
                                    <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer">
                    <div class="container-xl wide-xl">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright d-flex w-100">
                                <span class="me-2" >
                                    ©<script>document.write(new Date().getFullYear())</script>.Laravel_demo
                                </span>
                                <marquee  behavior="" direction="">
                                    <span class="text-danger" >
                                        Attention :
                                    </span>
                                    <span class="" >
                                        Message
                                    </span>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("registre").addEventListener("submit", function(event) {
            event.preventDefault();

            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (!email || !password) {
                NioApp.Toast("<h5>Alert</h5><p>Veuillez remplir tous les champs.</p>", "warning", {position: "top-right"});
                return false;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                NioApp.Toast("<h5>Information</h5><p>Veuillez saisir une adresse e-mail valide.</p>", "info", {position: "top-right"});
                return false;
            }
            
            if (!verifierMotDePasse(password)) {
                NioApp.Toast("<h5>Information</h5><p>Le mot de passe doit comporter au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre.</p>", "error", {position: "top-right"});
                return false;
            }

            this.submit();

            function verifierMotDePasse(motDePasse) {

                if (motDePasse.length < 8) {
                    return false;
                }

                if (!/[A-Z]/.test(motDePasse)) {
                    return false;
                }

                if (!/[a-z]/.test(motDePasse)) {
                    return false;
                }

                if (!/\d/.test(motDePasse)) {
                    return false;
                }

                return true;
            }

        });
    </script>

    <script src="{{asset('assets/js/bundle55a0.js')}}"></script>
    <script src="{{asset('assets/js/scripts55a0.js')}}"></script>
    <script src="{{asset('assets/js/demo-settings55a0.js')}}"></script>
    <script src="{{asset('assets/js/example-toastr55a0.js') }}"></script>

    @if (session('error'))
        <script>
            NioApp.Toast("<h5>Erreur</h5><p>{{ session('error') }}.</p>", "error", {position: "top-right"});
        </script>
        {{ session()->forget('error') }}
    @endif
    @if (session('info'))
        <script>
            NioApp.Toast("<h5>Erreur</h5><p>{{ session('info') }}.</p>", "info", {position: "top-right"});
        </script>
        {{ session()->forget('info') }}
    @endif
    
</html>

