<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>

<div class="page-wrapper">

    <div class="preloader"></div>

    <!-- Main Header -->
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/random.jpg') }}" alt=""></a></div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="{{ asset('assets/images/icons/icon-bar-2.png') }}" alt=""></div>
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="{{ Route::currentRouteName() === 'index' ? 'active' : '' }}">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() === 'portfolio2' ? 'active' : '' }}">
                                            <a href="{{ route('portfolio2') }}">Portfolio</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <style>
                                /* Active menu item color */
                                .navigation li.active > a {
                                    color: #7BAEDD !important;
                                    font-weight: 600;
                                }
                            </style>


                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-right-info">
                <div class="sidemenu-nav-toggler"><i class="flaticon-menu"></i></div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/random.jpg') }}" alt=""></a></div>
                        </div>
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
                    <div class="sidemenu-nav-toggler"><i class="flaticon-menu"></i></div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon icon_close_alt2"></span></div>

            <nav class="menu-box">
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->

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
    <section class="banner-section">
        <div class="swiper-container banner-slider" data-arrow="visible-desktop">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/ARHITEKTURA/00.jpg') }}')">
                    <div class="content-outer">

                        <div class="content-box">
                            <div class="inner">
                                <h1>Engineering Group Global</h1>
                                <h2>We make it possible</h2>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="section-gap"></div>
    <!-- End Bnner Section -->
    <section class="projects-section" style="background-image: url('{{ asset('assets/images/background/img_1.png') }}')">
        <div class="auto-container">
            <div class="theme_carousel owl-theme owl-carousel" data-options='{
            "loop": true,
            "center": false,
            "margin": 0,
            "autoheight": true,
            "lazyLoad": true,
            "nav": true,
            "dots": true,
            "autoplay": true,
            "autoplayTimeout": 6000,
            "smartSpeed": 1000,
            "responsive": {
                "0": { "items": 1 },
                "480": { "items": 1 },
                "600": { "items": 2 },
                "768": { "items": 2 },
                "992": { "items": 3 },
                "1200": { "items": 3 }
            }
        }'>

                @php
                    $architectureImages = [
                        '01_01.png','01_02.png','01_03.png','01_04.png','01_05.png','01_06.png','01_07.png','01_08.png','01_09.png','01_10.png','01_11.png','01_12.png',
                        '02_01.png','02_02.png','02_03.png','02_04.png','02_05.png','02_06.png','02_07.png','02_08.png','02_09.png','02_10.png','02_11.png',
                        '03_01.png','03_02.png','03_03.png','03_04.png','03_05.png','03_06.png','03_07.png','03_08.png','03_09.png','03_10.png','03_11.png','03_12.png','03_13.png',
                        '04_01.png','04_02.png','04_03.png','04_04.png','04_05.png','04_06.png','04_07.png','04_08.png','04_09.png','04_10.png','04_11.png','04_12.png','04_13.png',
                        '05_01.png','05_02.png','05_03.png','05_04.png','05_05.png','05_06.png','06_01.png','06_02.png','06_03.png','06_04.png','06_05.png','06_06.png','06_07.png','06_08.png','06_09.png','07_01.jpg','07_02.jpg','07_03.jpg'
                    ];
                    $placeholder = asset('assets/images/ARHITEKTURA/placeholder.png');
                @endphp

                @foreach($architectureImages as $img)
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="project-content">
                                <div class="category">Architecture</div>
                                <div class="image-wrapper" style="
                                width: 100%;
                                height: 100%;
                                background-image: url('{{ $placeholder }}');
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;">
                                    <img
                                        class="project-image owl-lazy"
                                        data-src="{{ asset('assets/images/ARHITEKTURA/' . $img) }}"
                                        alt="STA JE NA SLICI {{ $loop->iteration }}"
                                        style="width:100%; height:100%; object-fit: cover;"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="grid-line">
            <span class="line-one"></span>
            <span class="line-two"></span>
        </div>
    </section>
    <div class="section-gap"></div>



    <section class="projects2-section" style="background-color: #7BAEDD;">
        <div class="auto-container">
            <div class="theme_carousel owl-theme owl-carousel" data-options='{
            "loop": true,
            "center": false,
            "margin": 0,
            "autoheight": true,
            "lazyLoad": true,
            "nav": true,
            "dots": true,
            "autoplay": true,
            "autoplayTimeout": 6000,
            "smartSpeed": 1000,
            "responsive": {
                "0": { "items": 1 },
                "480": { "items": 1 },
                "600": { "items": 2 },
                "768": { "items": 2 },
                "992": { "items": 3 },
                "1200": { "items": 3 }
            }
        }'>

                @php
                    $projectImages = [
                        '01_01.png','02_01.bmp','03_01.bmp','04_01.bmp','05_01.png','06_01.png','07_01.png','08_01.bmp',
                        '09.png','10.png','11_01.png','11_02.png','12.png','13.png','14.png','15.png','16.png','17.png','18.png'
                    ];
                    $placeholder = asset('assets/images/MODELI/test.png');
                @endphp

                @foreach($projectImages as $img)
                    <div class="project2-block">
                        <div class="inner-box">
                            <div class="project2-content">
                                <div class="category">Structural Analysis</div>
                                <div class="image-wrapper" style="background-image: url('{{ $placeholder }}'); background-size: contain; background-repeat: no-repeat; background-position: center;">
                                    <img
                                        class="project-image owl-lazy"
                                        data-src="{{ asset('assets/images/MODELI/' . $img) }}"
                                        alt="STA JE NA SLICI {{ $loop->iteration }}"
                                        style="width: 100%; height: auto; display: block;"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="grid-line">
            <span class="line-one"></span>
            <span class="line-two"></span>
        </div>
    </section>


    <style>
        .image-wrapper {
            position: relative;
            display: inline-block;
            width: 100%;
            padding-top: 75%; /* adjust to maintain aspect ratio */
        }

        .project-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain; /* keeps image ratio */
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .project-image.owl-loaded {
            opacity: 1;
        }
    </style>


    <style>
        .image-wrapper {
            position: relative;
            display: inline-block;
            width: 100%;
            padding-top: 75%; /* adjust to maintain aspect ratio */
        }

        .project-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .project-image.owl-loaded {
            opacity: 1;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // When Owl marks image as loaded
            const images = document.querySelectorAll('.project-image');
            images.forEach(img => {
                img.addEventListener('load', () => {
                    // Remove the placeholder background once real image is loaded
                    img.parentElement.style.backgroundImage = 'none';
                });
            });
        });
    </script>


    <!-- About Section -->
    <section class="about-section">
        <div class="grid-line">
            <span class="line-one"></span>
            <span class="line-two"></span>
        </div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="content">

                        <h2 class="text2"> We are a newly established engineering company specializing in structural engineering and safety-focused design. While we offer a broad range of services in both structural and architectural engineering, our core expertise lies in creating safe, reliable, and efficient structural solutions.
                        </h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-wrapper">
                        <div class="image"><img src="{{ asset('assets/images/statika/01_06.png') }}" alt=""></div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="grid-line">
            <span class="line-one"></span>
            <span class="line-two"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title"><span>02</span> Services</div>
                <h2>What we do</h2>
            </div>
            <div class="services-section-two">
                <div class="auto-container">
                    <div class="row no-gutters">
                        <!-- First row -->
                        <div class="col-lg-6 col-md-6 service-block-two">
                            <div class="inner-box">
                                <div class="shape"></div>
                                <div class="icon">
                                    <i class="flaticon-ruler"></i>
                                </div>
                                {{--<h4><a href="{{ route('serviceDetails') }}">Structural Design</a></h4>--}}
                                <h4>Structural Design</h4>

                                <div class="text">
                                    We provide safe, efficient, and code-compliant <br>
                                    structural solutions for all types of structures.

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 service-block-two">
                            <div class="inner-box">
                                <div class="shape"></div>
                                <div class="icon">
                                    <i class="flaticon-blueprint-4"></i>
                                </div>
                                {{--<h4><a href="{{ route('serviceDetails2') }}">Architecture Design</a></h4>--}}
                                <h4>Architectural Design</h4>
                                <div class="text">
                                    Creative and functional architectural concepts <br>  tailored to your needs —
                                    including 3D renders <br>  that provide a realistic visual representation <br>  of your future space.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row no-gutters">
                        <!-- Second row -->
                        <div class="col-lg-6 col-md-6 service-block-two">
                            <div class="inner-box">
                                <div class="shape"></div>
                                <div class="icon">
                                    <i class="flaticon-tools"></i>
                                </div>
                                {{--<h4><a href="{{ "#" }}">Consulting</a></h4>--}}
                                <h4>Consulting</h4>
                                <div class="text">
                                    Expert engineering advice and support <br>
                                    through every stage of your project.

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 service-block-two">
                            <div class="inner-box">
                                <div class="shape"></div>
                                <div class="icon">
                                    <i class="icomoo-pipe"></i>
                                </div>
                                {{--<h4><a href="{{ route('serviceDetails4') }}">MEP Engineering</a></h4>--}}
                                <h4>MEP Engineering</h4>

                                <div class="text">
                                    Integrated mechanical, electrical and plumbing designs <br> optimized for performance and sustainability.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Project Section -->


    {{--
        <section class="cta-section" style="background-image: url('{{ asset('assets/images/background/bg-3.jpg') }}')">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <h2>Love our work?</h2>
                        <div class="text">See our full portofolio here</div>
                    </div>
                    <div class="col-lg-3">
                        <div class="link-btn text-lg-end"><a href="{{ route('about') }}" class="theme-btn"><span>Get Started</span></a></div>
                    </div>
                </div>
            </div>
        </section>--}}

    <!-- Skills Section -->
    <section class="skills-section">
        <div class="pattern" style="background-image: url('{{ asset('assets/images/background/bg-2.jpg') }}')"></div>
        <div class="grid-line">
            <span class="line-one"></span>
            <span class="line-two"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="content">
                        <div class="top-content">

                            <h3>Projects All Over The World</h3>
                        </div>
                        <div class="text-two"> Even if you don’t have a clear vision yet – we’ll help turn your ideas into reality <br> We’re here to guide you every step of the way and deliver results that exceed your expectations.</div>
                        <div class="text">Our studio’s core philosophy is to deliver customized structural and architectural design solutions tailored to each client’s specific needs. <br> With a strong focus on precision, efficiency, and innovation, we bring your vision to life through high-quality engineering and design — on time and with purpose</div>


                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="skills">
                        <!--Skill Item-->
                        <div class="skill-item">
                            <h4>Structural design & consulting</h4>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="100">
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="100">0</span>%</div></div>
                                </div></div>
                            </div>
                        </div>
                        <!--Skill Item-->
                        <div class="skill-item">
                            <h4>Architectural Design</h4>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="70">
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="70">0</span>%</div></div>
                                </div></div>
                            </div>
                        </div>
                        <!--Skill Item-->
                        <div class="skill-item">
                            <h4>MEP engineering</h4>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="40">
                                    <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="40">0</span>%</div></div>
                                </div></div>
                            </div>
                        </div>
                        <!--Skill Item-->

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Our Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Team</div>
                <h2>Our Experts</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/raha.jpg') }}" alt="">

                        </div>
                        <div class="content">
                            <div class="designation">Chief Executive Officer</div>
                            <h4><a href="{{ route('teamDetails') }}">Abdurahman Halebić</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/nedim.JPG') }}" alt="">

                        </div>
                        <div class="content">
                            <div class="designation">Chief Technology Officer</div>
                            <h4><a href="{{ route('teamDetails2') }}">Nedim Halebić</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/zlata.jpg') }}" alt="">

                        </div>
                        <div class="content">
                            <div class="designation">Structural Engineer</div>
                            <h4><a href="{{ route('teamDetails3') }}">Zlata Begić</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/team/amila.JPG') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="designation">Civil Engineer</div>
                            <h4><a href="{{ route('teamDetails4') }}">Amila Mušija</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sponsors section -->
  {{--  <section class="sponsors-section" style="background-image: url('{{ asset('assets/images/background/bg-4.jpg') }}')">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <h2>Our Partners</h2>
            </div>
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
    </section>
--}}
    <!--Main Footer-->
    {{--<x-footer/>--}}
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<x-script/>

</body>
</html>

<style>
    .section-gap {
        height: 40px; /* adjust gap size here */
        background-color: #fff; /* clean white space */
        width: 100%;
    }
    .navigation li.active > a {
        color: #7BAEDD;
        font-weight: 600;
    }

</style>
