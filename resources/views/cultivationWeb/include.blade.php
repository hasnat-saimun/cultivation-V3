<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cultivation | @yield('backTitle')</title>

		<!-- CSS Files -->
        <link rel="stylesheet" href="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/css/scrollCue.css">
        <link rel="stylesheet" href="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/css/remixicon.css">
        <link rel="stylesheet" href="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/css/flaticon.css">
        <link rel="stylesheet" href="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/css/responsive.css">

        <link href="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/favicon.png" type="image/x-icon" rel="icon">
    </head>

    <body>

        <!-- Start Top Header Area -->
        <div class="top-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="top-header-list">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none d-flex align-items-center" href="tel:45993939990">
                                        <i class="flaticon-call"></i>
                                        +459 9393 9990
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    <a class="text-decoration-none d-flex align-items-center" href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#b9d1dcd5d5d6d8ddd4d8f9ded4d8d0d597dad6d4">
                                        <i class="ri-message-line"></i>
                                        <span class="__cf_email__" data-cfemail="87efe2ebebe8e6e3eae6c7e0eae6eeeba9e4e8ea">[email&#160;protected]</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="top-header-social-list text-end">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li class="d-inline-block">
                                    <ul class="list-unstyled ps-0 mb-0 pages-link">
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="faculty.html">Faculty</a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="university-life.html">Community</a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="login.html">Log in</a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="register.html">Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="d-inline-block">
                                    <ul class="list-unstyled ps-0 mb-0 social-link">
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="https://www.facebook.com/" target="_blank">
                                                <i class="flaticon-facebook-app-symbol"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="https://www.pinterest.com/" target="_blank">
                                                <i class="flaticon-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="https://www.instagram.com/" target="_blank">
                                                <i class="flaticon-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="https://twitter.com/" target="_blank">
                                                <i class="flaticon-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area --> 
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img class="black-logo" src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/black-logo.png" alt="black-logo">
                </a>
                <a class="navbar-toggler text-decoration-none" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span> 
                        <span class="bottom-bar"></span>
                    </span>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ route('homePage') }}" class="nav-link {{ request()->routeIs('homePage') ? 'active' : '' }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link {{ request()->routeIs('institutePage') || request()->routeIs('principalSpeechPage') ? 'active' : '' }}">
                                Institute
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('institutePage')}}" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('principalSpeechPage')}}" class=" nav-link">
                                        Principal Speech
                                    </a>
                                </li>                
                                <li class="nav-item">
                                    <a href="register.html" class="nav-link">
                                        Register Now
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">
                                        Log In Now
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="application.html" class="nav-link">
                                        Application Form
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faculty.html" class="nav-link">
                                        Faculty
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="guidance-support.html" class="nav-link">
                                        Support & Guidance
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Admissions
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="apply.html" class="nav-link">
                                        How To Apply
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="tuition-fees.html" class="nav-link">
                                        Tuition & Fees
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Academics
                            </a>
                            <ul class="dropdown-menu">
                                    <li class="nav-item ">
                                    <a href="programs.html" class="nav-link">
                                        All Programs
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="program-details.html" class="nav-link">
                                        Program Details
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="events.html" class="nav-link">
                                        All Events
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="event-details.html" class="nav-link">
                                        Event Details
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Health Care
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item ">
                                    <a href="fitness-athletics.html" class="nav-link">
                                        Fitness & Athletics
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Student Life
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item ">
                                    <a href="university-life.html" class="nav-link">
                                        University Life
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">
                                Contact <span>Us</span>
                            </a>
                        </li>
                    </ul>
                    <div class="others-option">
                        <div class="d-flex align-items-center">
                            <div class="option-item">
                                <form class="search-form">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Search Programs">
                                        <button type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </form>
                                <button type="button" class="search-btn d-none bg-transparent border-0 lh-1 p-0 position-relative" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="flaticon-search-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar Area -->

        <!-- Start Search Modal -->
        <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="position-relative">
                        <input type="text" class="input-search d-block w-100 bg-transparent" placeholder="Search here....">
                        <button type="submit" class="border-0 p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_12_4315)">
                                    <path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.867 18 18 14.867 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18ZM19.485 18.071L22.314 20.899L20.899 22.314L18.071 19.485L19.485 18.071Z" fill="white"/>
                                </g>
                            </svg>
                        </button>
                    </form>
                    <button type="button" class="btn-close rounded-0 p-0 w-auto h-auto" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Search Modal -->
        
        <!-- Start Responsive Navbar Area -->
        <div class="responsive-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a href="index.html" class="logo d-inline-block">
                    <img src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/white-logo.png" alt="logo">
                </a>
                <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ri-close-fill"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="responsive-menu">

                    <li class="responsive-menu-list active"><a href="javascript:void(0);">Home</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">
                                    Home Demo - One
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index-2.html" class="nav-link">
                                    Home Demo - Two
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index-3.html" class="nav-link">
                                    Home Demo - Three
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="responsive-menu-list"><a href="javascript:void(0);">Pages</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item">
                                <a href="university-overview.html" class="nav-link">
                                    University Overview
                                </a>
                            </li>
                            <li class="responsive-menu-list"><a href="javascript:void(0);">Blog</a> 
                                <ul class="responsive-menu-items">
                                    <li class="nav-item">
                                        <a href="blog-style-one.html" class="nav-link">
                                            Blog & News 01
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-style-two.html" class="nav-link">
                                            Blog & News 02
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">
                                            Blog Details
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="register.html" class="nav-link">
                                    Register Now
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="login.html" class="nav-link">
                                    Log In Now
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="application.html" class="nav-link">
                                    Application Form
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="faculty.html" class="nav-link">
                                    Faculty
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="privacy-policy.html" class="nav-link">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="terms-conditions.html" class="nav-link">
                                    Terms & Conditions
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list"><a href="javascript:void(0);">Admissions</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item">
                                <a href="apply.html" class="nav-link">
                                    How To Apply
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="tuition-fees.html" class="nav-link">
                                    Tuition & Fees
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list"><a href="javascript:void(0);">Academics</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item ">
                                <a href="programs.html" class="nav-link">
                                    All Programs
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="program-details.html" class="nav-link">
                                    Program Details
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="events.html" class="nav-link">
                                    All Events
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="event-details.html" class="nav-link">
                                    Event Details
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list"><a href="javascript:void(0);">Health Care</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item ">
                                <a href="fitness-athletics.html" class="nav-link">
                                    Fitness & Athletics
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list"><a href="javascript:void(0);">Student Life</a>
                        <ul class="responsive-menu-items">
                            <li class="nav-item ">
                                <a href="university-life.html" class="nav-link">
                                    University Life
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="responsive-menu-list without-icon">
                        <a href="contact.html" class="nav-link">
                            Contact <span>Us</span>
                        </a>
                    </li>
                </ul>

                <div class="others-option d-md-flex align-items-center">
                    <div class="option-item">
                        <form class="search-form">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Search Programs">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Responsive Navbar Area -->
        @yield('bodyPart')
        <!-- Start Footer Area -->
        <div class="footer-area pt-100 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row" data-cues="slideInUp">
                            <div class="col-lg-8 col-sm-8">
                                <div class="single-footer-widget about">
                                    <h3>About Adma</h3>
                                    <p>We are a Top 06 Canadian university and one of the Top 20 in the world. Find out which that make our student.</p>
                                    <h6>Follow Adma:</h6>
                                    <ul class="list-unstyled ps-0 mb-0 social-link">
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="https://www.facebook.com/" target="_blank">
                                                <i class="flaticon-facebook-app-symbol"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="https://www.pinterest.com/" target="_blank">
                                                <i class="flaticon-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="https://www.instagram.com/" target="_blank">
                                                <i class="flaticon-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline-block">
                                            <a class="text-decoration-none" href="https://twitter.com/" target="_blank">
                                                <i class="flaticon-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3>Academics</h3>
                                    <ul class="list-unstyled ps-0 mb-0">
                                        <li>
                                            <a class="text-decoration-none" href="program-details.html">Undergraduates</a>
                                        </li>
                                        <li>
                                            <a class="text-decoration-none" href="university-overview.html">University Overview</a>
                                        </li>
                                        <li>
                                            <a class="text-decoration-none" href="blog-style-one.html">Online Education</a>
                                        </li>
                                        <li>
                                            <a class="text-decoration-none" href="apply.html">How To Apply</a>
                                        </li>
                                        <li>
                                            <a class="text-decoration-none" href="university-life.html">Graduates</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row" data-cues="slideInUp">
                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="single-footer-widget quick">
                                    <h3>Quick Links</h3>
                                    <ul class="list-unstyled ps-0 mb-0">
                                        <li>
                                            <a class="text-decoration-none" href="university-life.html">Student Activities</a>
                                        </li>

                                        <li>
                                            <a class="text-decoration-none" href="application.html">Apply From</a>
                                        </li>

                                        <li>
                                            <a class="text-decoration-none" href="events.html">Schedule A Tour</a>
                                        </li>

                                        <li>
                                            <a class="text-decoration-none" href="blog-style-two.html">News & Blog</a>
                                        </li>
                                        
                                        <li>
                                            <a class="text-decoration-none" href="university-overview.html">About Adma</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="single-footer-widget contact">
                                    <h3>Contact Us</h3>
                                    <ul class="list-unstyled ps-0 mb-0">
                                        <li>
                                            <a class="text-decoration-none" href="tel:45993939990">
                                                +459 9393 9990
                                                <i class="ri-phone-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-decoration-none" href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#d9b1bcb5b5b6b8bdb4b899beb4b8b0b5f7bab6b4">
                                                <span class="__cf_email__" data-cfemail="6008050c0c0f01040d0120070d01090c4e030f0d">[email&#160;protected]</span>
                                                <i class="ri-message-line"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="text-decoration-none" href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#68000d040407090c0509280f05090104460b0705">
                                                <span class="__cf_email__" data-cfemail="b8d9dcd5d9f8dfd5d9d1d496dbd7d5">[email&#160;protected]</span>
                                                <i class="ri-message-line"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <i class="flaticon-placeholder"></i>
                                            <p>3001810 Campus Way IUTothell WA 98011-8246</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="single-footer-widget mobile">
                                    <h3>Mobile App</h3>
                                    <ul class="list-unstyled ps-0 mb-0">
                                        <li>
                                            <a class="text-decoration-none" href="https://play.google.com/" target="_blank">
                                                <img src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/footer/footer-1.svg" alt="footer-svg">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-decoration-none" href="https://www.apple.com/">
                                                <img src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/footer/footer-2.svg" alt="footer-svg">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- End Footer Area -->

        <!-- Start Copyright Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center" data-cues="slideInUp">
                    <div class="col-lg-2 col-sm-12">
                        <div class="copyright-logo">
                            <a class="text-decoration-none" href="index.html">
                                <img src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/img/black-logo.png" alt="black-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="copyright-title text-end">
                            <p>© <strong>Virtual IT Professional</strong> is Proudly Owned</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="copyright-list text-end">
                            <ul class="list-unstyled ps-0 mb-0">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none" href="university-life.html">Students</a>
                                </li>
                                <li class="d-inline-block">
                                    <a class="text-decoration-none" href="faculty.html">Faculty</a>
                                </li>
                                <li class="d-inline-block">
                                    <a class="text-decoration-none" href="university-overview.html">Research</a>
                                </li>
                                <li class="d-inline-block">
                                    <a class="text-decoration-none" href="university-life.html">Community</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->

        <!-- Back to Top -->
        <button type="button" id="back-to-top">
            <i class="ri-arrow-up-double-fill"></i>
        </button>
        <!-- End Back to Top -->

        <!-- Js Files -->
        <script data-cfasync="false" src="{{asset('/public/cultivationweb/templates/cdn-cgi/')}}/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/js/swiper-bundle.min.js"></script>
        <script src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/js/fslightbox.js"></script>
        <script src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/js/scrollCue.min.js"></script>
        <script src="{{asset('/public/cultivationweb/templates/adma/default/assets/')}}/js/custom.js"></script>
    </body>
</html>