@extends('layout.app')
@section('contant')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Zero Waste</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ '/' }}">Home</a></li>
                    <li><a href="{{ 'services' }}">Services</a></li>
                    <li class="active">Zero Waste</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Service Details Start-->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details__left">
                        <div class="service-details__category">
                            <h3 class="service-details__title">Categories</h3>
                            <ul class="service-details__cagegory-list list-unstyled">

                                <li class="active"><a href="{{ 'zero-waste' }}">Zero Waste <span
                                            class="fa fa-arrow-right"></span></a></li>

                                <li><a href="{{ 'dumpster-rental' }}">Dumpster Rental <span
                                            class="fa fa-arrow-right"></span></a></li>

                                <li><a href="{{ 'portable-toilet' }}">Portable Toilet <span
                                            class="fa fa-arrow-right"></span></a></li>

                                <li><a href="{{ 'recylcing-services' }}">Recylcing Services <span
                                            class="fa fa-arrow-right"></span></a></li>

                                <li><a href="{{ 'residential-pickup' }}">Residential Pickup <span
                                            class="fa fa-arrow-right"></span></a></li>

                                <li><a href="{{ 'business-pickup' }}">Business Pickup <span
                                            class="fa fa-arrow-right"></span></a></li>

                            </ul>
                        </div>
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg"
                                style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <span class="icon-phone-ringing"></span>
                            </div>
                            <h2 class="service-details__need-help-title">Have Waste Pickup <br> Contact Now</h2>
                            <div class="service-details__need-help-contact">
                                <p>Call Anytime</p>
                                <a href="tel:12463330088">+ 1- (246) 333-0088</a>
                            </div>
                        </div>
                        <div class="service-details__banner">
                            <div class="service-details__banner-content">
                                <h3 class="service-details__banner-title">We Don’t Just Manage Waste. We Provide
                                    a
                                    Solutions.</h3>
                                <div class="service-details__banner-shape-1 float-bob-y"><img
                                        src="assets/images/shapes/service-details-banner-shape-1.png" alt="">
                                </div>
                            </div>
                            <div class="services-details__banner-car float-bob-x">
                                <img src="assets/images/resources/service-details-banner-car.png" alt="">
                            </div>
                        </div>
                        <div class="service-details__download">
                            <a href="{{ 'about' }}" class="thm-btn service-details__download-btn">Download Our
                                Flyers</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details__right">
                        <div class="service-details__img">
                            <img src="assets/images/services/service-details-img-1.jpg" alt="">
                        </div>
                        <div class="service-details__content">
                            <h3 class="service-details__content-title">Zero Waste</h3>
                            <p class="service-details__text-1">Lorem ipsum is simply free text used by
                                copytyping
                                refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et
                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim
                                var
                                sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply
                                dummy
                                text of the printing and typesetting industry. Lorem Ipsum has been the ndustry
                                standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of
                                type and scrambled it to make a type specimen book.</p>
                            <p class="service-details__text-2">When an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.</p>
                            <p class="service-details__text-3">It has survived not only five centuries. Lorem
                                Ipsum
                                is simply dummy text of the new design printng and type setting Ipsum take a
                                look at
                                our round. When an unknown printer took a galley of type and scrambled it to
                                make a
                                type specimen book. It has survived not only five centuries, but also the leap
                                into
                                electronic typesetting.</p>
                        </div>
                        <div class="service-details__points">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__points-single">
                                        <div class="service-details__points-icon">
                                            <span class="icon-garbage"></span>
                                        </div>
                                        <div class="service-details__points-content">
                                            <h4>Proin Tempus</h4>
                                            <p>There are many of of lorem Ipsum, but the majori have suffered.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__points-single">
                                        <div class="service-details__points-icon">
                                            <span class="icon-garbage-truck"></span>
                                        </div>
                                        <div class="service-details__points-content">
                                            <h4>Proin Tempus</h4>
                                            <p>There are many of of lorem Ipsum, but the majori have suffered.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-details__benefits">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="service-details__benefits-img">
                                        <img src="assets/images/services/service-details-benefits-img.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="service-details__benefits-right">
                                        <h3 class="service-details__benefits-title">Our Benefits</h3>
                                        <p class="service-betails__benefits-text-1">Duis aute irure dolor in
                                            reprehenderit in voluptate velit esse cillum.</p>
                                        <ul class="list-unstyled service-details__benefits-points">
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Praesent efficitur quam sit amet</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p> Nunc cursus dolor id purus euismod</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Quisque tincidunt eros ac place viverra</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-details__faq">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>What items can I put into the trash?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                aliquet pellentesque vitae.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>What items and materials are recyclable?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                aliquet pellentesque vitae.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How do I get a new waste container?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                aliquet pellentesque vitae.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion last-chiled">
                                    <div class="accrodion-title">
                                        <h4>What items and materials are NOT recyclable?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est
                                                aliquet pellentesque vitae.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->
@endsection
