@extends('layouts.layout')

@php
     $title='What We Do';
     $subTitle='Service 02';
@endphp

@section('content')

    <!-- Services section two -->
    <div class="services-section-two">
        <div class="auto-container">
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

    <!-- CTA section Two -->
    <section class="cta-section-two">
        <div class="auto-container">
            <div class="image"><img src="{{ asset('assets/images/resource/image-2.png') }}" alt=""></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="info-block">
                        <h5>Make Request</h5>
                        <h2><a href="mailto:info@webmail.com">info@webmail.com</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-block text-lg-end">
                        <h5>Phone Number</h5>
                        <h2><a href="tel:+09809809809">098. 098. 098. 09</a></h2>
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
