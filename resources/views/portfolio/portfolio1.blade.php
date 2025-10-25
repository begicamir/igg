@extends('layouts.layout')

@php
     $title='portfolio Grid';
     $subTitle='Portfolio';
@endphp

@section('content')

    <!-- Portfolio section Two -->
    <section class="portfolio-section-two">
        <div class="auto-container">
            <div class="row row-75 grid">
                <div class="col-lg-4 col-md-6 portfolio-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <iframe src="{{ asset('assets/fajlovi/sample.pdf') }}" width="100%" height="300px" style="border:none;"></iframe>
                            <div class="location"><i class="fal fa-map-marker-alt"></i> London, UK</div>
                        </div>
                        <div class="content">
                            <div class="category">Architecture</div>
                            <h4><a href="{{ route('portfolioDetails') }}">Stone Mix House</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-59.jpg') }}" alt="">
                            <div class="location"><i class="fal fa-map-marker-alt"></i> London, UK</div>
                        </div>
                        <div class="content">
                            <div class="category">Architecture</div>
                            <h4><a href="{{ route('portfolioDetails') }}">Stone Mix House</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-60.jpg') }}" alt="">
                            <div class="location"><i class="fal fa-map-marker-alt"></i> London, UK</div>
                        </div>
                        <div class="content">
                            <div class="category">Architecture</div>
                            <h4><a href="{{ route('portfolioDetails') }}">Stone Mix House</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-61.jpg') }}" alt="">
                            <div class="location"><i class="fal fa-map-marker-alt"></i> London, UK</div>
                        </div>
                        <div class="content">
                            <div class="category">Architecture</div>
                            <h4><a href="{{ route('portfolioDetails') }}">Stone Mix House</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-62.jpg') }}" alt="">
                            <div class="location"><i class="fal fa-map-marker-alt"></i> London, UK</div>
                        </div>
                        <div class="content">
                            <div class="category">Architecture</div>
                            <h4><a href="{{ route('portfolioDetails') }}">Stone Mix House</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-63.jpg') }}" alt="">
                            <div class="location"><i class="fal fa-map-marker-alt"></i> London, UK</div>
                        </div>
                        <div class="content">
                            <div class="category">Architecture</div>
                            <h4><a href="{{ route('portfolioDetails') }}">Stone Mix House</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-64.jpg') }}" alt="">
                            <div class="location"><i class="fal fa-map-marker-alt"></i> London, UK</div>
                        </div>
                        <div class="content">
                            <div class="category">Architecture</div>
                            <h4><a href="{{ route('portfolioDetails') }}">Stone Mix House</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-65.jpg') }}" alt="">
                            <div class="location"><i class="fal fa-map-marker-alt"></i> London, UK</div>
                        </div>
                        <div class="content">
                            <div class="category">Architecture</div>
                            <h4><a href="{{ route('portfolioDetails') }}">Stone Mix House</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image-66.jpg') }}" alt="">
                            <div class="location"><i class="fal fa-map-marker-alt"></i> London, UK</div>
                        </div>
                        <div class="content">
                            <div class="category">Architecture</div>
                            <h4><a href="{{ route('portfolioDetails') }}">Stone Mix House</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
