@extends('layout.app')
@section('contant')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Our Product</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ 'index' }}">Home</a></li>
                    <li>Product</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Projects Page Start-->
    <section class="projects-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/gallry.png" height="300px" alt="project images">
                        </div>
                        <div class="project-one__content">
                            <!-- <p class="project-one__sub-title">Waste</p> -->
                            <h3 class="project-one__title"> RAI NRITYA WALL PAINTING
                            </h3>
                            <p>A well known traditional dance from BUNDELKHAND.
                                Unique and beautiful, designed decorative item for home decor/office/living room wall
                                hanging handmade painting by professional artist.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/event2.png" height="300px" alt="">
                        </div>
                        <div class="project-one__content">
                            <!-- <p class="project-one__sub-title">Waste</p> -->
                            <h3 class="project-one__title">SITTING CHAIR WITH TABLE- </h3>
                            <p>TYRE SITTING CHAIR WITH TABLE- Handmade, modern style and unique seating furniture comes with
                                cushioned seat and dispenses great posture and overly comfortable feel to the body</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/gallary3.png" height="300px" alt="">
                        </div>
                        <div class="project-one__content">
                            <p class="project-one__sub-title">Waste Pickup</p>
                            <h3 class="project-one__title">DRUM BENCH </h3>
                            <p>outdoor furniture with a sturdy construction, very durable. Relax in comfort and style with
                                iconic table</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/gallery/galalry1.png" height="300px" alt="">
                        </div>
                        <div class="project-one__content">
                            <p class="project-one__sub-title">Waste Pickup</p>
                            <h3 class="project-one__title">DRUM BENCH </h3>
                            <p>outdoor furniture with a sturdy construction, very durable. Relax in comfort and style with
                                iconic table</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/event1.png" height="300px" alt="">
                        </div>
                        <div class="project-one__content">
                            <!-- <p class="project-one__sub-title">Waste Pickup</p> -->
                            <h3 class="project-one__title"><a href="{{ 'gallery' }}"> Events</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/event.png" height="300px" alt="">
                        </div>
                        <div class="project-one__content">
                            <!-- <p class="project-one__sub-title">Waste Pickup</p> -->
                            <h3 class="project-one__title"><a href="{{ 'gallery' }}">workshops</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Project One Single-->
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="assets/images/resources/brand4.png" height="300px" alt="">
                        </div>
                        <div class="project-one__content">
                            <!-- <p class="project-one__sub-title">Waste Pickup</p> -->
                            <h3 class="project-one__title"><a href="{{ 'gallery' }}">Kratitva Collection</a>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Projects Page End-->
@endsection
