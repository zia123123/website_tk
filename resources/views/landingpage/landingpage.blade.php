<!doctype html>
<html lang="en">

<head>
    <title>Kiddy &mdash; Website Template by Colorlib</title>
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
                        <a href="{{ route('/') }}" style="font-size: 35px">TKIT Little Moslem<span
                                class="text-primary">.</span></a>
                    </div>
                    <div class="site-quick-contact d-none d-lg-flex ml-auto ">
                        <div class="d-flex site-info align-items-center mr-5">
                            <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                            <span>34 Bojongsoang, City Bandung, <br> Indonesia</span>
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
                            <li class="active"><a href="{{ route('/') }}" class="nav-link">Beranda</a></li>
                            <li><a href="{{ route('/programlanding') }}" class="nav-link">Program</a></li>
                            <li><a href="{{ route('/galerilanding') }}" class="nav-link">Galeri</a></li>
                            <li><a href="{{ route('/pendaftaranlanding') }}" class="nav-link">Pendaftaran</a></li>
                            <li><a href="{{ route('/beritalanding') }}" class="nav-link">Berita</a></li>
                        </ul>
                    </nav>

                    <div class="top-social ml-auto">
                        <a href="#"><span class="icon-facebook text-teal"></span></a>
                        {{-- <a href="{{ route('login') }}" class="btn btn-primary">Sign in</a> --}}
                    </div>
                </div>
            </div>



        </header>

        {{-- <div class="ftco-blocks-cover-1">
            <div class="site-section-cover bg-info overlay">
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-md-5 mt-5 pt-5">
                            <span class="text-cursive h5 text-red">Welcome To Our Website</span>
                            <h1 class="mb-3 font-weight-bold text-teal">KREATIF, INOVATIF,TAQWA dan AMANAH.</h1>
                            <p>Amazing Playground for your kids</p>
                            </p>
                        </div>
                        <div class="col-md-6 ml-auto align-self-end mb-5 ">
                            <img src="{{ asset('vendor/secondaryasset/images/img_background.png') }}" alt="Image"
                                class="img-fluid square rounded">

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="ftco-blocks-cover-1">
            <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
                style="background-image: url('{{ asset('vendor/secondaryasset/images/bg_01.jpg') }}')">
                <div class="container">
                    <div class="row align-items-center ">

                        <div class="col-md-5 mt-5 pt-5">
                            <span class="text-cursive h5 text-white">Welcome To Our Website</span>
                            <h1 class="mb-3 font-weight-bold text-teal">KREATIF, INOVATIF,TAQWA dan AMANAH.</h1>
                            <p>Amazing Playground for your kids</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- data program --}}
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="text-cursive h3 text-teal d-block">Program</span>
                        <h2 class="text-teal">Our Program</h2>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-4">
                        <div class="block-2 red">
                            <span class="wrap-icon">
                                <span class="icon-home"></span>
                            </span>
                            <h2>Indoor Games</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic
                                enim id culpa.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="block-2 yellow">
                            <span class="wrap-icon">
                                <span class="icon-person"></span>
                            </span>
                            <h2>Outdoor Game And Event</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic
                                enim id culpa.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="block-2 teal">
                            <span class="wrap-icon">
                                <span class="icon-cog"></span>
                            </span>
                            <h2>Camping for Kids</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic
                                enim id culpa.</p>
                        </div>
                    </div> --}}
                    @foreach ($data_program as $row)
                        @php

                            if ($row['id'] % 2 == 0) {
                                $color = 'block-2 red';
                                $dataicon = 'icon-home';
                            } elseif ($row['id'] % 3 == 0) {
                                $color = 'block-2 teal';
                                $dataicon = 'icon-person';
                            } else {
                                $color = 'block-2 yellow';
                                $dataicon = 'icon-cog';
                            }

                        @endphp

                        {{-- <div class="uk-width-1-10" style="background-color:{{ $color }}">
                            {{ $row['AGING'] }}</div> --}}
                        <div class="col-lg-4">
                            <div class="{{ $color }}">
                                <span class="wrap-icon">
                                    <span class="{{ $dataicon }}"></span>
                                </span>
                                <h2>{{ $row->namaprogram }}</h2>
                                <p>{{ $row->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- about us  --}}
        <div class="site-section bg-dark">
            <div class="container">
                <div class="row">
                    @foreach ($data_about as $row)
                        <div class="col-md-6 mb-5 mb-md-0">
                            <img src="{{ asset($row->filename) }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-5 ml-auto pl-md-5">
                            <span class="text-cursive h5 text-red">{{ $row->judul }}</span>
                            <h3 class="text-white">TK Little Moslem Bojongsoang</h3>
                            <p><span class="text-white">{{ $row->content }}</span></p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        {{-- article list --}}
        <div class="site-section bg-warning">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <span class="text-cursive h3 text-white d-block">Article</span>
                        <h2 class="text-white">Our Article</h2>
                    </div>
                </div>

                <div class="row">
                    @foreach ($data as $row)
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="package text-center bg-white">
                                <img src="{{ asset($row->filename) }}" alt="Image" class="img-fluid"
                                    style="width: 10rem;">
                                <h3 class="text-teal mt-2">{{ $row->judul }}</h3>
                                <p>{{ $row->content }}</p>
                                <p><a href="/detailarticlelanding/{{ $row->id }}"
                                        class="btn btn-primary btn-custom-1 mt-4">Lihat detail</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="package text-center bg-white">
                <span class="img-wrap"><img
                        src="{{ asset('vendor/secondaryasset/images/flaticon/svg/002-target.svg') }}"
                        alt="Image" class="img-fluid"></span>
                <h3 class="text-success">Outdoor Game and Event</h3>
                <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis
                    distinctio soluta recusandae?</p>
                <p><a href="#" class="btn btn-warning btn-custom-1 mt-4">Learn More</a></p>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="package text-center bg-white">
                <span class="img-wrap"><img
                        src="{{ asset('vendor/secondaryasset/images/flaticon/svg/003-mission.svg') }}"
                        alt="Image" class="img-fluid"></span>
                <h3 class="text-danger">Camping for Kids</h3>
                <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis
                    distinctio soluta recusandae?</p>
                <p><a href="#" class="btn btn-success btn-custom-1 mt-4">Learn More</a></p>
            </div>
        </div> --}}
        {{-- visi misi list --}}
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="text-cursive h5 text-red d-block">Visi Misi</span>
                        <h2 class="text-black">Visi Misi TK Little Moslem Bojongsoang</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque nostrum ducimus similique
                            neque debitis voluptatum vitae tempore, sapiente, nemo itaque omnis saepe ut labore quia
                            beatae nam rerum accusamus reprehenderit.</p>
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="pricing teal">
                            <span class="price">
                                <span>$30</span>
                            </span>
                            <h3>Silver Pack</h3>
                            <ul class="ul-check list-unstyled teal">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Nemo quis cupiditate</li>
                            </ul>
                            <p><a href="#" class="btn btn-teal btn-custom-1 mt-4">Buy Now</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing danger">
                            <span class="price">
                                <span class="icon-home" style="color: white;"></span>
                            </span>
                            <h3>Golden Pack</h3>
                            <ul class="ul-check list-unstyled danger">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Nemo quis cupiditate</li>
                            </ul>
                            <p><a href="#" class="btn btn-danger btn-custom-1 mt-4">Buy Now</a></p>
                        </div>
                    </div> --}}
                    @foreach ($data_visi as $row)
                        @php
                            if ($row['id'] % 3 == 0) {
                                $color = 'pricing teal';
                                $dataicon = 'icon-home';
                                $btn = 'btn btn-teal btn-custom-1 mt-4';
                                $tail = 'ul-check list-unstyled success';
                            } else {
                                $color = 'pricing danger';
                                $dataicon = 'icon-cog';
                                $btn = 'btn btn-danger btn-custom-1 mt-4';
                                $tail = 'ul-check list-unstyled danger';
                            }
                        @endphp
                        <div class="col-md-4">
                            <div class="{{ $color }}">
                                <span class="price">
                                    <span class="{{ $dataicon }}" style="color: white;"></span>
                                </span>
                                <h3>{{ $row->judul }}</h3>
                                <ul class="{{ $tail }}">
                                    <li>{{ $row->content }}</li>
                                </ul>
                                {{-- <p><a href="#" class="{{ $btn }}">Learn More</a></p> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- <div class="site-section bg-light">
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
                                        <img src="{{ asset('vendor/secondaryasset/images/person_1.jpg') }}"
                                            alt="Image" class="vcard img-fluid">
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
                                        <img src="{{ asset('vendor/secondaryasset/images/person_3.jpg') }}"
                                            alt="Image" class="vcard img-fluid">
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
                                        <img src="{{ asset('vendor/secondaryasset/images/person_2.jpg') }}"
                                            alt="Image" class="vcard img-fluid">
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
                <div class="row mt-5 justify-content-center">

                    <div class="col-md-8">


                        <div class="row">
                            <div class="col-lg-3 text-center">
                                <span class="text-teal h2 d-block">3423</span>
                                <span>Happy Client</span>
                            </div>
                            <div class="col-lg-3 text-center">
                                <span class="text-yellow h2 d-block">4398</span>
                                <span>Members</span>
                            </div>
                            <div class="col-lg-3 text-center">
                                <span class="text-success h2 d-block">50+</span>
                                <span>Staffs</span>
                            </div>
                            <div class="col-lg-3 text-center">
                                <span class="text-danger h2 d-block">2000+</span>
                                <span>Our Followers</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}


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
