<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>

<div class="page-wrapper">

    <div class="preloader"></div>

    <!-- Main Header -->
    <header class="main-header header-style-two">

        <!-- Header Upper -->
        <div class="header-upper">
            <!--Logo-->
            <div class="logo-box">
                <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/random.jpg') }}" alt=""></a></div>
            </div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="{{ route('index') }}">Home</a>
                                            <ul>
                                                <li><a href="{{ route('index') }}">Home One</a></li>
                                                <li><a href="{{ route('index2') }}">Home Two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="{{ route('services') }}">Services</a></li>
                                                <li><a href="{{ route('servicesTwo') }}">Services Two</a></li>
                                                <li><a href="{{ route('serviceDetails') }}">Service Details</a></li>
                                                <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                                <li><a href="{{ route('history') }}">History</a></li>
                                                <li><a href="{{ route('faq') }}">FAQ’s</a></li>
                                                <li><a href="{{ route('pageError') }}">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Portfolio</a>
                                            <ul>
                                                <li><a href="{{ route('portfolio1') }}">Portfolio Grid</a></li>
                                                <li><a href="{{ route('portfolio2') }}">Portfolio List</a></li>
                                                <li><a href="{{ route('portfolio3') }}">Portfolio Standard</a></li>
                                                <li><a href="{{ route('portfolioDetails') }}">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">News</a>
                                            <ul>
                                                <li><a href="{{ route('blog') }}">News</a></li>
                                                <li><a href="{{ route('blogDetails') }}">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-right-info">
                <form class="search-form">
                    <i class="fal fa-search"></i>
                    <input type="search" placeholder="Search with keyword">
                </form>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/random.jpg') }}" alt=""></a></div>
                </div>
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="{{ asset('assets/images/icons/icon-bar-2.png') }}" alt=""></div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-right-info">
                    <form class="search-form">
                        <i class="fal fa-search"></i>
                        <input type="search" placeholder="Search with keyword">
                    </form>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon icon_close_alt2"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/random.jpg') }}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->

    <!-- Hidden Sidebar -->
    <x-sidebar/>

    <!--Search Popup-->
    <x-searchPopup/>

    <!-- Bnner Section -->
    <section class="banner-section style-two">
        <div class="swiper-container banner-slider-two">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/main-slider/image-3.jpg') }}')">
                    <div class="grid-line">
                        <span class="line-one"></span>
                        <span class="line-two"></span>
                    </div>
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h4>Rennovate with good plan</h4>
                                <h1>Arcix <br> <span>Architecture</span></h1>
                                <div class="link-box">
                                    <a href="{{ route('contact') }}" class="theme-btn"><span>Get a Quote</span></a>
                                    <a href="{{ route('about') }}" class="theme-btn style-two"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/main-slider/image-2.jpg') }}')">
                    <div class="grid-line">
                        <span class="line-one"></span>
                        <span class="line-two"></span>
                    </div>
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h4>Rennovate with good plan</h4>
                                <h1>Arcix <br> <span>Architecture</span></h1>
                                <div class="link-box">
                                    <a href="{{ route('contact') }}" class="theme-btn"><span>Get a Quote</span></a>
                                    <a href="{{ route('about') }}" class="theme-btn style-two"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/main-slider/image-3.jpg') }}')">
                    <div class="grid-line">
                        <span class="line-one"></span>
                        <span class="line-two"></span>
                    </div>
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h4>Rennovate with good plan</h4>
                                <h1>Arcix <br> <span>Architecture</span></h1>
                                <div class="link-box">
                                    <a href="{{ route('contact') }}" class="theme-btn"><span>Get a Quote</span></a>
                                    <a href="{{ route('about') }}" class="theme-btn style-two"><span>Learn More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-container custom-pager">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide">
                    <div class="content-two">
                        <p>Rising star</p>
                        <h5>Deluxe Luxury Home</h5>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide">
                    <div class="content-two">
                        <p>Rising star</p>
                        <h5>Mixlix Houngsi Table</h5>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide">
                    <div class="content-two">
                        <p>Rising star</p>
                        <h5>Kilivili Interior Design</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-pagination"></div>
    </section>
    <!-- End Bnner Section -->

    <!-- About Section two -->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="image"><img src="{{ asset('assets/images/resource/image-8.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="image-two" data-parallax='{"y": 100}'>
                                    <img src="{{ asset('assets/images/resource/image-9.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="author-info" data-parallax='{"x": -40}'>
                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt=""></div>
                            <div class="text">Founded by Robert Downey Jr in 2k4 <br> we’re an employee-owned firm pursuing <br> a democratic design process that values <br> everyone’s input.</div>
                            <div class="author-wrapper">
                                <div class="thumb"><img src="{{ asset('assets/images/resource/author-1.jpg') }}" alt=""></div>
                                <h4>Biranda H. Halim</h4>
                                <div class="designation">Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <div class="sec-title mb-20">
                            <div class="sub-title"><span>01.</span> About Us</div>
                            <h2>We bring idea from <br> sketch to life</h2>
                        </div>
                        <div class="text-two">Even if you don’t have a ready sketch of what you want <br> we will help you to get the result you dreamed of.</div>
                        <div class="text">The basic philosophy of our studio is to create individual, aesthetically stunning solutions for our customers by lightning-fast development of projects employing unique styles and architecture.</div>
                        <div class="sign"><img src="{{ asset('assets/images/resource/sign.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission -->
    <section class="mission-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec-title light mb-40">
                        <div class="sub-title"><span>02.</span> Approach</div>
                        <h2>Our expert <br>
                            approach helps <br>
                            deliver stunning <br>
                            result give.
                        </h2>
                    </div>
                    <div class="link-btn"><a class="theme-btn style-two" href="{{ route('portfolio1') }}"><span>Our Works</span></a></div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="count">01</div>
                                <h4>Our Mission & Vision</h4>
                                <div class="text">The basic philosophy of our studio is <br> to create individual, aesthetically  <br> stunning  solutions for our customers.</div>
                                <a href="{{ route('about') }}" class="read-more-link">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="count">02</div>
                                <h4>Company Approch</h4>
                                <div class="text">The basic philosophy of our studio is <br> to create individual, aesthetically  <br> stunning  solutions for our customers.</div>
                                <a href="{{ route('about') }}" class="read-more-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services section two -->
    <div class="services-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title"><span>03</span> Services</div>
                <h2>What We Do Here</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6 service-block-two">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon">
                            <i class="flaticon-blueprint-4"></i>
                        </div>
                        <h4><a href="{{ route('serviceDetails') }}">Architecture Design</a></h4>
                        <div class="text">The basic philosophy of our studio is <br>
                            to create individual, aesthetically stunning <br>
                            solutions for our customers.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block-two">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon">
                            <i class="flaticon-ruler"></i>
                        </div>
                        <h4><a href="{{ route('serviceDetails') }}">Interior Design</a></h4>
                        <div class="text">The basic philosophy of our studio is <br>
                            to create individual, aesthetically stunning <br>
                            solutions for our customers.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block-two">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon">
                            <i class="flaticon-scale"></i>
                        </div>
                        <h4><a href="{{ route('serviceDetails') }}">Home Plannings</a></h4>
                        <div class="text">The basic philosophy of our studio is <br>
                            to create individual, aesthetically stunning <br>
                            solutions for our customers.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block-two">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon">
                            <i class="flaticon-tools"></i>
                        </div>
                        <h4><a href="{{ route('serviceDetails') }}">Commertial Design</a></h4>
                        <div class="text">The basic philosophy of our studio is <br>
                            to create individual, aesthetically stunning <br>
                            solutions for our customers.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block-two">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon">
                            <i class="flaticon-blueprint-2"></i>
                        </div>
                        <h4><a href="{{ route('serviceDetails') }}">Game Station Design</a></h4>
                        <div class="text">The basic philosophy of our studio is <br>
                            to create individual, aesthetically stunning <br>
                            solutions for our customers.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block-two">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon">
                            <i class="flaticon-drill-1"></i>
                        </div>
                        <h4><a href="{{ route('serviceDetails') }}">Interior Consulting</a></h4>
                        <div class="text">The basic philosophy of our studio is <br>
                            to create individual, aesthetically stunning <br>
                            solutions for our customers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video section -->
    <section class="video-section" style="background-image: url('{{ asset('assets/images/background/bg-5.jpg') }}')">
        <div class="auto-container">
            <div class="video-box">
                <div class="video-btn"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link play-now ripple" data-fancybox="gallery" data-caption=""><i class="fas fa-play"></i></a></div>
            </div>
        </div>
        <div class="cta-content">
            <div class="left-column">
                <div class="image"><img src="{{ asset('assets/images/resource/image-21.jpg') }}" alt=""></div>
                <h5>More discussion with us</h5>
                <h2>It’s must inspire you more.</h2>
            </div>
            <div class="right-column">
                <div class="link-btn"><a href="#" class="theme-btn"><span>Get a Quote</span></a></div>
            </div>
        </div>
    </section>

    <!-- Projects Section Two -->
    <section class="projects-section-two">
        <div class="outer-box side-container">
            <div class="outer-container">
                <!--Project Tabs-->
                <div class="project-tab">

                    <div class="tab-btns-box">
                        <!--Tabs Header-->
                        <div class="tabs-header">
                            <ul class="project-tab-btns">
                                <li class="p-tab-btn" data-tab="#p-tab-1">All Works</li>
                                <li class="p-tab-btn active-btn" data-tab="#p-tab-2">Architecture</li>
                                <li class="p-tab-btn" data-tab="#p-tab-3">Interior Design</li>
                                <li class="p-tab-btn" data-tab="#p-tab-4">Station Design</li>
                                <li class="p-tab-btn" data-tab="#p-tab-5">Others</li>
                            </ul>
                        </div>
                    </div>
                    <!--Tabs Content-->
                    <div class="p-tabs-content">
                        <!--Project Tab / Active Tab-->
                        <div class="p-tab" id="p-tab-1">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-10.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-11.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-12.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Tab-->
                        <div class="p-tab active-tab" id="p-tab-2">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-10.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-11.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-12.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Tab-->
                        <div class="p-tab" id="p-tab-3">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-10.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-11.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-12.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Tab-->
                        <div class="p-tab" id="p-tab-4">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-10.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-11.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-12.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project Tab-->
                        <div class="p-tab" id="p-tab-5">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-10.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-11.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/image-12.jpg') }}" alt="">
                                            <div class="link-btn"><a href="#"><i class="fal fa-long-arrow-right"></i></a></div>
                                        </div>
                                        <div class="content">
                                            <ul class="category">
                                                <li>Interior</li>
                                                <li>Architecture</li>
                                            </ul>
                                            <h4><a href="{{ route('portfolioDetails') }}">Industrial and <br> Aerospace</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title"><span>04</span> Testimonials</div>
                <h2>Client Feedbacks</h2>
            </div>
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="author-info">
                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt=""></div>
                            <div class="rating">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="far fa-star"></span>
                            </div>
                            <div class="text">Founded by Robert Downey Jr in 2k4
                                an employee-owned firm pursuing a
                                democratic design process that
                                values everyone’s input.</div>
                            <div class="author-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/resource/author-2.jpg') }}" alt="">
                                </div>
                                <h4>Biranda H. Halim</h4>
                                <div class="designation">Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="author-info">
                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt=""></div>
                            <div class="rating">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="far fa-star"></span>
                            </div>
                            <div class="text">Founded by Robert Downey Jr in 2k4
                                an employee-owned firm pursuing a
                                democratic design process that
                                values everyone’s input.</div>
                            <div class="author-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/resource/author-1.jpg') }}" alt="">
                                </div>
                                <h4>Mark William</h4>
                                <div class="designation">Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="author-info">
                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-7.png') }}" alt=""></div>
                            <div class="rating">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="far fa-star"></span>
                            </div>
                            <div class="text">Founded by Robert Downey Jr in 2k4
                                an employee-owned firm pursuing a
                                democratic design process that
                                values everyone’s input.</div>
                            <div class="author-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/resource/author-3.jpg') }}" alt="">
                                </div>
                                <h4>John Smith</h4>
                                <div class="designation">Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq section -->
    <section class="faq-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="right-column mr-lg-80">
                        <div class="sec-title light">
                            <div class="sub-title"><span>05.</span> Faq</div>
                            <h2>Get every answers <br> from here.</h2>
                        </div>
                        <ul class="accordion-box">
                            <!--Accordion Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How to customized this kind theme?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">During the bachelor's degree program, an architecture student can expect  to take courses in a variety of concentrations, including: Architectural Design History and Theory. Building design with a focus on CADD
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Accordion Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can i make refund?</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">During the bachelor's degree program, an architecture student can expect  to take courses in a variety of concentrations, including: Architectural Design History and Theory. Building design with a focus on CADD
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Accordion Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can I hire you in easy way?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">During the bachelor's degree program, an architecture student can expect  to take courses in a variety of concentrations, including: Architectural Design History and Theory. Building design with a focus on CADD
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!--Accordion Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>What is terms & conditions?</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">During the bachelor's degree program, an architecture student can expect  to take courses in a variety of concentrations, including: Architectural Design History and Theory. Building design with a focus on CADD
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- End Block -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <img src="{{ asset('assets/images/resource/image-1.png') }}" alt="">
                        <div class="pointer one">
                            <div class="text">Architectural Design History and Theory</div>
                            <div class="icon"><i class="fal fa-plus"></i></div>
                        </div>
                        <div class="pointer two">
                            <div class="text">Architectural Design History and Theory</div>
                            <div class="icon"><i class="fal fa-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact info section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">
                            <span>06.</span> Contact
                        </div>
                        <h2>Get In touch</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-block">
                                <h5>Email</h5>
                                <h2><a href="mailto:admin@contact.com">admin@contact.com</a></h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-block">
                                <h5>phone</h5>
                                <h2><a href="tel:+98(5)87987689">+98 (5) 879 876 89</a></h2>
                            </div>
                        </div>
                        <div class="separator"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text">Mon - Fri: 10:00AM - 06:00PM <br> Sunday: <span>Holiday</span></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text">12/A, Miranda Hilix Tower Hall <br> New York, US</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-map mb-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd" width="600" height="480" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors section -->
    <section class="sponsors-section style-two pt-0">
        <div class="auto-container">
            <div class="outer-box">
                <div class="wrapper-box">
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-1.png') }}" alt=""></div>
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-2.png') }}" alt=""></div>
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-3.png') }}" alt=""></div>
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-4.png') }}" alt=""></div>
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-5.png') }}" alt=""></div>
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-6.png') }}" alt=""></div>
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-7.png') }}" alt=""></div>
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-8.png') }}" alt=""></div>
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-9.png') }}" alt=""></div>
                    <div class="image"><img src="{{ asset('assets/images/clients-logo/logo-10.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!--Main Footer-->
    {{--<footer class="main-footer style-two">
        <div class="upper-box">
            <div class="auto-container">
                <div class="grid-line">
                    <span class="line-one"></span>
                    <span class="line-two"></span>
                </div>
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row">

                        <!--Column-->
                        <div class="column col-lg-2 col-md-6">
                            <div class="widget contact-widget">
                                <h3 class="widget-title">Get In Touch</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="mailto:info@webexample.com">info@webexample.com</a></li>
                                        <li><a href="tel:90809809809">908 098 098 09</a></li>
                                        <li>12/A, Mixlix City Hall, NYC</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-3 col-md-6">
                            <div class="widget links-widget ml-lg-60 mr-lg-40">
                                <h3 class="widget-title">More Pages</h3>
                                <div class="widget-content">
                                    <div class="row no-gutters">
                                        <div class="col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="#">Privacy</a></li>
                                                <li><a href="#">Our Team</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li><a href="#">Refund Policy</a></li>
                                                <li><a href="#">Our Product</a></li>
                                                <li><a href="#">Insights</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-4 col-md-6">
                            <div class="widget news-widget">
                                <h3 class="widget-title">News Insights</h3>
                                <div class="news-content">
                                    <div class="single-post">
                                        <div class="image"><img src="{{ asset('assets/images/resource/image-13.jpg') }}" alt=""></div>
                                        <div class="post-meta">By Hilix H. Hexer</div>
                                        <h4><a href="{{ route('blogDetails') }}">Consult with customers not</a></h4>
                                    </div>
                                    <div class="single-post">
                                        <div class="image"><img src="{{ asset('assets/images/resource/image-14.jpg') }}" alt=""></div>
                                        <div class="post-meta">By Hilix H. Hexer</div>
                                        <h4><a href="{{ route('blogDetails') }}">Consult with customers not</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-3 col-md-6">
                            <div class="widget instagram-widget ml-lg-30">
                                <h3 class="widget-title">Instagram Feeds</h3>
                                <div class="wrapper-box">
                                    <div class="image"><a href="assets/images/resource/image-15.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/image-15.jpg') }}" alt=""></a></div>
                                    <div class="image"><a href="assets/images/resource/image-16.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/image-16.jpg') }}" alt=""></a></div>
                                    <div class="image"><a href="assets/images/resource/image-17.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/image-17.jpg') }}" alt=""></a></div>
                                    <div class="image"><a href="assets/images/resource/image-18.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/image-18.jpg') }}" alt=""></a></div>
                                    <div class="image"><a href="assets/images/resource/image-19.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/image-19.jpg') }}" alt=""></a></div>
                                    <div class="image"><a href="assets/images/resource/image-20.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/image-20.jpg') }}" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="grid-line">
                    <span class="line-one"></span>
                    <span class="line-two"></span>
                </div>
                <div class="outer-box">
                    <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/random.jpg') }}" alt=""></a></div>
                    <div class="text">Copyright & design by@<a href="#">Example</a>  - 2025</div>
                    <ul class="social-links">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-behance"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
					</ul>
                </div>
            </div>
        </div>
    </footer>--}}
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<x-script/>

</body>
</html>
