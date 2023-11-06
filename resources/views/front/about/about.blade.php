@extends('front.master')
@section('title')
    About us
@endsection
@section('body')
 <!--About Three Start-->
 <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('front')}}/assets/images/resica/about.png);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>ABOUT US</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">ABOUT</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <section class="why-choose-one">
        <div class="container mt-5">
            <div class="row">
            <div class="blog-details__content">
                    <h3 class="blog-details__title">ResicareSA Values</h3>
                    <p class="blog-details__text-1"> Welcome to Resicare SA, your trusted NDIS-registered provider dedicated to enhancing lives and fostering independence. As one of the premier SIL (Supported Independent Living) providers in the area, we take pride in offering exceptional services that empower individuals with choice and freedom. If you're eligible for SDA (Specialist Disability Accommodation), our team ensures that you receive the necessary funding to make your living situation not just comfortable but tailored to your preferences. Our mission centres around granting you the autonomy to shape your lifestyle according to your wishes.</p>
                    <p class="blog-details__text-1 mt-4"> At Resicare SA, we're committed to crafting a support system that enables you to live life on your terms. Our approach revolves around personalisation; we understand that your needs are unique, and we're here to assist you in every aspect of daily living. Whether it's aiding you in your morning routine, ensuring meals are enjoyed, or providing transportation to various engagements, be they social, recreational, educational, or medical, our comprehensive support network has you covered.</p>
                    <p class="blog-details__text-1 mt-4"> Discover the ResicareSA difference, where compassion meets innovation and your aspirations take centre stage. Join us on this journey of empowerment and choice as we work together to create a life that's vibrantly independent and uniquely yours.</p>
                </div>
            </div>
        </div>
    </section>
        <!--Counter Two Start-->
        <section class="counter-two">
            <div class="container">
                <div class="row">
                    <!--Counter Two Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__count count-box">
                                <h3 class="count-text" data-stop="82" data-speed="1500">00</h3>
                                <span>k</span>
                            </div>
                            <p class="counter-two__text">Projects
                                <br> completed</p>
                        </div>
                    </div>
                    <!--Counter Two End-->
                    <!--Counter Two Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single counter-two__single-2">
                            <div class="counter-two__count count-box">
                                <h3 class="count-text" data-stop="170" data-speed="1500">00</h3>
                            </div>
                            <p class="counter-two__text">Honorable
                                <br> awards</p>
                        </div>
                    </div>
                    <!--Counter Two End-->
                    <!--Counter Two Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single counter-two__single-3">
                            <div class="counter-two__count count-box">
                                <h3 class="count-text" data-stop="80" data-speed="1500">00</h3>
                                <span>k</span>
                            </div>
                            <p class="counter-two__text">Satisfied
                                <br> customers</p>
                        </div>
                    </div>
                    <!--Counter Two End-->
                    <!--Counter Two Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single counter-two__single-2 counter-two__single-4">
                            <div class="counter-two__count count-box">
                                <h3 class="count-text" data-stop="680" data-speed="1500">00</h3>
                            </div>
                            <p class="counter-two__text">Professional
                                <br> team</p>
                        </div>
                    </div>
                    <!--Counter Two End-->
                </div>
            </div>
        </section>
        <!--Counter Two End -->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__inner">
                <div class="testimonial-one__bg" style="background-image: url({{asset('front')}}/assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="testimonial-one__right">
                                <div class="testimonial-one__img-1">
                                    <img src="{{asset('front')}}/assets/images/testimonial/testimonial-one-img-1.jpg" alt="">
                                    <div class="testimonial-one__img-2">
                                        <img src="{{asset('front')}}/assets/images/testimonial/testimonial-one-img-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": false,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                                "items": 1
                                            },
                                            "992": {
                                                "items": 1
                                            },
                                            "1200": {
                                                "items": 1
                                            }
                                        }
                                }'>
                                    <!--Testimonial One Single Start-->
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info-and-quote">
                                                <div class="testimonial-one__client-info">
                                                    <h3>Respect</h3>
                                                    {{-- <p>Co Founder</p> --}}
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">It is due to their excellent service,
                                                competitive pricing and customer support. It’s through refresing to get
                                                such
                                                a personal touch. Duis aute irure dolor in reprehenderit esse cillum.
                                            </p>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                    <!--Testimonial One Single Start-->
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info-and-quote">
                                                <div class="testimonial-one__client-info">
                                                    <h3>Honesty</h3>
                                                    {{-- <p>Co Founder</p> --}}
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">It is due to their excellent service,
                                                competitive pricing and customer support. It’s through refresing to get
                                                such
                                                a personal touch. Duis aute irure dolor in reprehenderit esse cillum.
                                            </p>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                    <!--Testimonial One Single Start-->
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info-and-quote">
                                                <div class="testimonial-one__client-info">
                                                    <h3>Confidentiality</h3>
                                                    {{-- <p>Co Founder</p> --}}
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">It is due to their excellent service,
                                                competitive pricing and customer support. It’s through refresing to get
                                                such
                                                a personal touch. Duis aute irure dolor in reprehenderit esse cillum.
                                            </p>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info-and-quote">
                                                <div class="testimonial-one__client-info">
                                                    <h3>Development & Improvement</h3>
                                                    {{-- <p>Co Founder</p> --}}
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">It is due to their excellent service,
                                                competitive pricing and customer support. It’s through refresing to get
                                                such
                                                a personal touch. Duis aute irure dolor in reprehenderit esse cillum.
                                            </p>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Video Two Start-->
        <section class="video-two">
            <div class="video-two__bg jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%" style="background-image: url({{asset('front')}}/assets/images/backgrounds/video-two-bg.jpg);"></div>
            <div class="container">
                <div class="video-two__inner">
                    <div class="video-two__rounded-text">
                        <a target="_blank" href="https://www.youtube.com/embed/EX6TWd87gwU?si=LK1K36aPR0Q554NF" class="video-two__curved-circle-box ">
                            <div class="curved-circle-2">
                                Watch Our agency portfolio Video
                            </div><!-- /.curved-circle -->
                            <div class="video-two__icon">
                                <span class="fa fa-play"></span>
                            </div>
                        </a>
                    </div>
                    <h3 class="video-two__title"> Disability Accommodation</h3>
                </div>
            </div>
        </section>
        <!--Video Two End -->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    {{-- <p class="section-title__tagline"><span>//</span> our smart people <span>//</span> --}}
                    {{-- </p> --}}
                    <h2 class="section-title__title">Welcome to the family </h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    @foreach ($privacy as $item)
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{ asset($item->image) }}" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="#"><span class="fas fa-share-alt"></span></a>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__name-box">
                                    <h3><a href="{{ route('user.privacy',$item->id) }}"> {{ $item->name }}</a></h3>
                                    <p>{{ $item->title }}</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="{{ route('user.privacy',$item->id) }}"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--Team One End-->

@endsection
