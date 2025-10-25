@extends('layouts.layout')

@php
     $title='Our History';
     $subTitle='History';
@endphp

@section('content')

    <section class="timeline-section">
        <div class="auto-container">
            <div class="wrapper-box">
                <ul class="timeline-block">
                    <li>
                        <div class="center-box">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-44.jpg') }}" alt=""></div>
                            <div class="content">
                                <div class="date">2000</div>
                                <div class="count">01</div>
                                <h4>Company Formed</h4>
                                <div class="text">Beyond more stoic this along good <br> this sed wow manate mongos flust <br> impressive duman farcrud.</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="center-box">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-45.jpg') }}" alt=""></div>
                            <div class="content">
                                <div class="date">2005</div>
                                <div class="count">02</div>
                                <h4>1st Project Delivered</h4>
                                <div class="text">Beyond more stoic this along good <br> this sed wow manate mongos flust <br> impressive duman farcrud.</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="center-box">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-46.jpg') }}" alt=""></div>
                            <div class="content">
                                <div class="date">2010</div>
                                <div class="count">03</div>
                                <h4>New York Office</h4>
                                <div class="text">Beyond more stoic this along good <br> this sed wow manate mongos flust <br> impressive duman farcrud.</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="center-box">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-47.jpg') }}" alt=""></div>
                            <div class="content">
                                <div class="date">2015</div>
                                <div class="count">04</div>
                                <h4>Interior Design Award</h4>
                                <div class="text">Beyond more stoic this along good <br> this sed wow manate mongos flust <br> impressive duman farcrud.</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="center-box">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-48.jpg') }}" alt=""></div>
                            <div class="content">
                                <div class="date">2019</div>
                                <div class="count">05</div>
                                <h4>100 Projects Landmark</h4>
                                <div class="text">Beyond more stoic this along good <br> this sed wow manate mongos flust <br> impressive duman farcrud.</div>
                            </div>
                        </div>                            
                    </li>
                    <li>
                        <div class="center-box">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-49.jpg') }}" alt=""></div>
                            <div class="content">
                                <div class="date">2021</div>
                                <div class="count">06</div>
                                <h4>Architecture Project</h4>
                                <div class="text">Beyond more stoic this along good <br> this sed wow manate mongos flust <br> impressive duman farcrud.</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>                
        </div>
    </section>

@endsection
