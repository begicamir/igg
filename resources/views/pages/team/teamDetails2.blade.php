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
                        <div class="image mb-30"><img src="{{ asset('assets/images/team/nedim.JPG') }}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="author-info">
                            <h3> Nedim Halebić</h3>
                            <ul class="list">
                                <li><span>Position: </span>Chief Technology Officer, Structural Engineer</li>
                                <li><span>Specialities: </span>Structural analysis & design </li>

                                <li><span>Experience: </span>3 Years</li>
                                <li><span>Phone:</span> <a href="tel:+387 62 081 166">+387 62 081 166</a></li>
                                <li><span>Biography: </span>Nedim Halebić is a Structural Engineer with over three years of professional experience. He graduated from the Faculty of Civil Engineering at the University of Sarajevo. Throughout his career, he has been actively involved in the design of infrastructure structures, particularly bridges, and possesses strong technical expertise in structural engineering and 3D modeling.
                                    He is one of the founders of IGG, where he currently serves as the Chief Technology Officer (CTO). Nedim plays a key role in advancing the company’s development strategies, as well as in the preparation of structural designs and analyses.</li>
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
