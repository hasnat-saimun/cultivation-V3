@extends('cultivationWeb.include')
@section('backTitle')
Dashboard
@endsection
@section('bodyPart')

        @if(!empty($data))
        <!-- Start Pages Banner Area -->
        <div class="pages-banner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pages-title">
                            <h4 class="text-white">{{$data->insHeadline}}</h4>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pages-image">
                            <img  class="w-100 wow fadeIn animated" data-wow-delay="1s" src="{{ asset('/public/upload/image/cultivation/').'/'.$data->heroImg}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-7">
                <img src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/shape/shape-7.png" alt="shape">
            </div>
        </div>
        <!-- End Pages Banner Area -->


        <!-- Start Overview Area -->
        <div class="overview-area pb-75">
            <div class="container mt-5">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="overview-image">
                            <div class="title">
                                <h2 class="d-flex align-items-center">
                                    <img src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/title-shape.svg" alt="title-shape">
                                    About Us 
                                </h2>
                                <p> {{$data->insDetails}}</p>
                            </div>
                            <a class="text-decoration-none arrow-btn" href="university-overview.html">
                                More Information 
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                        <div class="facilities-info">
                            <h3>
                               Establish Date
                            </h3>
                            <p>{{$data->establishDate}}</p>
                        </div>
                        <div class="facilities-info mt-4">
                            <h3>
                                Total Area
                            </h3>
                            <p>{{$data->landSize}}</p>
                        </div>
                    </div>
                </div>
                <div class="row adma-about-content mt-4">
                    <div class="col-lg-12 col-md-12">
                        <div class="adma-about-card">
                            <h3 class="d-flex align-items-center">
                                <i class="flaticon-globe-1"></i>
                                Our Mission
                            </h3>
                            <p> {{$data->mission}}</p>
                            <a class="text-decoration-none arrow-btn" href="university-overview.html">
                                 Overview
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 mt-5">
                        <div class="adma-about-card">
                            <h3 class="d-flex align-items-center">
                                <i class="flaticon-trophy"></i>
                                Our Vision
                            </h3>
                            <p>{{$data->vision}}</p>
                            <a class="text-decoration-none arrow-btn" href="program-details.html">
                                View Our Programs
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Overview Area -->
        @else
         <!-- Start Pages Banner Area -->
        <div class="pages-banner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pages-title">
                            <h2>University Overview</h2>
                            <ul class="list-unstyled ps-0 mb-0">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none" href="index.html">
                                        Home
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    University Overview
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pages-image">
                            
                            <img src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/pages/pages-1.jpg" alt="pages-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-7">
                <img src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/shape/shape-7.png" alt="shape">
            </div>
        </div>
        <!-- End Pages Banner Area -->


        <!-- Start Overview Area -->
        <div class="overview-area pb-75">
            <div class="container mt-5">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="overview-image">
                            <div class="title">
                                <h2 class="d-flex align-items-center">
                                    <img src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/title-shape.svg" alt="title-shape">
                                    About Adma University
                                </h2>
                                <p>At Adma, we believe in providing an exceptional educational experienc that prepares students for success in an ever-changing world. As a leading institution of higher learning,</p>
                                <p>we are committed to fostering a vibrant academic community and empowering our students to reach their full potential.</p>
                            </div>
                            <a class="text-decoration-none arrow-btn" href="university-overview.html">
                                University Overview
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                        <div class="facilities-info">
                            <h3>
                                Best Computer Labs
                            </h3>
                            <p>Computer labs equipped with computers, printers, and software are available for students to work on assignments.</p>
                        </div>
                        <div class="facilities-info mt-4">
                            <h3>
                                Performing Arts Centers
                            </h3>
                            <p>Universities with performing arts programs often have dedicated facilities such as theaters, concert halls, and rehearsal spaces.</p>
                        </div>
                    </div>
                </div>
                <div class="row adma-about-content mt-4">
                    <div class="col-lg-6 col-md-6">
                        <div class="adma-about-card">
                            <h3 class="d-flex align-items-center">
                                <i class="flaticon-globe-1"></i>
                                Our Mission
                            </h3>
                            <p>we strive to provide a transformative and enriching educational user and experience for our students & stay the best facitilies.</p>
                            <a class="text-decoration-none arrow-btn" href="university-overview.html">
                                University Overview
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="adma-about-card">
                            <h3 class="d-flex align-items-center">
                                <i class="flaticon-trophy"></i>
                                Our History
                            </h3>
                            <p>Diversity and inclusivity are integral to our university's ethos. We celebrate the richness of our multicultural.</p>
                            <a class="text-decoration-none arrow-btn" href="program-details.html">
                                View Our Programs
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Overview Area -->
        @endif

@endsection
