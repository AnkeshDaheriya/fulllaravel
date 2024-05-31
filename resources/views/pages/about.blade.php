@extends('layout.app')
@section('contant')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>About Us</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ '/' }}">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Always Working Start-->
    <section class="always-working">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="always-working__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">About Company</span>
                            <h2 class="section-title__title">Always Working for a Clean Tomorrow</h2>
                        </div>
                        <p class="always-working__text"><b>“Bekar ko aakar”</b> is an organisation working
                            towards two social issues solid waste management and women empowerment. We convert
                            solid waste produced from the households and industries such as shoes, tires,
                            utensil, iron and wood scrap, plastic bottles, old cloths etc into decorative items
                            for home, office, garden, hotels, park as well as garbage point (GVP points). We
                            provide training and employment to rural women from nearby villages and empowering
                            women through employment opportunities.
                        </p>


                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="always-working__right">
                        <div class="always-working__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <img src="assets/images/resources/always-working-img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Always Working End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand6.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand7.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/resources/brand8.png" alt="">
                    </div><!-- /.swiper-slide -->

                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Manage Waste Two Start-->
    <section class="manage-waste manage-waste-two">
        <div class="manage-waste-bg-box">
            <div class="manage-waste-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/manage-waste-bg.jpg);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="manage-waste__inner">
                        <h3 class="manage-waste__title">Manage Waste Effectively <br> and Reduce Environmental
                            Impact</h3>
                        <div class="manage-waste__btn-box">
                            <a href="{{ 'contact' }}" class="thm-btn manage-waste__btn-2">Contact With us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Manage Waste Two End-->

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

    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="why-choose-one__left">
                        <div class="why-choose-one__img">
                            <img src="assets/images/resources/why-choose-one-img-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="why-choose-one__right">
                        <div class="why-choose-one__content">
                            <h3 class="why-choose-one__title">Why Choose Us?</h3>
                            <p class="why-choose-one__text">At Bekar ko Akaar, we're not just another
                                organization; we're pioneers in the field of sustainable development. Our
                                innovative approach to repurposing waste materials and promoting eco-friendly
                                practices sets us apart as leaders in our industry.</p>
                            <ul class="list-unstyled why-choose-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p> Innovative Solutions for a Sustainable Future
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Passionate Commitment to Environmental Preservation</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p> Expertise and Experience</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose One End-->

    <!--CTA One Start-->
    <section class="cta-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta-one__inner">
                        <h2 class="cta-one__title">Do You Have Waste?</h2>
                        <div class="cta-one__btn-box">
                            <a href="{{ 'contact' }}" class="thm-btn cta-one__btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One  End-->
@endsection
