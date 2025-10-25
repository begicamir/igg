@extends('layouts.layout')

@php
     $title='FAQ’s';
     $subTitle='FAQ’s';
@endphp

@section('content')

    <!-- faq page -->
    <div class="faq__page">
        <div class="auto-container">
            <div class="tabs-box">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="tab-btns">
                            <li class="tab-btn" data-tab="#cat-1">General Questions<i class="fas fa-angle-right"></i></li>
                            <li class="tab-btn active-btn" data-tab="#cat-2">Architecture Design <i class="fas fa-angle-right"></i></li>
                            <li class="tab-btn" data-tab="#cat-3">Interior Design<i class="fas fa-angle-right"></i></li>
                            <li class="tab-btn" data-tab="#cat-4">Exterior Design<i class="fas fa-angle-right"></i></li>
                            <li class="tab-btn" data-tab="#cat-5">3D & 4D Modeling<i class="fas fa-angle-right"></i></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="tabs-content">
                            <div class="tab" id="cat-1">
                                <div class="sec-title mb-40">
                                    <div class="sub-title">Asked Questions</div>
                                    <h2>Frequently <br> Asked Questions.</h2>
                                </div>
                                <ul class="accordion-box">
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How to customized this kind theme?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
            
                                    <!--Accordion Block-->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can I hire you in easy way?</div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can i make refund?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Does Archix have a privacy policy?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can I get a quote?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li> 

                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can i get a same day booking?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    <!-- End Block -->
                                </ul>
                            </div>
                            <div class="tab active-tab" id="cat-2">
                                <div class="sec-title mb-40">
                                    <div class="sub-title">Asked Questions</div>
                                    <h2>Frequently <br> Asked Questions.</h2>
                                </div>
                                <ul class="accordion-box">
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How to customized this kind theme?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
            
                                    <!--Accordion Block-->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can I hire you in easy way?</div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can i make refund?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Does Archix have a privacy policy?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can I get a quote?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li> 

                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can i get a same day booking?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    <!-- End Block -->
                                </ul>
                            </div>
                            <div class="tab" id="cat-3">
                                <div class="sec-title mb-40">
                                    <div class="sub-title">Asked Questions</div>
                                    <h2>Frequently <br> Asked Questions.</h2>
                                </div>
                                <ul class="accordion-box">
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How to customized this kind theme?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
            
                                    <!--Accordion Block-->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can I hire you in easy way?</div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can i make refund?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Does Archix have a privacy policy?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can I get a quote?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li> 

                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can i get a same day booking?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    <!-- End Block -->
                                </ul>
                            </div>
                            <div class="tab" id="cat-4">
                                <div class="sec-title mb-40">
                                    <div class="sub-title">Asked Questions</div>
                                    <h2>Frequently <br> Asked Questions.</h2>
                                </div>
                                <ul class="accordion-box">
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How to customized this kind theme?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
            
                                    <!--Accordion Block-->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can I hire you in easy way?</div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can i make refund?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Does Archix have a privacy policy?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can I get a quote?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li> 

                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can i get a same day booking?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    <!-- End Block -->
                                </ul>
                            </div>
                            <div class="tab" id="cat-5">
                                <div class="sec-title mb-40">
                                    <div class="sub-title">Asked Questions</div>
                                    <h2>Frequently <br> Asked Questions.</h2>
                                </div>
                                <ul class="accordion-box">
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How to customized this kind theme?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
            
                                    <!--Accordion Block-->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can I hire you in easy way?</div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can i make refund?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Does Archix have a privacy policy?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    </li>
                    
                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>How can I get a quote?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li> 

                                    <!--Accordion Block-->
                                    <li class="accordion block">
                                        <div class="acc-btn"><div class="icon-outer"><span class="fal fa-plus"></span></div>Can i get a same day booking?</div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit eiusmod tempor incidid unt labore dolore magna aliquaenim minim veniam quis nostrud exercitation ullamco laboris.
                                                </div>
                                            </div>
                                        </div>
                                    </li>                       
                                    <!-- End Block -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

@endsection
