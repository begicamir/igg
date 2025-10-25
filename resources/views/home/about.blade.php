@extends('layouts.layout')

@php
     $title='About Us';
     $subTitle='About Us';
@endphp

@section('content')

    <section class="experience-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image"><img src="{{ asset('assets/images/resource/image-22.jpg') }}" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="image"><img src="{{ asset('assets/images/resource/image-23.jpg') }}" alt=""></div>
                </div>
            </div>
            <div class="experience-year">
                <h2>25<sub>+</sub></h2>
                Years Experience
            </div>
        </div>
    </section>

    <!-- Mission -->
    <section class="mission-section style-two pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 mission-block">
                    <div class="inner-box">
                        <div class="count">01</div>
                        <h4>Our Mission & Vision</h4>
                        <div class="text">The basic philosophy of our studio is <br> to create individual, aesthetically  stunning  <br> solutions for our customers.</div>
                        <a href="{{ route('about') }}" class="read-more-link">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 mission-block">
                    <div class="inner-box">
                        <div class="count">02</div>
                        <h4>Company Values</h4>
                        <div class="text">The basic philosophy of our studio is <br> to create individual, aesthetically  stunning <br>  solutions for our customers.</div>
                        <a href="{{ route('about') }}" class="read-more-link">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 mission-block">
                    <div class="inner-box">
                        <div class="count">03</div>
                        <h4>Planning Process</h4>
                        <div class="text">The basic philosophy of our studio is <br> to create individual, aesthetically  stunning  <br> solutions for our customers.</div>
                        <a href="{{ route('about') }}" class="read-more-link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section three -->
    <section class="about-section-three" style="background-image: url('{{ asset('assets/images/background/bg-8.jpg') }}')">
        <div class="auto-container">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-6">
                    <div class="image"><img src="{{ asset('assets/images/resource/image-27.jpg') }}" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <div class="sec-title mb-20">
                            <div class="sub-title">About Us</div>
                            <h2>Meet With Arcix</h2>
                        </div>
                        <div class="text-two">Even if you don’t have a ready sketch of what you want <br> we will help you to get the result you dreamed of.</div>
                        <div class="text">The basic philosophy of our studio is to create individual, aesthetically <br> stunning solutions for our customers by lightning-fast development <br> of projects employing unique styles and architecture.</div>
                        <div class="skills">
                            <!--Skill Item-->
                            <div class="skill-item">
                                <h4>Interior sketch</h4>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="72">
                                        <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="72">0</span>%</div></div>
                                    </div></div>
                                </div>
                            </div>
                        </div>
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
                            <img src="{{ asset('assets/images/resource/image-28.jpg') }}" alt="">
                            <div class="social-icon">
                                <div class="icon"><i class="fal fa-plus"></i></div>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <div class="designation">Founder</div>
                            <h4><a href="{{ route('teamDetails') }}">Miranda H. Halim</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-29.jpg') }}" alt="">
                            <div class="social-icon">
                                <div class="icon"><i class="fal fa-plus"></i></div>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <div class="designation">CEO</div>
                            <h4><a href="{{ route('teamDetails') }}">Kilmandar K. Kill</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-30.jpg') }}" alt="">
                            <div class="social-icon">
                                <div class="icon"><i class="fal fa-plus"></i></div>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <div class="designation">Designer</div>
                            <h4><a href="{{ route('teamDetails') }}">Alexis D. Browni</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-31.jpg') }}" alt="">
                            <div class="social-icon">
                                <div class="icon"><i class="fal fa-plus"></i></div>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <div class="designation">Developer</div>
                            <h4><a href="{{ route('teamDetails') }}">Mixlix H. Hilix</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Working Process -->
    <section class="working-process-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="sub-title">Process</div>
                <h2>How We Works</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 process-block">
                    <div class="inner-box">
                        <div class="icon"><i class="flaticon-measure"></i></div>
                        <h4>Concept Ready</h4>
                        <div class="text">Philosophy of our studio is <br> an aesthetically stunning with <br> solutions for our customers.</div>
                    </div>
                </div>
                <div class="col-lg-4 process-block">
                    <div class="inner-box">
                        <div class="icon"><i class="flaticon-graphic-design"></i></div>
                        <h4>Planning & Selections</h4>
                        <div class="text">Philosophy of our studio is <br> an aesthetically stunning with <br> solutions for our customers.</div>
                    </div>
                </div>
                <div class="col-lg-4 process-block">
                    <div class="inner-box">
                        <div class="icon"><i class="flaticon-architect"></i></div>
                        <h4>Development Styling</h4>
                        <div class="text">Philosophy of our studio is <br> an aesthetically stunning with <br> solutions for our customers.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors section -->
    <section class="sponsors-section style-two">
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

@endsection
