@extends('layout.app')
@section('contant')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact Us</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ '/' }}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact One Start-->
    <section class="contact-one contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Contact With Us</span>
                            <h2 class="section-title__title">Have Questions? Feel Free to Write Us</h2>
                        </div>
                        <p class="contact-one__text">Have a question, comment, or collaboration idea? We'd love to hear from
                            you! Use the contact information below to reach out to the Bekar ko Akaar team.</p>
                        <ul class="list-unstyled contact-one__info">
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="text">
                                    <p>Call Anytime</p>
                                    <a href="tel:12463330088">+91 8120538564</a>
                                </div>
                            </li>
                            <li>

                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text">
                                    <p>Write Email</p>
                                    <a href="mailto:needhelp@wostin.com">bekarkoaakar@gmail.com</a>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <form action="{{ 'contactForm' }}" method="POST" class="contact-one__form ">
                            @csrf
                            <div class="row">
                                @include('massage')
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <input type="text" value="{{ old('first_name') }}" name="first_name"
                                            id="first_name" class=" @error('first_name') is-invalid @enderror"
                                            placeholder="First Name">
                                        @error('first_name')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <input type="text" value="{{ old('last_name') }}" name="last_name" id="last_name"
                                            class=" @error('last_name') is-invalid @enderror" placeholder="Last Name">
                                        @error('last_name')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <input type="email" value="{{ old('email') }}" name="email" id="email"
                                            class=" @error('email') is-invalid @enderror" placeholder="Your Email">
                                        @error('email')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <input type="text" value="{{ old('phone') }}" name="phone" id="phone"
                                            class=" @error('phone') is-invalid @enderror" placeholder="Your Phone">
                                        @error('phone')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__form-input-box ">
                                        <textarea class=" @error('massage') is-invalid @enderror" name="massage" id="massage" rows="6"
                                            placeholder="Give us more details..">{{ old('massage') }}</textarea>
                                        @error('massage')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="thm-btn contact-one__btn">Send a
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--Google Map Start-->
    <section class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map__one" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->
@endsection
