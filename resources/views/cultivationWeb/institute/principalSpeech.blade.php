@extends('cultivationWeb.include')
@section('backTitle')
Principal Speech
@endsection
@section('bodyPart')
 @if(!empty($pSpeech))
            @php
                if(!empty($cultivation)):
                    $insName = $cultivation->institueName;
                else:
                    $insName = "Jahanara-Ayub Academy";
                endif;
            @endphp
        <!-- Start Pages Banner Area -->
        <div class="pages-banner-area " style="min-height: 400px !important;">
            <div class="container-fluid">
                 @if(!empty($principal))
                <div class="row">
                    <div class="col-lg-6 pb-5">
                        <div class="pages-title">
                            <h4 class="text-white">{{ $principal->firstName ." ". $principal->lastName  }}</h4>
                            <ul class="list-unstyled ps-0 mb-0">
                                <li class="d-inline-block">
                                    @if($principal->designation==1) Principal  @elseif($principal->designation==2) Principal(Incharge) @endif<br> {{ $insName }}  <br><br>
                                    {{$pSpeech->importantSpeech}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pages-image">
                            <img  class="w-50 wow bounce animated" data-wow-delay="1s" src="{{ asset('public/upload/image/teacher').'/'.$principal->avatar }}"/>
                        </div>
                    </div>
                </div>
                @endif
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
                            <div class="title my-3">
                                <h2 class="align-items-center" style="margin-bottom: 3rem !important;">
                                    Speech 
                                </h2>
                            </div>
                            <p class=""> {{$pSpeech->generalSpeech}}</p>
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
                            <h2>Hasnat Saimun</h2>
                            <ul class="list-unstyled ps-0 mb-0">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none" href="index.html">
                                        Home
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    BCS
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
                                    Speech
                                </h2>
                                <p>At Hasnat, we believe in providing an exceptional educational experienc that prepares students for success in an ever-changing world. As a leading institution of higher learning,</p>
                                <p>we are committed to fostering a vibrant academic community and empowering our students to reach their full potential.</p>
                            </div>
                            <a class="text-decoration-none arrow-btn" href="university-overview.html">
                                More 
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
