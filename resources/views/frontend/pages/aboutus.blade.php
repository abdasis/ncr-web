@extends('frontend.layouts.app')


@section('content')
<div class="jumbotron jumbotron-fluid bg-image-contact">
    <div class="container py-5">
      <h1 class="display-4 text-white font-weight-bolder">We turn everyday <br> transactions <br> into meaningful <br> <span class="text-success">relationships</span>.</h1>
    </div>
</div>

<div class="container-fluid mb-5">
    <div class="row">
    <div class="col-md-6">
        <h1 class="text-bold">
            Consumers expect to interact with brands when, where and how they want.
        </h1>
        <p class="font-16">
        At NCR, we know digital has completely changed how brands compete. To differentiate and win more business, having a digital-first mindset is key—even for physical locations—it’s the way to meet consumers in every moment and transform transactions into meaningful interactions.

        Shaping the future for 135 years, NCR is the world’s enterprise technology leader for restaurants, retailers and banks. The #1 global POS software provider for retail and hospitality, and the #1 provider of multi-vendor ATM software, we create software, hardware and services that run the enterprise from back office to the front end and everything in between for our clients.

        Digital first but not digital only, we’re positioned to help our clients bridge their digital and physical operations—helping them connect with consumers anytime, anywhere and streamline their business so they can differentiate, compete and win in our evolving digital world.

        Headquartered in midtown Atlanta, Ga., NCR has over 34,000 employees in 160 countries and solutions distributed in 141 countries.
        </p>
    </div>
    <div class="col-md-6">
        <div class="container">
            <img class="rounded-circle mx-auto d-block" height="400px" width="400px"  src="{{ asset('frontend/assets/images/business.jpg') }}" alt="">
            <h1 class="font-weight-bold">
                “To succeed in business, you need to make others see your vision."
            </h1>
            <p class="font-18 mb-0">Abd. Asis</p>
            <p class="font-18">Founder, 2020</p>
        </div>
    </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid bg-image mb-0">
    <div class="container py-5">
    <h1 class="display-4 text-white text-center">We turn everyday transactions into meaningful relationships.</h1>
    <div class="text-center">
        <button type="button" class="btn btn-success btn-lg rounded-0 waves-effect width-xl waves-light text-center">
            EXPLORE CAREERS<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
        </button>
    </div>
    </div>
</div>
@endsection
