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
                        <div class="image mb-30"><img src="{{ asset('assets/images/team/raha.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="author-info">
                            <h3> Abdurahman Halebić</h3>
                            <ul class="list">
                                <li><span>Position: </span>Chief Executive Officer, Structural Engineer</li>
                                <li><span>Specialities: </span> Architectural & Structural Design</li>


                                <li><span>Experience: </span>10 Years</li>
                                <li><span>Phone:</span> <a href="tel:+387 61 536 754">+387 61 536 754</a></li>
                                <li><span>Biography: </span>Abdurahman Halebić is a Structural Engineer with over ten years of professional experience, graduated from the Faculty of Civil Engineering at the University “Džemal Bijedić” in Mostar. Throughout his career, he has participated in the implementation of some of the largest infrastructure projects in the Bosnia and Herzegovina region, contributing to complex and high-impact civil engineering works.
                                    He is one of the founders of IGG, where he currently serves as Chief Executive Officer. He has played an active role in the development and execution of numerous key architectural and structural projects, making a significant contribution to the advancement of construction practices in the region.
                                </li>
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
                <div class="text">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration some form by injected humour randomised words which don’t look even slightly believable.</div>
                <div class="skills">
                    <div class="row">
                        <div class="col-md-6">
                            <!--Skill Item-->
                            <div class="skill-item">
                                <h4>Interior sketch</h4>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="72">
                                            <div class="skill-percentage">
                                                <div class="count-box"><span class="count-text" data-speed="2000" data-stop="72">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--Skill Item-->
                            <div class="skill-item">
                                <h4>Interior Design</h4>
                                <div class="skill-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="60">
                                        <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="60">0</span>%</div></div>
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
