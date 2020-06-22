<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Abd. Asis - Web Company Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/frontend/assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/frontend/assets/css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/materialdesignicons.min.css" />

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/frontend/assets/css/style.css" />

    </head>

    <body>

        <!--Navbar Start-->
        @include('frontend.includes.navbar')
        <!-- Navbar End -->

        <!-- home start -->
        <section class="bg-home bg-image" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="home-title mo-mb-20">
                                    <h1 class="mb-4 text-white slider-title">Simple Made <span class="text-success">Possible <sup>TM</sup></span></h1>
                                    <p class="text-white-50 home-desc mb-5">From small cafes to the most sophisticated banks and retailers on the planet, NCR powers the technology that integrates everything—and runs your entire operation.</p>
                                    <div class="subscribe">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-success"><i class="mdi mdi-phone mr-1"></i>SUCRIBE</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                                <div class="home-img position-relative">
                                    <img src="images/home-img.png" alt="" class="home-first-img">
                                    <img src="images/home-img.png" alt="" class="home-second-img mx-auto d-block">
                                    <img src="images/home-img.png" alt="" class="home-third-img">
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
            </div>
        </section>
        <!-- home end -->


        <section class="service py-5 bg-light">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h1 class="mb-3">Layanan Kami</h1>
                            <p class="text-muted">The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.</p>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-md-4">
                        <div class="card card-inverse text-white">
                            <img class="card-img img-fluid" src="{{ asset('frontend/assets/images/bg-finance-1.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h1 class="card-title text-white">Unexpected benefits: Silver linings in the cloudy future of commerce</h1>

                                <p class="card-text">
                                    <button type="button" class="btn btn-success waves-effect waves-light">
                                        Selengkapnya<span class="btn-label-right"><i class="mdi mdi-arrow-right"></i></span>
                                    </button>
                                </p>
                            </div>
                        </div> <!-- end card-box-->
                    </div>

                    <div class="col-md-4">
                        <div class="card card-inverse text-white">
                            <img class="card-img img-fluid" src="{{ asset('frontend/assets/images/bg-finance-2.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h1 class="card-title text-white">Responding to injustice as one global community</h1>

                                <p class="card-text">
                                    <button type="button" class="btn btn-success waves-effect waves-light">
                                        Selengkapnya<span class="btn-label-right"><i class="mdi mdi-arrow-right"></i></span>
                                    </button>
                                </p>
                            </div>
                        </div> <!-- end card-box-->
                    </div>

                    <div class="col-md-4">
                        <div class="card card-inverse text-white">
                            <img class="card-img img-fluid" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h1 class="card-title text-white">Introducing anti-microbial coating to protect your customers</h1>

                                <p class="card-text">
                                    <button type="button" class="btn btn-success waves-effect waves-light">
                                        Selengkapnya<span class="btn-label-right"><i class="mdi mdi-arrow-right"></i></span>
                                    </button>
                                </p>
                            </div>
                        </div> <!-- end card-box-->
                    </div>
               </div>
            </div>
        </section>

        <section class="solution py-5">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h1 class="mb-3">Explore Our <span class="text-success">Solutions</span></h1>
                            <p class="text-black">We provide the software, hardware and services you need to deliver experiences that delight your customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-12 mb-3">
                    <div class="card-deck-wrapper">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-1.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title">Banking</h2>
                                    <p class="card-text">This is a longer card with supporting text below as
                                        a natural lead-in to additional content. This content is a little
                                        bit longer.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-2.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title">Restaurants</h2>
                                    <p class="card-text">This card has supporting text below as a natural
                                        lead-in to additional content.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title">Department & Specialty Retail</h2>
                                    <p class="card-text">This is a wider card with supporting text below as
                                        a natural lead-in to additional content. This card has even longer
                                        content than the first to show that equal height action.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>

                        </div> <!-- end card-deck-->
                    </div>
                   </div>
                   <div class="col-md-12 mb-3">
                    <div class="card-deck-wrapper">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-1.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title">Grocery & Supermarket</h2>
                                    <p class="card-text">This is a longer card with supporting text below as
                                        a natural lead-in to additional content. This content is a little
                                        bit longer.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-2.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title">Convenience & Fuel Retail</h2>
                                    <p class="card-text">This card has supporting text below as a natural
                                        lead-in to additional content.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title">Telecom & Technology</h2>
                                    <p class="card-text">This is a wider card with supporting text below as
                                        a natural lead-in to additional content. This card has even longer
                                        content than the first to show that equal height action.</p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>

                        </div> <!-- end card-deck-->
                    </div>
                   </div>
                </div>
            </div>
        </section>

        <section class="trusted py-5 bg-dark">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h1 class="mb-2 text-light">Trusted <span class="text-success">By</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('frontend/assets/images/logo/bay-federal-credit-union-logo-200x200.png') }}" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('frontend/assets/images/logo/first-citizens-bank-200x200.png') }}" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('frontend/assets/images/logo/leos-pizzeria-200x200.png') }}" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('frontend/assets/images/logo/logo-chipotle.png') }}" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('frontend/assets/images/logo/logo-coastal-cu.png') }}" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('frontend/assets/images/logo/logo-firehouse.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="berita py-5">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h1 class="mb-2 text-light">Trusted <span class="text-success">By</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card-deck-wrapper">
                            <div class="card-deck">
                                <div class="card rounded-0">
                                    <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-1.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Banking</h4>
                                        <p class="card-text">
                                            <div class="badge badge-soft-secondary rounded-0 p-1"><i class="mdi mdi-clock mr-1"></i>{{ date('D-m-Y') }}</div> <div class="badge badge-soft-secondary mr-1 p-1 rounded-0"><i class="mdi mdi-account-circle-outline mr-1 "></i>Abd. Asis</div>
                                        </p>
                                        <p class="card-text">This is a longer card with supporting text below as
                                            a natural lead-in to additional content.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="card rounded-0">
                                    <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-2.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Restaurants</h4>
                                        <p class="card-text">
                                            <div class="badge badge-soft-secondary rounded-0 p-1"><i class="mdi mdi-clock mr-1"></i>{{ date('D-m-Y') }}</div> <div class="badge badge-soft-secondary mr-1 p-1 rounded-0"><i class="mdi mdi-account-circle-outline mr-1 "></i>Abd. Asis</div>
                                        </p>
                                        <p class="card-text">This card has supporting text below as a natural
                                            lead-in to additional content.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="card rounded-0">
                                    <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Department & Specialty Retail</h4>
                                        <p class="card-text">
                                            <div class="badge badge-soft-secondary rounded-0 p-1"><i class="mdi mdi-clock mr-1"></i>{{ date('D-m-Y') }}</div> <div class="badge badge-soft-secondary mr-1 p-1 rounded-0"><i class="mdi mdi-account-circle-outline mr-1 "></i>Abd. Asis</div>
                                        </p>
                                        <p class="card-text">This is a wider card with supporting text below as
                                            a natural lead-in to additional content.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>

                                <div class="card rounded-0">
                                    <img class="card-img-top img-fluid" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Department & Specialty Retail</h4>
                                        <p class="card-text">
                                            <div class="badge badge-soft-secondary rounded-0 p-1"><i class="mdi mdi-clock mr-1"></i>{{ date('D-m-Y') }}</div> <div class="badge badge-soft-secondary mr-1 p-1 rounded-0"><i class="mdi mdi-account-circle-outline mr-1 "></i>Abd. Asis</div>
                                        </p>
                                        <p class="card-text">This is a wider card with supporting text below as
                                            a natural lead-in to additional content.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>

                            </div> <!-- end card-deck-->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer start -->
        <footer class="bg-dark footer">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-lg-4">
                        <div class="pr-lg-4">
                            <div class="mb-4">
                                <img src="images/logo-light.png" alt="" height="20">
                            </div>
                            <p class="text-white-50">A Responsive Bootstrap 4 Web App Kit</p>
                            <p class="text-white-50">Ubold is a fully featured premium admin template built on top of awesome Bootstrap 4.1.3, modern web technology HTML5, CSS3 and jQuery.</p>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">About</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Home</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Features</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Faq</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Clients</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Social</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Facebook </a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Twitter</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Behance</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Dribble</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">Support</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Help & Support</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer-list">
                            <p class="text-white mb-2 footer-list-title">More Info</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Pricing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>For Marketing</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>For Agencies</a></li>
                                <li><a href="#"><i class="mdi mdi-chevron-right mr-2"></i>Our Apps</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left pull-none">
                            <p class="text-white-50">2015 - 2020 © Ubold. Design by <a href="https://coderthemes.com/" target="_blank" class="text-white-50">Coderthemes</a> </p>
                        </div>
                        <div class="float-right pull-none">
                            <ul class="list-inline social-links">
                                <li class="list-inline-item text-white-50">
                                    Social :
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </footer>
        <!-- footer end -->

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="{{ url('/') }}/frontend/assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/jquery.easing.min.js"></script>
        <script src="{{ url('/') }}/frontend/assets/js/scrollspy.min.js"></script>

        <!-- custom js -->
        <script src="{{ url('/') }}/frontend/assets/js/app.js"></script>
    </body>

</html>
