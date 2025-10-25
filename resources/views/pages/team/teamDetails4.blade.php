@extends('layouts.layout')

@php
    $title='Meet our team';
    $subTitle='Details';
@endphp

@section('content')

    <!-- Team details page -->
    <div class="team-details">
        <div class="auto-container">
            <div class="author-info-block">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image mb-30"><img src="{{ asset('assets/images/team/amila.JPG') }}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="author-info">
                            <h3> Amila Mušija</h3>
                            <ul class="list">
                                <li><span>Position: </span>Civil Engineer</li>
                                <li><span>Specialities: </span>Water supply, drainage and plumbing systems</li>
                                <li><span>Experience: </span>5 Years</li>
                                <li><span>Phone:</span> <a href="tel:+387 62 522 357">+387 62 522 357</a></li>
                                <li><span>Biography: </span>Amila Mušija is a Civil Engineer with over five years of professional experience. She graduated from the Faculty of Civil Engineering at the University “Džemal Bijedić” in Mostar. Throughout her career, she has been involved in the design of water supply and drainage systems, as well as drainage networks, retaining structures, and other geotechnical structures.
                                    At IGG, she holds the position of Civil Engineer, with a particular focus on hydraulic systems and solving hydraulic challenges across various architectural and civil engineering projects.</li>
                            </ul>
                            {{--  <ul class="social-links">

                                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                              </ul>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-block">
                <div class="icon-box">
                    <div class="icon"><i class="fal fa-paper-plane"></i></div>
                    <h4>Skillset</h4>
                </div>
                <div class="skills">
                    <div class="row">
                        <div class="col-md-6">
                            <!--Skill Item-->
                            <div class="skill-item">
                                <h4>Plumbing Design</h4>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="100">
                                            <div class="skill-percentage">
                                                <div class="count-box"><span class="count-text" data-speed="2000" data-stop="100">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Skill Item-->
                            <div class="skill-item">
                                <h4>Water Supply Design</h4>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="100">
                                            <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="100">0</span>%</div></div>
                                        </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
