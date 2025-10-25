<header class="main-header header-style-three">
    <!-- Header Upper -->
    <div class="header-upper">
        <!--Logo-->
        <div class="logo-box">
            <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-2.png') }}" alt=""></a></div>
        </div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="right-column">
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">
                                    <li class="dropdown"><a href="{{ route('index') }}">Home</a>
                                        <ul>
                                            <li><a href="{{ route('index') }}">Home One</a></li>
                                            <li><a href="{{ route('index2') }}">Home Two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="{{ route('servicesTwo') }}">Services Two</a></li>
                                            <li><a href="{{ route('serviceDetails') }}">Service Details</a></li>
                                            <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                            <li><a href="{{ route('history') }}">History</a></li>
                                            <li><a href="{{ route('faq') }}">FAQ’s</a></li>
                                            <li><a href="{{ route('pageError') }}">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Portfolio</a>
                                        <ul>
                                            <li><a href="{{ route('portfolio1') }}">Portfolio Grid</a></li>
                                            <li><a href="{{ route('portfolio2') }}">Portfolio List</a></li>
                                            <li><a href="{{ route('portfolio3') }}">Portfolio Standard</a></li>
                                            <li><a href="{{ route('portfolioDetails') }}">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">News</a>
                                        <ul>
                                            <li><a href="{{ route('blog') }}">News</a></li>
                                            <li><a href="{{ route('blogDetails') }}">News Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="header-upper">
            <!--Logo-->
            <div class="logo-box">
                <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo-2.png') }}" alt=""></a></div>
            </div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="{{ asset('assets/images/icons/icon-bar-2.png') }}" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon icon_close_alt2"></span></div>

        <nav class="menu-box">
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>
