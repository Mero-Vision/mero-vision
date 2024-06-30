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
                        <h1 class="breadcrumb-title text-color-primary">Web Application Packages</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Web Application Packages</li>
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
                                        <h6 class="sub-title">Basic Web Application</h6>
                                        <div class="pricing-table__image">
                                            <img src="{{ url('assets/img/icons/basic.webp') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h5 class="text-dark">Price: NPR 100,000</h5>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>Responsive Design</li>
                                            <li>Custom Domain</li>
                                            <li>Basic User Authentication</li>
                                            <li>Database Integration (e.g., MySQL)</li>
                                            <li>Basic CRUD Operations</li>
                                            <li>Hosting: 1-year VPS hosting plan.</li>
                                            <li>Admin Panel</li>
                                            <li>Basic Accessibility Features</li>
                                            <li>SSL Certificate</li>
                                            <li>Support: 3 months of free technical support.</li>
                                            <li>Frontend: HTML5, CSS3, JavaScript</li>
                                            <li>Backend: PHP </li>
                                            <li>Database: MySQL </li>
                                            <li>Framework: Laravel (for PHP) </li>



                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__feature-mark">
                                        <span>Popular Choice</span>
                                    </div>
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Standard Web Application</h6>
                                        <div class="pricing-table__image">
                                            <img src="{{ url('assets/img/icons/professional.webp') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h5 class="text-dark">Price: NPR 200,000</h5>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn  ht-btn-md ">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>Everything in the Basic Package, plus:</li>
                                            <li>Advanced User Authentication: Social login (e.g., Google, Facebook)</li>
                                            <li>Advanced Database Integration</li>                                                                           
                                            <li>Advanced Admin Panel</li>
                                            <li>Automated Backups</li>
                                            <li>API Developments</li>
                                            <li>Hosting: 1-year premium hosting plan.</li>
                                            <li>Support: 6 months of support.</li>
                                            <li>Frontend: React.js</li>
                                            <li>Backend: PHP </li>
                                            <li>Database: MySQL </li>
                                            <li>Framework: Laravel (for PHP) </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Premium Web Application</h6>
                                        <div class="pricing-table__image">
                                            <img src="{{ url('assets/img/icons/advance.webp') }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h5 class="text-dark">Price: NPR 400,000</h5>

                                        </div>
                                        <p class="text-center text-dark">Pricing may vary based on project requirements.
                                        </p>

                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>Everything in the Standard Package, plus:</li>
                                            <li>Custom System Design </li>                                        
                                            <li>Advanced Admin Panel </li>
                                            <li>Payment Gateway Integration</li>
                                            <li>API Management </li>
                                            <li>Role-Based Access Control</li>                                             
                                            <li>Ongoing Support </li>
                                            <li>Hosting: 1-year premium hosting. </li>                                         
                                            <li>API Development </li>                                                                       
                                            <li>Frontend: React.js</li>
                                            <li>Backend: PHP </li>
                                            <li>Database: MySQL </li>
                                            <li>Framework: Laravel (for PHP) </li>

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
