<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Makin Fishing</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="asets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('frontend/product') }}/assets/css/theme.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="index.html"><img
                        src="{{ asset('frontend/product') }}/assets/img/logo720.png" height="90"
                        alt="logo" /></a>
                <div class="mt-4 collapse navbar-collapse border-top border-lg-0 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#feature">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#validation">Keterangan</a>
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link" aria-current="page" href="#superhero">Pricing</a></li> --}}
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#marketing">Jenis</a>
                        </li>

                    </ul>

                    
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('login') }}">login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">register</a>
                            </li>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                <li class="nav-item"><a class="nav-link" aria-current="page"
                                        href="{{ route('produk.index') }}">Halaman Admin</a></li>
                            </form>
                        </ul>
                    </div>
                </div>
        </nav>
        <section class="pt-7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="py-6 text-center col-md-6 text-md-start">
                        <h1 class="mb-4 fs-9 fw-bold">Pelampung Pancing Hikmah company.</h1>
                        <p class="mb-6 lead text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Reiciendis cupiditate ab, quis temporibus est explicabo laboriosam fugiat alias quae
                            voluptatibus, omnis repellendus cumque accusamus similique at obcaecati perferendis nesciunt
                            nobis.<br></p>
                        <div class="text-center text-md-start"><a class="btn btn-warning me-3 btn-lg" href=""
                                role="button">Lihat Semua</a><a class="btn btn-link text-warning fw-medium"
                                href="" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span
                                    class="fas fa-play me-2"></span></a></div>
                    </div>
                    <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid"
                            src="{{ asset('frontend/product') }}/assets/img/hero/hero-img.png" alt="" /></div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5 mb-6 pt-md-9" id="feature">

            <div class="bottom-0 bg-holder z-index--1 d-none d-lg-block"
                style="background-image:url({{ asset('frontend/product') }}/assets/img/category/shape.png);opacity:.5;">
            </div>
            <!--/.bg-holder-->


            {{-- konten --}}

            <div class="container">
                <h1 class="mb-4 text-center fs-9 fw-bold"> Produk <br></h1>
                <div class="row">
                    @foreach ($produks as $item)
                        <div class="mb-2 col-lg-3 col-sm-6"> <img class="mb-3 ms-n3"
                                src="{{ asset('images/' . $item->foto) }}" width="200"
                                alt="{{ $item->nama_produk }}" />
                            <h4 class="mb-3">{{ $item->nama_produk }}</h4>
                            <p class="mb-0 fw-medium text-secondary">Personal choices and the overall personality of
                                the person.</p>
                        </div>
                    @endforeach
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="validation">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="text-secondary">Effortless Validation for</h5>
                        <h2 class="mb-2 fs-7 fw-bold">Design Professionals</h2>
                        <p class="mb-4 fw-medium text-secondary">
                            The Myspace page defines the individual,his or her
                            characteristics, traits, personal choices and the overall<br />personality of the person.
                        </p>
                        <h4 class="fs-1 fw-bold">Accessory makers</h4>
                        <p class="mb-4 fw-medium text-secondary">While most people enjoy casino gambling, sports
                            betting,<br />lottery and bingo playing for the fun</p>
                        <h4 class="fs-1 fw-bold">Alterationists</h4>
                        <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your
                            business<br />that won't cost you money,</p>
                        <h4 class="fs-1 fw-bold">Custom Design designers</h4>
                        <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your
                            business<br />that won't cost you more money,</p>
                    </div>
                    <div class="col-lg-6"><img class="img-fluid"
                            src="{{ asset('frontend/product') }}/assets/img/validation/validation.png"
                            alt="" /></div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="manager">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6"><img class="img-fluid"
                            src="{{ asset('frontend/product') }}/assets/img/manager/manager.png" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <h5 class="text-secondary">Easier decision making for</h5>
                        <p class="mb-2 fs-7 fw-bold">Product Managers</p>
                        <p class="mb-4 fw-medium text-secondary">
                            The Myspace page defines the individual,his or her
                            characteristics, traits, personal choices and the overall<br />personality of the person.
                        </p>
                        <div class="mb-3 d-flex align-items-center"> <img class="me-sm-4 me-2"
                                src="{{ asset('frontend/product') }}/assets/img/manager/tick.png" width="35"
                                alt="tick" />
                            <p class="mb-0 fw-medium text-secondary">Never worry about overpaying for your<br />energy
                                again.</p>
                        </div>
                        <div class="mb-3 d-flex align-items-center"> <img class="me-sm-4 me-2"
                                src="{{ asset('frontend/product') }}/assets/img/manager/tick.png" width="35"
                                alt="tick" />
                            <p class="mb-0 fw-medium text-secondary">We will only switch you to energy
                                companies<br />that we trust and will treat you right</p>
                        </div>
                        <div class="mb-3 d-flex align-items-center"><img class="me-sm-4 me-2"
                                src="{{ asset('frontend/product') }}/assets/img/manager/tick.png" width="35"
                                alt="tick" />
                            <p class="mb-0 fw-medium text-secondary"> We track the markets daily and know where
                                the<br />savings are.</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="marketing">

            <div class="container">
                <h1 class="mb-3 fw-bold fs-6">Kategori</h1>

                @foreach ($kategoris as $item)
                    <div class="mb-2 col-lg-3 col-sm-6"> <img class="mb-3 ms-n3"
                            src="{{ asset('images/' . $item->foto) }}" width="200"
                            alt="{{ $item->nama_kategori }}" />
                        <h4 class="mb-3">{{ $item->nama_kategori }}</h4>
                        <p class="mb-0 fw-medium text-secondary">Personal choices and the overall personality of
                            the person.</p>
                    </div>
                @endforeach
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="marketer">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="text-secondary">Optimisation for</h5>
                        <p class="mb-2 fs-8 fw-bold">Marketers</p>
                        <p class="mb-4 fw-medium text-secondary">Few would argue that, despite the advancements
                            of<br />feminism over the past three decades, women still face a<br />double standard when
                            it comes to their behavior.</p>
                        <h4 class="fw-bold fs-1">Accessory makers</h4>
                        <p class="mb-4 fw-medium text-secondary">While most people enjoy casino gambling, sports
                            betting,<br />lottery and bingo playing for the fun</p>
                        <h4 class="fw-bold fs-1">Alterationists</h4>
                        <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your
                            business<br />that won't cost you money,</p>
                        <h4 class="fw-bold fs-1">Custom Design designers</h4>
                        <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your
                            business<br />that won't cost you more money,</p>
                    </div>
                    <div class="col-lg-6"><img class="img-fluid"
                            src="{{ asset('frontend/product') }}/assets/img/marketer/marketer.png" alt="" />
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-8 py-md-5" id="superhero">

            <div class="bottom-0 bg-holder z-index--1 d-none d-lg-block background-position-top"
                style="background-image:url({{ asset('frontend/product') }}/assets/img/superhero/oval.png);opacity:.5; background-position: top !important ;">
            </div>
            <!--/.bg-holder-->


            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->







        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-2 pb-lg-5">

            <div class="container">
                <div class="row border-top border-top-secondary pt-7">
                    <div class="order-1 mb-4 col-lg-3 col-md-6 mb-md-6 mb-lg-0 mb-sm-2 order-md-1 order-lg-1"><img
                            class="mb-4" src="{{ asset('frontend/product') }}/assets/img/logo.svg" width="184"
                            alt="" /></div>
                    <div class="order-3 mb-4 col-lg-3 col-md-6 mb-lg-0 order-md-3 order-lg-2">
                        <p class="fs-2 mb-lg-4">Quick Links</p>
                        <ul class="mb-0 list-unstyled">
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">About us</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Blog</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Contact</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="order-4 mb-4 col-lg-3 col-md-6 mb-lg-0 order-md-4 order-lg-3">
                        <p class="fs-2 mb-lg-4">Legal stuff</p>
                        <ul class="mb-0 list-unstyled">
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Disclaimer</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Financing</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Privacy Policy</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="order-2 mb-4 col-lg-3 col-md-6 col-6 mb-lg-0 order-md-2 order-lg-4">
                        <p class="fs-2 mb-lg-4">
                            knowing you're always on the best energy deal.</p>
                        <form class="mb-3">
                            <input class="form-control" type="email" placeholder="Enter your phone Number"
                                aria-label="phone" />
                        </form>
                        <button class="py-1 btn btn-warning fw-medium">Sign up Now</button>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 text-center">

            <div class="container">
                <div class="container py-3 border-top">
                    <div class="row justify-content-between">
                        <div class="mb-1 col-12 col-md-auto mb-md-0">
                            <p class="mb-0">&copy; 2024 Makin Fishing Company </p>
                        </div>
                        <div class="col-12 col-md-auto">
                            <p class="mb-0">
                                Made with<span class="mx-1 fas fa-heart text-danger"> </span> <a
                                    class="text-decoration-none ms-1" href="https://themewagon.com/"
                                    target="_blank">Fadli Rahman</a></p>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->





    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="{{ asset('frontend/product') }}/assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">
</body>

</html>
