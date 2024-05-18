<!DOCTYPE html>
<html>

<head>
    @include('layouts.header')

</head>

<body>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('layouts.nav')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h1 class="breadcrumb-title text-color-primary">Web Packages</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">Web Packages</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <!--========= Pricing Table Area Start ==========-->
            <div class="pricing-table-area section-space--ptb_100 bg-gray">
                <div class="pricing-table-title-area position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                                    <h6 class="section-sub-title mb-20">Pricing and plan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricing-table-content-area">
                    <div class="container">
                        <div class="row pricing-table-one">
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Basic</h6>
                                        <div class="pricing-table__image">
                                            <img src="{{url('assets/img/icons/basic.webp')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">19</h6>
                                            <h6 class="period">/mo</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>03 projects</li>
                                            <li>Quality &amp; Customer Experience</li>
                                            <li><span class="featured">Try for free, forever!</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__feature-mark">
                                        <span>Popular Choice</span>
                                    </div>
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Professional</h6>
                                        <div class="pricing-table__image">
                                            <img src="{{url('assets/img/icons/professional.webp')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">59</h6>
                                            <h6 class="period">/mo</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn  ht-btn-md ">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>Unlimited project</li>
                                            <li>Power And Predictive Dialing</li>
                                            <li>Quality &amp; Customer Experience</li>
                                            <li>24/7 phone and email support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Advance</h6>
                                        <div class="pricing-table__image">
                                            <img src="{{url('assets/img/icons/advance.webp')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">29</h6>
                                            <h6 class="period">/mo</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>10 projects</li>
                                            <li>Power And Predictive Dialing </li>
                                            <li>Quality &amp; Customer Experience </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>






    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->



    @include('layouts.mobile_nav')







    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->








    @include('layouts.footer')


</body>

</html>
