<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medic Rate</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('user/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('user/css/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('user/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('user/css/templatemo-medic-care.css') }}" rel="stylesheet">
    <!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
</head>

<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand mx-auto d-lg-none" href="{{ url('/questionnaire') }}">
                    Medic Care
                    <strong class="d-block">Health Specialist</strong>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#about') }}">Tentang</a>
                        </li>
                        <a class="navbar-brand d-none d-lg-block" href="{{ url('/questionnaire/question') }}">
                            Medic Rate
                            <strong class="d-block">Cek Kepuasan Layanan</strong>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/Petunjuk') }}">Petunjuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/member') }}">Login</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>



        @yield('content')

    </main>

    <footer class="site-footer section-padding" id="contact">

        <div class="col-lg-7 col-12 ms-auto  ">
            <p class="copyright-text">Copyright © Medic Care 2021

            </p>
        </div>

    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('user/js/custom.js') }}"></script>
    <!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
</body>

</html>
