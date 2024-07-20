<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{asset('image/1.png')}}">
    <title>Création de compte | Laravel_demo</title>
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
                                        <h4 class="nk-block-title">Création de compte</h4>
                                        <!-- <div class="nk-block-des">
                                            <p>Create New Dashlite Account</p>
                                        </div> -->
                                    </div>
                                </div>
                                <form id="registre" class="" action="/auth_registre" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Nom et Prénoms</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-md" name="nom" id="nom" placeholder="Entrer votre Nom et prénoms" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control form-control-md" name="email" id="email" placeholder="Entrer votre email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Contact</label>
                                        <div class="form-control-wrap mb-2">
                                            <input name="tel" id="tel" type="tel" class="form-control form-control-md" placeholder="Entrer votre contact" maxlength="10">
                                        </div>
                                        <script>
                                            var inputElement = document.getElementById('tel');
                                            inputElement.addEventListener('input', function() {
                                                // Supprimer tout sauf les chiffres
                                                this.value = this.value.replace(/[^0-9]/g, '');
                                            });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Mot de passe</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch md" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input name="password" type="password" class="form-control form-control-md" id="password" placeholder="Entrer votre mot de passe">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Confirmer le mot de passe</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch md" data-target="password2">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input name="password2" type="password" class="form-control form-control-md" id="password2" placeholder="Entrer a nouveau votre mot de passe">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-md btn-outline-success btn-block btn-dim ">
                                            <span>Création de compte</span>
                                            <em class="icon ni ni-arrow-right-circle" ></em>
                                        </button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> 
                                    Vous avez déja un compte ? 
                                    <a href="{{route('login')}}">
                                        <strong>Se connecter</strong>
                                    </a>
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

            var name = document.getElementById("nom").value;
            var email = document.getElementById("email").value;
            var tel = document.getElementById("tel").value;
            var password1 = document.getElementById("password").value;
            var password2 = document.getElementById("password2").value;

            if (!name || !email || !tel || !password1 || !password2 ) {
                NioApp.Toast("<h5>Alert</h5><p>Veuillez remplir tous les champs.</p>", "warning", {position: "top-right"});
                return false;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                NioApp.Toast("<h5>Information</h5><p>Veuillez saisir une adresse e-mail valide.</p>", "info", {position: "top-right"});
                return false;
            }

            if (tel.length !== 10) {
                NioApp.Toast("<h5>Information</h5><p>Veuillez saisir un numéro de téléphone valide.</p>", "info", {position: "top-right"});
                return false;
            }

            if (password1 !== password2) {
                NioApp.Toast("<h5>Erreur</h5><p>Les mots de passe ne correspondent pas.</p>", "error", {position: "top-right"});
                return false;
            }
            
            if (password1 === password2) {
                // Vérification si le mot de passe satisfait les critères
                if (!verifierMotDePasse(password1) || !verifierMotDePasse(password2) ) {
                    NioApp.Toast("<h5>Information</h5><p>Le mot de passe doit comporter au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre.</p>", "error", {position: "top-right"});
                    return false;
                }

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

    @if (session('error'))
        <script>
            NioApp.Toast("<h5>Erreur</h5><p>{{ session('error') }}.</p>", "error", {position: "top-right"});
        </script>
        {{ session()->forget('error') }}
    @endif

    <script src="{{asset('assets/js/bundle55a0.js')}}"></script>
    <script src="{{asset('assets/js/scripts55a0.js')}}"></script>
    <script src="{{asset('assets/js/demo-settings55a0.js')}}"></script>
    <script src="{{asset('assets/js/example-toastr55a0.js') }}"></script>

</html>
