<!doctype html>
<html lang="en">

<head>
    <title>TK IT Little Moslem.sch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('vendor/secondaryasset/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/secondaryasset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/secondaryasset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/secondaryasset/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/secondaryasset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/secondaryasset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/secondaryasset/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/secondaryasset/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/secondaryasset/css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container mb-3">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto">
                        <a href="{{ route('/') }}" style="font-size: 35px">TK IT Little Moslem<span
                                class="text-primary">.</span></a>
                    </div>
                    <div class="site-quick-contact d-none d-lg-flex ml-auto ">
                        <div class="d-flex site-info align-items-center mr-5">
                            <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                            <span>34 Bojongswan, City Bandung, <br> Indonesia</span>
                        </div>
                        <div class="d-flex site-info align-items-center">
                            <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                            <span>Monday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
                        </div>

                    </div>
                </div>
            </div>


            <div class="container">
                <div class="menu-wrap d-flex align-items-center">
                    <span class="d-inline-block d-lg-none"><a href="#"
                            class="text-black site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-black"></span></a></span>



                    <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto ">
                            <li><a href="{{ route('/') }}" class="nav-link">Beranda</a></li>
                            <li><a href="{{ route('/') }}" class="nav-link">Kelas</a></li>
                            <li><a href="{{ route('/programlanding') }}" class="nav-link">Program</a>
                            </li>
                            <li><a href="{{ route('/beritalanding') }}" class="nav-link">Kegiatan Harian</a></li>
                            <li class="active"><a href="{{ route('/galerilanding') }}" class="nav-link">Galeri</a></li>
                            <li><a href="{{ route('/pendaftaranlanding') }}" class="nav-link">Pendaftaran</a></li>
                        </ul>
                    </nav>

                    <div class="top-social ml-auto">
                        <a href="#"><span class="icon-facebook text-teal"></span></a>
                    </div>
                </div>
            </div>



        </header>

        <div class="ftco-blocks-cover-1">
            <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
                style="background-image: url('{{ asset('vendor/secondaryasset/images/bg_01.jpg') }}')">
                <div class="container">
                    <div class="row align-items-center ">

                        <div class="col-md-5 mt-5 pt-5">
                            <span class="text-cursive h5 text-white">Gallery</span>
                            <h1 class="mb-3 font-weight-bold text-teal">Gallery Of Kids</h1>
                            <p><a href="{{ route('/') }}" class="text-red">Home</a> <span class="mx-3">/</span>
                                <strong>Gallery</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-success">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="text-cursive h5 text-white d-block">Our Gallery</span>
                        <h2 class="text-white">Gallery Of The Kids</h2>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-md-3 mb-4">
                        <a href="{{ asset('vendor/secondaryasset/images/img_2.jpg') }}" data-fancybox="gal"><img
                                src="{{ asset('vendor/secondaryasset/images/img_2.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="{{ asset('vendor/secondaryasset/images/img_2.jpg') }}" data-fancybox="gal"><img
                                src="{{ asset('vendor/secondaryasset/images/img_2.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="{{ asset('vendor/secondaryasset/images/img_3.jpg') }}" data-fancybox="gal"><img
                                src="{{ asset('vendor/secondaryasset/images/img_3.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="{{ asset('vendor/secondaryasset/images/img_4.jpg') }}" data-fancybox="gal"><img
                                src="{{ asset('vendor/secondaryasset/images/img_4.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                    </div>

                    <div class="col-md-3 mb-4">
                        <a href="{{ asset('vendor/secondaryasset/images/img_5.jpg') }}" data-fancybox="gal"><img
                                src="{{ asset('vendor/secondaryasset/images/img_5.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="{{ asset('vendor/secondaryasset/images/img_3.jpg') }}" data-fancybox="gal"><img
                                src="{{ asset('vendor/secondaryasset/images/img_3.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="{{ asset('vendor/secondaryasset/images/img_2.jpg') }}" data-fancybox="gal"><img
                                src="{{ asset('vendor/secondaryasset/images/img_2.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <img src="{{ asset('vendor/secondaryasset/images/img_1.jpg') }}" alt="Image"
                            class="img-fluid">
                    </div> --}}
                    {{-- @foreach ($data_galeri as $row)
                        <div class="col-md-3 mb-4">
                            <a href="{{ asset($row->filename) }}" data-fancybox="gal"><img
                                    src="{{ asset($row->filename) }}" alt="Image" class="img-fluid"></a>
                        </div>
                    @endforeach --}}
                    @foreach ($data_galeri as $row)
                        <div class="col-lg-4 mt-2">
                            <div class="package text-center bg-white">
                                <img src="{{ asset($row->filename) }}" alt="Image" class="img-fluid"
                                    style="width: 18rem;">
                                <h3 class="text-danger mt-2">{{ $row->judul }}</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p><a href="/detailgalerilanding/{{ $row->id }}"
                                        class="btn btn-primary btn-custom-1 mt-4">Baca selengkapnya</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>





        {{-- <div class="site-section py-5 bg-warning">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 d-flex">
                        <h2 class="text-white m-0">Bring Fun Life To Your Kids</h2>
                        <a href="#" class="btn btn-primary btn-custom-1 py-3 px-5 ml-auto">Get Started</a>
                    </div>
                </div>
            </div>
        </div> --}}


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        @foreach ($data_about as $row)
                            <h2 class="footer-heading mb-3">{{ $row->judul }}</h2>
                            <p class="mb-5">{{ $row->content }}</p>
                        @endforeach
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-4 ml-auto">
                                <h2 class="footer-heading mb-4">Alamat :</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">Komp. Griya Permata Asri Blok A9 no. 10 Bojongsoang</a></li>
                                </ul>
                                <h2 class="footer-heading mb-4">Email :</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">info@yourdomain.com</a></li>
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('vendor/secondaryasset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/secondaryasset/js/aos.js') }}"></script>

    <script src="{{ asset('vendor/secondaryasset/js/main.js') }}"></script>

</body>

</html>
