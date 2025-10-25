@extends('layouts.layout')

@php
     $title='blog insights';
     $subTitle='News';
@endphp

@section('content')

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container blog-page">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-side">
                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{ asset('assets/images/resource/image-85.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <div class="category">Business</div>
                                    <div class="author-box">
                                        <div class="thumb"><img src="{{ asset('assets/images/resource/author-4.jpg') }}" alt=""></div>
                                        <h5>by Hetmayar</h5>
                                    </div>
                                    <h2><a href="{{ route('blogDetails') }}">Dharma Home Suites at Novia offers fully plain <br> furnished apartments to fit</a></h2>
                                    <div class="text">Novia's spaciously two bedroom apartments are perfect for families and even business partners. Look out into the Manhattan skyline from the open fully equipped kitchen.</div>                                
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-eye"></i>100 Views</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>30 Comments</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{ asset('assets/images/resource/image-86.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <div class="category">Business</div>
                                    <div class="author-box">
                                        <div class="thumb"><img src="{{ asset('assets/images/resource/author-4.jpg') }}" alt=""></div>
                                        <h5>by Hetmayar</h5>
                                    </div>
                                    <h2><a href="{{ route('blogDetails') }}">Dharma Home Suites at Novia offers fully plain <br> furnished apartments to fit</a></h2>
                                    <div class="text">Novia's spaciously two bedroom apartments are perfect for families and even business partners. Look out into the Manhattan skyline from the open fully equipped kitchen.</div>                                
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-eye"></i>100 Views</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>30 Comments</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{ asset('assets/images/resource/image-87.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <div class="category">Business</div>
                                    <div class="author-box">
                                        <div class="thumb"><img src="{{ asset('assets/images/resource/author-4.jpg') }}" alt=""></div>
                                        <h5>by Hetmayar</h5>
                                    </div>
                                    <h2><a href="{{ route('blogDetails') }}">Dharma Home Suites at Novia offers fully plain <br> furnished apartments to fit</a></h2>
                                    <div class="text">Novia's spaciously two bedroom apartments are perfect for families and even business partners. Look out into the Manhattan skyline from the open fully equipped kitchen.</div>                                
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-eye"></i>100 Views</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>30 Comments</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image"><a href="#"><img src="{{ asset('assets/images/resource/image-88.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <h2><a href="{{ route('blogDetails') }}">Dharma Home Suites at Novia offers fully plain <br> furnished apartments to fit</a></h2>
                                    <div class="text">Novia's spaciously two bedroom apartments are perfect for families and even business partners. Look out into the Manhattan skyline from the open fully equipped kitchen.</div>                                
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-eye"></i>100 Views</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>30 Comments</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- News Block Three -->
                        <div class="news-block-three">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <div class="quote"><span class="fa fa-quote-left"></span></div>
                                    <h2><a href="{{ route('blogDetails') }}">Dharma Home Suites at Novia offers <br>  fully plain & furnished</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="page-pagination">
                            <ul class="clearfix">
                                <li><a href="#"><span class="fas fa-angle-double-left"></span></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><span class="fas fa-angle-double-right"></span></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">

                        <!-- About Widget -->
                        <div class="sidebar-widget about-me">
                            <div class="sidebar-title"><h3>About Me</h3></div>
                            <div class="widget-content">
                                <div class="image"><img src="{{ asset('assets/images/resource/author-5.jpg') }}" alt=""></div>
                                <h4>Rosalina D. Willaimson</h4>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <div class="sidebar-title"><h3>Search Objects</h3></div>
                            <form method="post" action="{{ route('contact') }}">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search your keyword..." required="">
                                    <button type="submit"><span class="icon far fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h3>Popular Feeds</h3></div>
                            <div class="widget-content">
                                
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="{{ route('blogDetails') }}"><img src="{{ asset('assets/images/resource/image-89.jpg') }}" alt=""></a></div>
                                    <h4><a href="{{ route('blogDetails') }}">Lorem ipsum dolor sit <br>cing elit, sed do. </a></h4>
                                    <div class="date"><span class="fal fa-calendar-alt"></span>24th March 2020</div>
                                </div>
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="{{ route('blogDetails') }}"><img src="{{ asset('assets/images/resource/image-90.jpg') }}" alt=""></a></div>
                                    <h4><a href="{{ route('blogDetails') }}">Lorem ipsum dolor sit <br>cing elit, sed do.</a></h4>
                                    <div class="date"><span class="fal fa-calendar-alt"></span>24th March 2020</div>
                                </div>
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="{{ route('blogDetails') }}"><img src="{{ asset('assets/images/resource/image-91.jpg') }}" alt=""></a></div>
                                    <h4><a href="{{ route('blogDetails') }}">Lorem ipsum dolor sit <br> cing elit, sed do.</a></h4>
                                    <div class="date"><span class="fal fa-calendar-alt"></span>24th March 2020</div>
                                </div>
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="{{ route('blogDetails') }}"><img src="{{ asset('assets/images/resource/image-92.jpg') }}" alt=""></a></div>
                                    <h4><a href="{{ route('blogDetails') }}">Lorem ipsum dolor sit <br> cing elit, sed do.</a></h4>
                                    <div class="date"><span class="fal fa-calendar-alt"></span>24th March 2020</div>
                                </div>
                            </div>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Categories</h3></div>
                            <div class="widget-content">
                                <ul>
                                    <li class="current"><a href="{{ route('blogDetails') }}">Business</a> <span class="total-post">26</span></li>
                                    <li><a href="{{ route('blogDetails') }}">Consultant</a> <span class="total-post">30</span></li>
                                    <li><a href="{{ route('blogDetails') }}">Creative</a> <span class="total-post">71</span></li>
                                    <li><a href="{{ route('blogDetails') }}">UI/UX</a> <span class="total-post">68</span></li>
                                    <li><a href="{{ route('blogDetails') }}">Technology</a><span class="total-post">70</span></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h3>Popular Tags</h3></div>
                            <div class="widget-content">
                                <ul class="clearfix">
                                    <li><a href="{{ route('blogDetails') }}"><span>Popular</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>desgin</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>ux</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>usability</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>develop</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>icon</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>business</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>consult</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>kit</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>keyboard</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>mouse</span></a></li>
                                    <li><a href="{{ route('blogDetails') }}"><span>tech</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Add Banner Widget -->
                        <div class="sidebar-widget">
                            <div class="sidebar-title"><h3>Sponsor Adds</h3></div>
                            <div class="add-banner-widget" style="background-image: url('{{ asset('assets/images/resource/image-93.jpg') }}')">
                                <div class="content">
                                    <h5>350x600</h5>
                                </div>
                            </div>
                        </div>
                                            
                    </aside>
                </div>
            </div>
        </div>
    </div>

@endsection
