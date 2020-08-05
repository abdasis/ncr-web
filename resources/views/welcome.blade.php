@extends('frontend.layouts.app')

@section('content')
     <!-- home start -->
    <section class="slider">
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
    </section>
    <!-- home end -->


    <section class="service py-5 bg-light" >
        <div class="container-fluid">
           <div class="row">
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
                        <h1 class="mb-3">Explore Our <span class="text-blue">Solutions</span></h1>
                        <p class="text-black">We provide the software, hardware and services you need to deliver experiences that delight your customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md-12 mb-3">
                <div class="card-deck-wrapper">
                    <div class="card-deck">
                        <div class="card shadow-sm solution" id="itTechnical" aria-haspopup="true" aria-expanded="true">
                            <img class="card-img-top object-fit" height="150" src="{{ asset('frontend/assets/images/bg-finance-1.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-17 font-weight-bolder text-center">Technical Service Management</h4>
                                <div class="dropdown-menu bg-white border-0 rounded-0 shadow-none" id="itTechnicalDesc">
                                    <div class="container text-center">
                                        Field Services, Technical Support, Help Desk & Monitoring
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card shadow-sm solution" id="itManagement">
                            <img class="card-img-top object-fit" height="150" src="{{ asset('frontend/assets/images/bg-finance-2.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-17 font-weight-bolder text-center">IT Management</h4>
                                <div class="dropdown-menu bg-white border-0 rounded-0 shadow-none" id="itManagementDesc">
                                    <div class="container text-center" >
                                        Software Consultation & Development, Quality assurance, IT Technical Support, Website Development
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm solution" id="projectManagement">
                            <img class="card-img-top object-fit" height="150" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-17 font-weight-bolder text-center">Project Management</h4>
                                <div class="dropdown-menu bg-white border-0 rounded-0 shadow-none" id="projectManagementDesc">
                                    <div class="container text-center">
                                        PM Consultation, PM Support & Administration
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm solution" id="protectQube">
                            <img class="card-img-top object-fit" height="150" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-17 font-weight-bolder text-center">Protect Qube</h4>
                                <div class="dropdown-menu bg-white border-0 rounded-0 shadow-none" id="protectQubeDesc">
                                    <div class="container text-center">
                                        Our IOT Security System
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm solution" id="quest">
                            <img class="card-img-top object-fit" id="quest" height="150" src="{{ asset('frontend/assets/images/bg-finance-4.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title font-17 font-weight-bolder text-center">QUEST</h4>
                                <div class="dropdown-menu bg-white border-0 rounded-0 shadow-none" id="questDesc">
                                    <div class="container text-center">
                                        Our monitoring application
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-deck-->
                </div>
               </div>
            </div>
        </div>
    </section>


    <section class="peta p-0 m-0">
       <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center pb-1">
                        <h1>SERVICE <span class="text-blue">LOCATION</span></h1>
                        <p class="text-black">We provide more than 135 service locations throughout Indonesia for the best service to our customers.
                        </p>
                    </div>
                </div>
            </div>
       </div>
        <img class="img-fluid" src="{{ asset('frontend/assets/images/peta-cover.png') }}" alt="">
    </section>


    <section>
        <div class="jumbotron jumbotron-fluid bg-image mb-0">
            <div class="container py-5">
            <h1 class="display-4 font-24 font-weight-bolder text-white text-center">CAREER</h1>
            <p class="font-18 text-center p-0 m-0 text-white"> Recruitment vacancy : </p>
            <p class="font-18 text-center p-0 m-0 text-white">E mail : career @qualita-indonesia.com </p>
            <div class="text-center mt-3">
                <button type="button" class="btn btn-success btn-lg rounded-0 waves-effect width-xl waves-light text-center">
                    EXPLORE CAREERS<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                </button>
            </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Berlangganan Sekarang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <img src="{{ asset('frontend/assets/slider/slider (1).png') }}" class="w-100">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-blue">Ok, Berlangganan</button>
            </div>
        </div>
        </div>
    </div>

@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#itTechnical').click(function(){
            $('#itTechnicalDesc').toggle()
        })

        $('#itManagement').click(function(){
            $('#itManagementDesc').toggle()
        })

        $('#projectManagement').click(function(){
            $('#projectManagementDesc').toggle()
        })
        $('#protectQube').click(function(){
            $('#protectQubeDesc').toggle()
        })
        $('#quest').click(function(){
            $('#questDesc').toggle()
        })
    })

</script>
@endsection
