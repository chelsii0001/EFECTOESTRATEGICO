<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Efecto Estrategico</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('assets/img/logo/efecto.ico')}}" type="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    @include('layouts.nav')


    @yield('main')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-9 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo-Efecto">
                    </a>
                </div>
                <div class="col-md-9 col-lg-4 wow fadeIn" data-wow-delay="0.3s">

                    <p><i class="fa fa-phone-alt me-3"></i>55 5833 2427</p>
                    <p><i class="fa fa-envelope me-3"></i>contacto@</p>
                    <div class="d-flex pt-2">

                        <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@contactcenteref">Tk</a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@contactcenteref"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/ContactCenterEF/"><i class="fab fa-facebook"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/equipocontactcenter/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-9 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Links</h5>
                    <a class="btn btn-link" href="{{ route('/') }}">Inicio</a>
                    <a class="btn btn-link" href="{{ route('inbound') }}">Inbound Marketing</a>
                    <a class="btn btn-link" href="{{ route('reclutamiento') }}">Reclutamiento Digital</a>
                    <a class="btn btn-link" href="{{ route('call') }}">Call Center </a>
                    <a class="btn btn-link" href="{{ route('btl') }}">Agencia BTL</a>
                </div>

            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">EFECTO ESTRATÉGICO</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    @yield('script')
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>
