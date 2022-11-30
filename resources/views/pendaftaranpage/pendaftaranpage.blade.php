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
                            <li><a href="{{ route('/galerilanding') }}" class="nav-link">Galeri</a></li>
                            <li class="active"><a href="{{ route('/pendaftaranlanding') }}"
                                    class="nav-link">Pendaftaran</a></li>
                        </ul>
                    </nav>

                    <div class="top-social ml-auto">
                        <a href="#"><span class="icon-facebook text-teal"></span></a>
                    </div>
                </div>
            </div>



        </header>

        <div class="ftco-blocks-cover-1">
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
                style="background-image: url('{{ asset('vendor/secondaryasset/images/bg_01.jpg') }}')">
                <div class="container">
                    <div class="row align-items-center ">

                        <div class="col-md-5 mt-5 pt-5">
                            <span class="text-cursive h5 text-white">Pendaftaran</span>
                            <h1 class="mb-3 font-weight-bold text-teal">Pendaftaran</h1>
                            <p><a href="{{ route('/') }}" class="text-red">Home</a> <span class="mx-3">/</span>
                                <strong>Pendaftaran</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-7 text-center mb-5">
                        <h2>⭐Pendaftaran⭐</h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum
                            necessitatibus eius earum voluptates sed!</p> --}}
                    </div>
                </div>
                <div class="row">

                    @foreach ($data_pendaftaran as $row)
                        @php
                            if ($row['id'] % 2 == 0) {
                                $color = 'text-teal';
                                $btncolor = 'btn btn-success mt-2 text-white';
                            } else {
                                $color = 'text-purple';
                                $btncolor = 'btn btn-info mt-2';
                            }
                        @endphp
                        <div class="col-lg-4 mb-4">
                            <div class="package text-center bg-white">
                                <span class="img-wrap"><img src="{{ asset($row->filename) }}" alt="Image"
                                        class="img-fluid" style="width:100px;"></span>
                                <h3 class="{{ $color }}">{{ $row->judul }}</h3>
                                <p>{{ $row->content }}</p>
                                <p><a target="_blank" href="{{ $row->link }}" class="{{ $btncolor }}">Click
                                        me</a></p>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-4 ml-auto">
                        <div class="bg-white p-3 p-md-5">
                            <h3 class="text-black mb-4">Contact Info</h3>
                            <ul class="list-unstyled footer-link">
                                <li class="d-block mb-3">
                                    <span class="d-block text-black">Address:</span>
                                    <span>Komp. Griya Permata Asri Blok A9 no. 10 Bojongsoang</span>
                                </li>
                                <li class="d-block mb-3"><span
                                        class="d-block text-black">Phone:</span><span>+628170234258</span></li>
                                <li class="d-block mb-3"><span
                                        class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="text-cursive h5 text-red d-block">Testimonial</span>
                        <h2 class="text-black">What Our Client Says About Us</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="testimonial-3-wrap">


                            <div class="owl-carousel nonloop-block-13">
                                <div class="testimonial-3 d-flex">
                                    <div class="vcard-wrap mr-5">
                                        <img src="{{ asset('vendor/secondaryasset/images/person_1.jpg') }}" alt="Image" class="vcard img-fluid">
                                    </div>
                                    <div class="text">
                                        <h3>Jeff Woodland</h3>
                                        <p class="position">Partner</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum
                                            libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                                    </div>
                                </div>

                                <div class="testimonial-3 d-flex">
                                    <div class="vcard-wrap mr-5">
                                        <img src="{{ asset('vendor/secondaryasset/images/person_3.jpg') }}" alt="Image" class="vcard img-fluid">
                                    </div>
                                    <div class="text">
                                        <h3>Jeff Woodland</h3>
                                        <p class="position">Partner</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum
                                            libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                                    </div>
                                </div>

                                <div class="testimonial-3 d-flex">
                                    <div class="vcard-wrap mr-5">
                                        <img src="{{ asset('vendor/secondaryasset/images/person_2.jpg') }}" alt="Image" class="vcard img-fluid">
                                    </div>
                                    <div class="text">
                                        <h3>Jeff Woodland</h3>
                                        <p class="position">Partner</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum
                                            libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
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
