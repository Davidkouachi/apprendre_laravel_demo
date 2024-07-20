<!DOCTYPE html>
<html class="js" lang="zxx">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <head>
    <meta charset="utf-8">
    <meta content="Softnio" name="author">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." name="description">
    <link href="{{asset('1.ico')}}" rel="shortcut icon">
    <title>
        @yield('titre')
    </title>
    <link href="{{asset('assets/css/dashlite55a0.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme55a0.css')}}" id="skin-default" rel="stylesheet">
    </link>
    </link>
    </link>
    </meta>
    </meta>
    </meta>
    </meta>
</head>

<body class="nk-body ui-rounder has-sidebar ui-light ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @yield('menu')
            <div class="nk-wrap ">
                <div class="nk-header is-light nk-header-fixed is-light">
                    <div class="container-xl wide-xl">
                        <div class="nk-header-wrap">
                            @yield('btn_menu')
                            <div class="nk-header-brand ">
                                <a class="logo-link" href="">
                                    <img height="50" width="50" src="{{asset('image/1.png')}}" /></img>
                                </a>
                            </div>                           
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown notification-dropdown">
                                        <a class="nk-quick-nav-icon" href="{{ route('accueil') }}">
                                            <em class="icon ni ni-home"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a class="nk-quick-nav-icon" href="{{ route('user') }}">
                                            <em class="icon ni ni-user-add"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a class="nk-quick-nav-icon" href="{{ route('liste') }}">
                                            <em class="icon ni ni-user-list"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a class="nk-quick-nav-icon" href="{{route('liste_recherche')}}">
                                            <em class="icon ni ni-search"></em>
                                            <span class="fs-15px"></span>
                                        </a>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt">
                                                    </em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            @if (Auth::check())
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="">
                                                            <em class="icon ni ni-user-alt">
                                                            </em>
                                                            <span>
                                                                Voir profil
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{route('deconnexion')}}">
                                                            <em class="icon ni ni-signout">
                                                            </em>
                                                            <span>
                                                                Se Déconnecter
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            @else
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{route('registre')}}">
                                                            <em class="icon ni ni-user-add">
                                                            </em>
                                                            <span>
                                                                S'incrire
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('login')}}">
                                                            <em class="icon ni ni-lock">
                                                            </em>
                                                            <span>
                                                                Se connecter
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @yield('content')

                <div class="nk-footer">
                    <div class="container-xl wide-xl">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright d-flex w-100">
                                <span class="me-2" >
                                    ©<script>
                                    document.write(new Date().getFullYear())
                                    </script>.Laravel_demo
                                </span>
                                {{-- <marquee  behavior="" direction="">
                                    <span class="text-danger" >
                                        Attention :
                                    </span>
                                    <span class="" >
                                        Message
                                    </span>
                                </marquee> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/bundle55a0.js')}}"></script>
    <script src="{{asset('assets/js/scripts55a0.js')}}"></script>
    <script src="{{asset('assets/js/demo-settings55a0.js')}}"></script>
    <script src="{{asset('assets/js/charts/gd-campaign55a0.js')}}"></script>
    <script src="{{asset('assets/js/example-toastr55a0.js') }}"></script>

    @if (session('success'))
        <script>
            NioApp.Toast("<h5>Succès</h5><p>{{ session('success') }}.</p>", "success", {position: "top-right"});
        </script>
        {{ session()->forget('success') }}
    @endif
    @if (session('error'))
        <script>
            NioApp.Toast("<h5>Erreur</h5><p>{{ session('error') }}.</p>", "error", {position: "top-right"});
        </script>
        {{ session()->forget('error') }}
    @endif
    @if (session('warning'))
        <script>
            NioApp.Toast("<h5>Alert</h5><p>{{ session('warning') }}.</p>", "warning", {position: "top-right"});
        </script>
        {{ session()->forget('warning') }}
    @endif
    @if (session('info'))
        <script>
            NioApp.Toast("<h5>Information</h5><p>{{ session('info') }}.</p>", "info", {position: "top-right"});
        </script>
        {{ session()->forget('info') }}
    @endif
</body>


</html>