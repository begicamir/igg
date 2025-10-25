@extends('layouts.layout')

@php
    $title='get in touch';
    $subTitle='Contact Us';
@endphp

@section('content')

    <!-- Contact info section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">
                            Contact Us
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
                    <div class="contact-form">
                            <form action="{{ route('contact.send') }}" method="POST">
                                @csrf
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" placeholder="Enter Full Name">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" name="email" placeholder="Enter Email Address">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="theme-btn style-one"><span>Get A Quote</span></button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map section -->
    <section class="map-section">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1450.836947625713!2d17.817282369006122!3d43.342012565148146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134b430f186d59f7%3A0xb9faa7f6dafa111a!2zQnJhxIdlIEtuZcW-acSHYSA0NCwgTW9zdGFyIDg4MDAw!5e0!3m2!1sen!2sba!4v1759061366476!5m2!1sen!2sba"
                width="100%"
                height="700"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

@endsection

<style>
    .contact-map {
        width: 100%;
        max-width: 1200px; /* max width for large screens */
        margin: 40px auto; /* center horizontally with spacing */
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        border-radius: 8px;
        overflow: hidden;
    }

    .contact-map iframe {
        border-radius: 8px;
        display: block;
        width: 100%;
        height: 700px; /* bigger height */
    }

    @media (max-width: 991px) {
        .contact-map iframe {
            height: 400px; /* smaller height on mobile */
        }
    }
</style>
