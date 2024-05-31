@extends('layout.app')
@section('contant')
    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2>Transforming Waste into <span>Art</span></h2>
                                    <p style="color: white;">Discover the beauty in sustainability with 'Bekar
                                        ko Akaar.' Join us in our mission to repurpose waste materials into
                                        stunning artistic installations that breathe new life into our city.</p>
                                    <a href="{{ 'contact' }}" class="thm-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2>Empowering Communities, <span>Inspiring</span> Change</h2>
                                    <p>At 'Bekar ko Akaar,' we're not just about creating art; we're about
                                        creating opportunities for growth and empowerment.</p>
                                    <a href="{{ 'contact' }}" class="thm-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2>Crafting Tradition, <span>Preserving </span> Culture</h2>
                                    <p>Explore the essence of heritage and craftsmanship with 'KRATITVA' by
                                        'Bekar ko Akaar.' Our collection of handicraft products celebrates
                                        cultural creativity and supports local artisans.</p>
                                    <a href="{{ 'contact' }}" class="thm-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow arrow-left"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">
                <ul class="list-unstyled feature-one__list">
                    <li class="feature-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__icon">
                            <span class="icon-budget"></span>
                        </div>
                    </li>
                    <li class="feature-one__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-one__icon">
                            <span class="icon-calendar"></span>
                        </div>
                    </li>
                    <li class="feature-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-one__icon">
                            <span class="icon-garbage"></span>
                        </div>
                    </li>
                    <li class="feature-one__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="feature-one__icon">
                            <span class="icon-garbage-truck"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Leading Waste Start-->
    <section class="leading-waste">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="leading-waste__left">
                        <div class="leading-waste__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="leading-waste__img">
                                <img src="assets/images/resources/about.png" alt="">
                            </div>
                            <div class="leading-waste__experience">
                                <p><span>18+</span> <br> Years of <br> Experience</p>
                            </div>
                            <div class="leading-waste__img-shape-1 float-bob-x">
                                <!-- <img src="assets/images/shapes/leading-waste-img-shape-1.png" alt=""> -->
                            </div>
                            <div class="leading-waste__big-text">
                                <p>Wostin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="leading-waste__right">
                        <div class="leading-waste-dots">
                            <img src="assets/images/shapes/leading-waste-dots.png" alt="">
                        </div>
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Get to Know About Us</span>
                            <h2 class="section-title__title">Welcome to - Bekar ko Akaar</h2>
                        </div>
                        <p class="leading-waste__text">“Bekar ko aakar” is an organisation working towards two
                            social issues solid waste management and women empowerment.</p>

                        <a href="{{ 'about' }}" class="thm-btn" style="margin-top: 5rem;">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Leading Waste End-->

    <!--Industries One Start-->
    <section class="industries-one">
        <div class="industries-one-bg" style="background-image: url(assets/images/backgrounds/industries-one-bg.jpg);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline" style="margin-top: 30px;">We Cover Industries</span>
                <h2 class="section-title__title">Park and Selfie points </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Industries One Single-->
                    <div class="industries-one__single">
                        <div class="industries-one__img">
                            <img src="assets/images/resources/park.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Industries One Single-->
                    <div class="industries-one__single">
                        <div class="industries-one__img">
                            <img src="assets/images/resources/park1.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Industries One Single-->
                    <div class="industries-one__single">
                        <div class="industries-one__img">
                            <img src="assets/images/resources/park2.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Industries One End-->

    <!--We Dedicated Start-->
    <section class="we-dedicated">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="we-dedicated__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Skills & Expertise</span>
                            <h2 class="section-title__title">We are Dedicated to Serve you all Our Time</h2>
                        </div>
                        <!-- <p class="we-dedicated__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                                                                                                                                                                                                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam.</p> -->
                        <div class="we-dedicated__progress">
                            <div class="we-dedicated__progress-single">
                                <h4 class="we-dedicated__progress-title">Waste Management</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="90%">
                                        <div class="count-text">90%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="we-dedicated__progress-single">
                                <h4 class="we-dedicated__progress-title">Recycling</h4>
                                <div class="bar marb-0">
                                    <div class="bar-inner count-bar" data-percent="46%">
                                        <div class="count-text">46%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="we-dedicated__right">
                        <div class="we-dedicated__img-box wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <img src="assets/images/resources/we-dedicated-img.jpg" alt="">
                            <!-- <div class="we-dedicated__video-link">
                                                                                                                                                                                                                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" @class="video-popup">
                                                                                                                                                                                                                                                            <div class="we-dedicated__video-icon">
                                                                                                                                                                                                                                                                <span class="fa fa-play"></span>
                                                                                                                                                                                                                                                                <i class="ripple"></i>
                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--We Dedicated End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="counter-one-bg-box">
            <div class="counter-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Counter One Single-->
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__count">
                                <h2 class="odometer" data-count="260">00</h2><span class="counter-one__plus">+</span>
                            </div>
                            <div class="counter-one__icon">
                                <span class="icon-recycling-symbol"></span>
                            </div>
                        </div>
                        <h3 class="counter-one__title">Industries Served</h3>
                        <!-- <p class="counter-one__text">Lorem Ipsum is simply dummy <br> ext of the new design.</p> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Counter One Single-->
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__count">
                                <h2 class="odometer" data-count="3600">00</h2>
                            </div>
                            <div class="counter-one__icon">
                                <span class="icon-recycling-symbol"></span>
                            </div>
                        </div>
                        <h3 class="counter-one__title">Wast Picked</h3>
                        <!-- <p class="counter-one__text">Lorem Ipsum is simply dummy <br> ext of the new design.</p> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Counter One Single-->
                    <div class="counter-one__single">
                        <div class="counter-one__top">
                            <div class="counter-one__count">
                                <h2 class="odometer" data-count="890">00</h2><span class="counter-one__plus">+</span>
                            </div>
                            <div class="counter-one__icon">
                                <span class="icon-recycling-symbol"></span>
                            </div>
                        </div>
                        <h3 class="counter-one__title">Happy Customers</h3>
                        <!-- <p class="counter-one__text">Lorem Ipsum is simply dummy <br> ext of the new design.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter One End-->

    <!--Services One Start-->
    <section class="services-one">
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="services-one__top-left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">What We’re Offering</span>
                                <h2 class="section-title__title">The Services We’re Providing <br> to Our
                                    Customers
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="services-one__top-right">
                            <p class="services-one__top-text">At “Bekar ko Akaar” we are passionate about
                                sustainable solutions. Our proposed initiative aims to repurpose solid waste
                                material, turning them into artistic installation that not only beautify the
                                city but also promote environmental awareness.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-1-1.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-garbage-1"></span>
                                </div>
                            </div>
                            <div class="services-one__content-box">
                                <div class="services-one__content">
                                    <h3 class="services-one__title"><a href="{{ 'zero-waste' }}">Zero Waste</a>
                                    </h3>
                                </div>
                                <div class="services-one__hover">
                                    <h3 class="services-one__hover-title"><a href="{{ 'zero-waste' }}">Zero
                                            Waste</a>
                                    </h3>
                                    <!-- <p class="services-one__hover-text">Lorem ipsum dolor sit amet, adipelit do.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-1-2.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-dumpster"></span>
                                </div>
                            </div>
                            <div class="services-one__content-box">
                                <div class="services-one__content">
                                    <h3 class="services-one__title"><a href="{{ 'dumpster-rental' }}">Dumpster
                                            Rental</a></h3>
                                </div>
                                <div class="services-one__hover">
                                    <h3 class="services-one__hover-title"><a href="{{ 'dumpster-rental' }}">Dumpster
                                            Rental</a></h3>
                                    <!-- <p class="services-one__hover-text">Lorem ipsum dolor sit amet, adipelit do.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-1-3.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-portable-toilets"></span>
                                </div>
                            </div>
                            <div class="services-one__content-box">
                                <div class="services-one__content">
                                    <h3 class="services-one__title"><a href="{{ 'portable-toilet' }}">Portable
                                            Toilet</a></h3>
                                </div>
                                <div class="services-one__hover">
                                    <h3 class="services-one__hover-title"><a href="{{ 'portable-toilet' }}">Portable
                                            Toilet</a></h3>
                                    <!-- <p class="services-one__hover-text">Lorem ipsum dolor sit amet, adipelit do.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="assets/images/services/services-1-4.jpg" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-triangular-arrows-sign-for-recycle"></span>
                                </div>
                            </div>
                            <div class="services-one__content-box">
                                <div class="services-one__content">
                                    <h3 class="services-one__title"><a href="{{ 'recylcing-services' }}">Recycling
                                            Service</a></h3>
                                </div>
                                <div class="services-one__hover">
                                    <h3 class="services-one__hover-title"><a href="{{ 'recylcing-services' }}">Recycling
                                            Service</a></h3>
                                    <!-- <p class="services-one__hover-text">Lorem ipsum dolor sit amet, adipelit do.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--Have Waste Start-->
    <section class="have-waste">
        <div class="container">
            <div class="have-waste__inner wow fadeInUp" data-wow-delay="100ms">
                <div class="have-waste__left">
                    <h3 class="have-waste__content">Call or Message </h3>
                    <div class="have-waste__icon">
                        <span class="icon-phone-ringing"></span>
                    </div>
                </div>
                <div class="have-waste__right">
                    <h4 class="have-waste__contact-info">
                        <!-- <span class="have-waste__contact-text">Lorem ipsum dolor sit am cons sid</span> -->
                        <a href="tel:12463330079" class="have-waste__contact-number">91+ 8120538564</a>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!--Have Waste End-->

    <!--Project One Start-->
    <section class="project-one">
        <div class="project-one-bg-box">
            <div class="project-one-bg" style="background-image: url(assets/images/backgrounds/project-one-bg.jpg)">
            </div>
        </div>
        <div class="project-one__container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Recent Closed Projects</span>
                <h2 class="section-title__title">Recently We Successfully Completed <br> Some Products</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/product.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/product1.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/product2.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/product3.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project One End-->


    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-bg" style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Customers Feedbacks</span>
                            <h2 class="section-title__title">What Our Customers Are Talking ABout Our Services
                            </h2>
                        </div>
                        <p class="testimonial-one__text-1">Working with 'Bekar ko Akaar' has been an inspiring
                            journey. Their dedication to sustainability and community empowerment is truly
                            commendable. </p>
                        <a href="{{ 'testimonials' }}" class="thm-btn testimonial-one__btn">View All Feedbacks</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="testimonial-one__right">
                        <!--Testimonial One People-->
                        <div class="testimonial-one__people">
                            <img src="assets/images/testimonial/testimonial-one-people1-1.jpg" alt="">
                        </div>
                        <div class="testimonial-one__people testimonial-one__people-2">
                            <img src="assets/images/testimonial/testimonial-one-people1-2.jpg" alt="">
                        </div>
                        <div class="testimonial-one__people testimonial-one__people-3">
                            <img src="assets/images/testimonial/testimonial-one-people1-3.jpg" alt="">
                        </div>
                        <div class="testimonial-one__people testimonial-one__people-4">
                            <img src="assets/images/testimonial/testimonial-one-people1-4.jpg" alt="">
                        </div>
                        <div class="testimonial-one__people testimonial-one__people-5">
                            <img src="assets/images/testimonial/testimonial-one-people1-5.jpg" alt="">
                        </div>
                        <div class="testimonial-one__people testimonial-one__people-6">
                            <img src="assets/images/testimonial/testimonial-one-people1-6.jpg" alt="">
                        </div>

                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                            data-owl-options='{
                                "loop": true,
                                "items": 1,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>

                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__feedback-box">
                                    <div class="testimonial-one__feedback">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <h3 class="testimonial-one__title"></h3>
                                </div>
                                <p class="testimonial-one__text">The selfies and park made from waste material
                                    are visually appealing and attractive and also highlight the importance of
                                    waste reduction and upcycling in community.</p>
                                <div class="testimonial-one__client-info-box">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Nagar Nigam, Jhansi</h4>
                                            <p class="testimonial-one__client-title">Customer</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                            </div>

                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__feedback-box">
                                    <div class="testimonial-one__feedback">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <h3 class="testimonial-one__title"></h3>
                                </div>
                                <p class="testimonial-one__text">Appreciable expertise, passion and commitment
                                    to promote sustainable practices and awareness.</p>
                                <div class="testimonial-one__client-info-box">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">ICAR- Central Agroforestry
                                                Research Institute, Jhansi </h4>
                                            <p class="testimonial-one__client-title">Customer</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                            </div>

                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__feedback-box">
                                    <div class="testimonial-one__feedback">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <h3 class="testimonial-one__title"></h3>
                                </div>
                                <p class="testimonial-one__text">Impressed by the creativity and impact of Bekar
                                    ko Akaar's initiatives. Keep up the great work!</p>
                                <div class="testimonial-one__client-info-box">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Bundelkhand University,
                                                Jhansi</h4>
                                            <p class="testimonial-one__client-title">Customer</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single-->
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__feedback-box">
                                    <div class="testimonial-one__feedback">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <h3 class="testimonial-one__title"></h3>
                                </div>
                                <p class="testimonial-one__text">"Fantastic experience with Bekar ko Akaar -
                                    their dedication to sustainability shines through in everything they do."
                                </p>
                                <div class="testimonial-one__client-info-box">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Jhansi Govt. Museum</h4>
                                            <p class="testimonial-one__client-title">Customer</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quote"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->
@endsection
