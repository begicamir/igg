@extends('layouts.layout')

@php
    $title='Architecture Design';
    $subTitle='Details';

    // Example data array to scale easily
    $items = [
        [
            'title' => 'Architecture Design Project 1',
            'images' => [
                asset('assets/images/resource/image-39.jpg'),
                asset('assets/images/resource/image-39.jpg'),
                asset('assets/images/resource/image-39.jpg'),
            ],
            'description' => 'Architecture, the art and technique of designing and building, as distinguished from the skills associated with construction...',
        ],
        [
            'title' => 'Architecture Design Project 2',
            'images' => [
                asset('assets/images/resource/image-39.jpg'),
                asset('assets/images/resource/image-39.jpg'),
                asset('assets/images/resource/image-39.jpg'),
            ],
            'description' => 'These structures reveal much about the environment, history, ceremonies, and artistic sensibility, as well as daily life...',
        ],
        [
            'title' => 'Architecture Design Project 3',
            'images' => [
                asset('assets/images/resource/image-39.jpg'),
                asset('assets/images/resource/image-39.jpg'),
                asset('assets/images/resource/image-39.jpg'),
            ],
            'description' => 'Architecture reflects both utility and beauty and serves both practical and expressive requirements...',
        ],
    ];
@endphp

@section('content')

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <div class="service-page service-details">
        <div class="auto-container">

            @foreach($items as $index => $item)
                <div class="row align-items-center mb-80 section-row
                {{ $index % 2 === 0 ? '' : 'reverse-row' }}">
                    {{-- Conditional layout: even index normal, odd index reversed --}}

                    {{-- Image slider --}}
                    <div class="col-lg-6 image-col">
                        <div class="swiper image-slider" id="swiper-{{ $index }}">
                            <div class="swiper-wrapper">
                                @foreach($item['images'] as $img)
                                    <div class="swiper-slide">
                                        <img src="{{ $img }}" alt="{{ $item['title'] }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    {{-- Text content --}}
                    <div class="col-lg-6 text-col">
                        <div class="text-block">
                            <h3 class="text-center">{{ $item['title'] }}</h3>
                            <div class="text">
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        @foreach($items as $index => $item)
        new Swiper('#swiper-{{ $index }}', {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '#swiper-{{ $index }} .swiper-pagination',
                clickable: true,
            },
            speed: 800,
        });
        @endforeach
    });
</script>

<style>
    .service-details .section-row {
        display: flex;
        flex-wrap: wrap;
    }

    /* Normal order: image left, text right */
    .service-details .section-row {
        flex-direction: row;
    }

    /* Reverse order: text left, image right */
    .service-details .section-row.reverse-row {
        flex-direction: row-reverse;
    }

    .service-details .image-col,
    .service-details .text-col {
        flex: 0 0 50%;
        max-width: 50%;
        box-sizing: border-box;
        padding: 0 15px;
    }

    .image-slider {
        width: 100%;
        height: 400px;
        position: relative;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .image-slider .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .image-slider .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .text-block h3 {
        font-size: 28px;
        margin-bottom: 20px;
    }

    .text-block .text {
        font-size: 16px;
        color: #555;
    }

    @media (max-width: 991px) {
        .service-details .section-row,
        .service-details .section-row.reverse-row {
            flex-direction: column !important;
        }
        .service-details .image-col,
        .service-details .text-col {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 0 30px 0;
        }
    }

    .mb-80 {
        margin-bottom: 80px;
    }
</style>
