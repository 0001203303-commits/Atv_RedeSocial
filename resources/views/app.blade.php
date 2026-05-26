extends('index')
section('conteudo')

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    
    <!-- Links globais e fixos com helper asset() -->
    <link rel="stylesheet" href="{{ asset('sass/vender/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/vender/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css">
    <link rel="stylesheet" href="{{ asset('sass/main.css') }}">

    <!-- O yield do Head entra aqui: caso alguma página precise de um CSS específico -->
    @yield('head')
</head>
<body>

    <div class="post_page">
        <!-- MENU LATERAL FIXO -->
        <div class="nav_menu">
            <div class="fix_top">
                <div class="nav">
                    <div class="logo">
                        <a href="{{ url('/home') }}">
                            <img class="d-block d-lg-none small-logo" src="{{ asset('images/instagram.png') }}" alt="logo">
                            <img class="d-none d-lg-block" src="{{ asset('images/logo_menu.png') }}" alt="logo">
                        </a>
                    </div
                    >
                    <div class="menu">
                        <ul>
                            <li>
                                <a class="active" href="{{ url('/home') }}">
                                    <img src="{{ asset('images/accueil.png') }}">
                                    <span class="d-none d-lg-block ">Home</span>
                                </a>
                            </li>
                            <li id="search_icon">
                                <a href="#">
                                    <img src="{{ asset('images/search.png') }}">
                                    <span class="d-none d-lg-block search">Search </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/explore') }}">
                                    <img src="{{ asset('images/compass.png') }}">
                                    <span class="d-none d-lg-block ">Explore</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/reels') }}">
                                    <img src="{{ asset('images/video.png') }}">
                                    <span class="d-none d-lg-block ">Reels</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/messages') }}">
                                    <img src="{{ asset('images/send.png') }}">
                                    <span class="d-none d-lg-block ">Messages</span>
                                </a>
                            </li>
                            <li class="notification_icon">
                                <a href="#">
                                    <img src="{{ asset('images/love.png') }}">
                                    <span class="d-none d-lg-block ">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#create_modal">
                                    <img src="{{ asset('images/tab.png') }}">
                                    <span class="d-none d-lg-block ">Create</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/profile') }}">
                                    <img class="circle story" src="{{ asset('images/profile_img.jpg') }}">
                                    <span class="d-none d-lg-block ">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Dropdown "More" -->
                    <div class="more">
                        <div class="btn-group dropup">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/menu.png') }}">
                                <span class="d-none d-lg-block ">More</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><span>Settings</span><img src="{{ asset('images/reglage.png') }}"></a></li>
                                <li><a class="dropdown-item" href="#"><span>Your activity</span><img src="{{ asset('images/history.png') }}"></a></li>
                                <li><a class="dropdown-item" href="#"><span>Saved</span><img src="{{ asset('images/save-instagram.png') }}"></a></li>
                                <li><a class="dropdown-item" href="#"><span>Switch appearance</span><img src="{{ asset('images/moon.png') }}"></a></li>
                                <li><a class="dropdown-item" href="#"><span>Report a problem</span><img src="{{ asset('images/problem.png') }}"></a></li>
                                <li><a class="dropdown-item bold_border" href="#"><span>Switch accounts</span></a></li>
                                <li><a class="dropdown-item" href="{{ url('/logout') }}"><span>Log out</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Nav para telas pequenas -->
                <div class="nav_sm">
                    <div class="content">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="logo" src="{{ asset('images/logo_menu.png') }}">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><span>Following</span><img src="{{ asset('images/add-friend.png') }}"></a></li>
                                <li><a class="dropdown-item" href="#"><span>Favorites</span><img src="{{ asset('images/star.png') }}"></a></li>
                            </ul>
                        </div>
                        <div class="left">
                            <div class="search_bar">
                                <div class="input-group">
                                    <div class="form-outline">
                                        <div><img src="{{ asset('images/search.png') }}" alt="search"></div>
                                        <input type="search" id="form1" class="form-control" placeholder="Search" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fim nav_sm -->
            </div>
        </div> <!-- Fim nav_menu -->

        <!-- CONTEÚDO DINÂMICO PRINCIPAL -->
        <div class="main_content">
            @yield('content')
        </div>

    </div> <!-- Fim post_page -->

</body>
</html>
@endsection
