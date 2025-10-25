@extends('layouts.layout')

@php
     $title='portfolio Details';
     $subTitle='Portfolio';
@endphp

@section('content')

    <!-- Portfolio Details -->
    <section class="portfolio-details">
        <div class="auto-container">
            <div class="image-block">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-79.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-80.jpg') }}" alt=""></div>
                    </div>
                </div>
                <div class="project-info">
                    <div class="row">
                        <div class="col-lg-9">
                            <ul class="info-list">
                                <li>
                                    <p>Client </p>
                                    <h4>Austyn Joseph</h4>
                                </li>
                                <li>
                                    <p>Tag  </p>
                                    <h4>Architecture, Interior</h4>
                                </li>
                                <li>
                                    <p>Project  </p>
                                    <h4>Date May 21, 2021</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <div class="link-btn text-lg-end mb-30"><a href="#" class="theme-btn style-one"><span>Live Preview</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-block">
                <h2>Magnificent Architecture</h2>
                <div class="text mb-40">
                    <p>The basic philosophy of our studio is create individual, aesthetically stunning solutionsfor our customers by lightning-fast development projects employing unique styles architecture. Architects create designs for new construction projects, alterations and redevelopments. They use their specialist construction knowledge and high-level drawing skills to design buildings that are functional, safe, sustainable and aesthetically pleasing.</p>
                    <p>Architecture can mean: A general term to describe buildings and other physical structures. The art and science of designing buildings and (some) nonbuilding structures. The style of design and method of construction of buildings and other physical structures. A unifying or coherent form or structure.</p>
                </div>
                <div class="links">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <div class="tag">
                        <a href="#">Architecture </a>
                        <a href="#">Interior Design</a>
                        <a href="#">Residence</a>
                    </div>
                </div>
            </div>
            <div class="text-block-two">
                <div class="image"><img src="{{ asset('assets/images/resource/image-81.jpg') }}" alt=""></div>
                <div class="text">The characteristics that distinguish a work of architecture from other built structures are (1) the suitability of the work to use by human beings in general and the adaptability of it to  particular human activities, (2) the stability and permanence of the work’s construction, and (3) the communication of experience and ideas through its form. All these conditions  must be met in architecture. The second is a constant, while the first and third vary in relative importance according to the social function of buildings. If the function is chiefly utilitarian, as in a factory, communication is of less importance. If the function is chiefly expressive, as in a monumental tomb, utility is a minor concern. In some buildings, such as  churches and city halls, utility and communication may be of equal importance.</div>
                <div class="subscribe-text">
                    <a href="#">Subscribe Now</a>
                    <h4>Get a Britannica Premium subscription and gain access to exclusive content.</h4>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-82.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-83.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-84.jpg') }}" alt=""></div>
                    </div>
                </div>                
            </div>
            <div class="text-block-three">
                <h3>Solution Process</h3>
                <div class="text">Architecture can mean: A general term to describe buildings and other physical structures. The art and science of designing buildings and (some) nonbuilding structures. The style of design and method of construction of buildings and other physical structures. A unifying or coherent form or structure.</div>
                <div class="row">
                    <div class="col-lg-4 process-block">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-12.png') }}" alt=""></div>
                            <h4>Concept Ready</h4>
                            <div class="text">Philosophy of our studio is <br> an aesthetically stunning with <br> solutions for our customers.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 process-block">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-8.png') }}" alt=""></div>
                            <h4>Planning &amp; Selections</h4>
                            <div class="text">Philosophy of our studio is <br> an aesthetically stunning with <br> solutions for our customers.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 process-block">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-10.png') }}" alt=""></div>
                            <h4>Development Styling</h4>
                            <div class="text">Philosophy of our studio is <br> an aesthetically stunning with <br> solutions for our customers.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-pagination mb-30">
                <div class="prev-post">
                    <div class="image"><img src="{{ asset('assets/images/resource/image-21.jpg') }}" alt=""></div>
                    <p>Prev Service</p>
                    <h4><a href="#">Interior Design</a></h4>
                </div>
                <div class="next-post">
                    <div class="image"><img src="{{ asset('assets/images/resource/image-41.jpg') }}" alt=""></div>
                    <p>Next Service</p>
                    <h4><a href="#">Home Design</a></h4>
                </div>
            </div>
        </div>
    </section>

@endsection