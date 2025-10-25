<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>

<div class="page-wrapper">

    <div class="preloader"></div>

    <!-- Main Header -->
    <!-- Main Header -->
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/random.jpg') }}" alt=""></a></div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="{{ asset('assets/images/icons/icon-bar-2.png') }}" alt=""></div>

                            <!-- Main Menu -->
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="{{ Route::currentRouteName() === 'index' ? 'active' : '' }}">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() === 'portfolio2' ? 'active' : '' }}">
                                            <a href="{{ route('portfolio2') }}">Portfolio</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-right-info">
                <div class="sidemenu-nav-toggler"><i class="flaticon-menu"></i></div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/random.jpg') }}" alt=""></a></div>
                        </div>
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
                <div class="navbar-right-info">
                    <div class="sidemenu-nav-toggler"><i class="flaticon-menu"></i></div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon icon_close_alt2"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('assets/images/random.jpg') }}" alt="" title=""></a></div>
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
    <!-- End Main Header -->
    <!-- End Main Header -->

    <!-- Hidden Sidebar -->
    <x-sidebar/>

    <!-- Search Popup -->
    <x-searchPopup/>

    <!-- breadcrumb -->
    @if(isset($title))
        <x-breadcrumb :title="$title ?? ''" :subTitle="$subTitle ?? ''"/>
    @endif

    @yield('content')

    <!--Main Footer-->
    @if(!isset($footer))
        <x-footer/>
    @endif
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<x-script/>

</body>
</html>


