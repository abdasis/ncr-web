@extends('frontend.layouts.app')

@section('content')
     <!-- home start -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('frontend/assets/slider/slider (1).png') }}" class="d-block w-100" alt="...">
            </div>
        <div class="carousel-item">
            <img src="{{ asset('frontend/assets/slider/slider (2).png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('frontend/assets/slider/slider (3).png') }}" class="d-block w-100" alt="...">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- home end -->


    <section class="service py-5 bg-light" >
        <div class="container-fluid">
           <div class="row" style="margin-top: -130px">
                <div class="col-md-4">
                    <div class="card card-about shadow">
                        <div class="card-body">
                            <h3 class="card-title text-center font-weight-bolder">Mission</h3>
                            <div class="card-text text-center">
                                <p class="font-14">To be a high quality strategic partner</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="card card-about shadow">
                        <div class="card-body">
                            <h3 class="card-title text-center font-weight-bolder">Vision</h3>
                            <div class="card-text text-center">
                                <p class="font-14">To be an innovative and efficient services company</p>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="card card-about shadow">
                        <div class="card-body">
                            <h3 class="card-title text-center font-weight-bolder">Values</h3>
                            <div class="card-text text-center">
                                <p class="font-14">Integrity & Continuous Improvement</p>
                            </div>
                        </div>
                   </div>
                </div>
           </div>
           <div class="row">
                <div class="col-md-5">
                    <div class="container">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/features-img/img-2.png') }}" alt="">
                    </div>
                </div>
               <div class="col-md-7 align-self-center">
                    <h1 class="text-black font-weight-lighter">About <span class="text-blue">Us</span></h1>
                    <p class="font-80 font-weight-lighter">
                        Qualita Indonesia is an excellent technical services company in Indonesia.  We provide flexibility and cost-effective approaches of the highest quality process, confidentiality and on time delivery. Qualita Indonesia is now ISO 9001: 2015 certified for services and maintenance of ATM machine by SGS & UKAS Management System
                    </p>
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
                        <div class="card shadow-sm">
                            <img class="card-img-top object-fit" height="150" src="{{ asset('frontend/assets/images/bg-finance-1.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-14 text-center">Technical Service Management</h4>
                            </div>
                        </div>

                        <div class="card shadow-sm">
                            <img class="card-img-top object-fit" height="150" src="{{ asset('frontend/assets/images/bg-finance-2.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-14 text-center">IT Management</h4>

                            </div>
                        </div>

                        <div class="card shadow-sm">
                            <img class="card-img-top object-fit" height="150" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-14 text-center">Project Management</h4>
                            </div>
                        </div>

                        <div class="card shadow-sm">
                            <img class="card-img-top object-fit" height="150" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-14 text-center">Protect Qube</h4>
                            </div>
                        </div>

                        <div class="card shadow-sm">
                            <img class="card-img-top object-fit" height="150" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-14 text-center">QUEST</h4>
                            </div>
                        </div>

                    </div> <!-- end card-deck-->
                </div>
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
                                <img class="card-img-top object-fit" src="{{ asset('frontend/assets/images/bg-finance-1.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-14 text-center">Banking</h4>
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
                                <img class="card-img-top object-fit" src="{{ asset('frontend/assets/images/bg-finance-2.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-14 text-center">Restaurants</h4>
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
                                <img class="card-img-top object-fit" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-14 text-center">Department & Specialty Retail</h4>
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
                                <img class="card-img-top object-fit" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-14 text-center">Department & Specialty Retail</h4>
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

    <section class="peta p-0 m-0">
        <img class="img-fluid" src="{{ asset('frontend/assets/images/peta-cover.png') }}" alt="">
    </section>

@endsection
