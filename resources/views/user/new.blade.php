@extends('app')

@section('titre', 'Nouvelle utilisateur')

@section('content')

<div class="nk-content ">
    <div class="nk-block nk-block-middle nk-auth-body wide-md">
        <div class="card">
            <div class="card-inner card-inner-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">Nouveau Utilisateur</h4>
                    </div>
                </div>
                <form id="registre" class="" action="/new" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Nom et Prénoms</label>
                        <div class="form-control-wrap">
                            <input autocomplete="off" type="text" class="form-control form-control-md" name="nom" id="nom" placeholder="Entrer votre Nom et prénoms">
                        </div>
                    </div>
                    <div class="row g-gs mb-4" >
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <div class="form-control-wrap">
                                    <input autocomplete="off" type="email" class="form-control form-control-md" name="email" id="email" placeholder="Entrer votre email">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Contact</label>
                                <div class="form-control-wrap mb-2">
                                    <input autocomplete="off" name="tel" id="tel" type="tel" class="form-control form-control-md" placeholder="Entrer votre contact" maxlength="10">
                                </div>
                                <script>
                                    var inputElement = document.getElementById('tel');
                                    inputElement.addEventListener('input', function() {
                                        // Supprimer tout sauf les chiffres
                                        this.value = this.value.replace(/[^0-9]/g, '');
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                                <label class="form-label">Nouveau mot de passe</label>
                                <div class="form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch md" data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input name="password" type="password" class="form-control form-control-md" id="password" placeholder="Entrer votre mot de passe">
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Confirmer le nouveau mot de passe</label>
                                <div class="form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch md" data-target="password2">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input name="password2" type="password" class="form-control form-control-md" id="password2" placeholder="Entrer a nouveau votre mot de passe">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row g-gs">
                        <div class="col-lg-6">
                            <a class="btn btn-lg btn-dim btn-outline-danger btn-block" href="javascript:void(0);" onclick="history.back()">
                                <em class="icon ni ni-arrow-left-circle"></em>
                                <span>Retour</span>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-lg btn-dim btn-outline-success btn-block">
                                <span>Enregistrer</span>
                                <em class="icon ni ni-arrow-right-circle"></em>
                            </button>
                        </div>
                    </div>
                </form>
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

@endsection