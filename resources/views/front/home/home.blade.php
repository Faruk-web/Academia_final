@extends('front.master')

@section('title')
    Home
@endsection
<style>
    .main-slider__title {

}
</style>
@section('body')
    <!-- Main Sllider Start -->
    <section class="main-slider">
        <div class="main-slider__phone">
            <a href="tel:0422 792 979">01847050934</a>
        </div>
        <div class="main-slider__mail">
            <a href="#">ask@academiaglobal.org</a>
        </div>
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <div class="item main-slider__slide-1">
                <div class="main-slider__bg" style="background-image: url({{ asset('front') }}/assets/images/resica/1.png);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="main-slider__content">
                                <p class="main-slider__star">*</p>
                                <div class="main-slider__text-box">
                                    <p class="main-slider__text">We offer you the best  experience in applying to <br> 300+ University and Colleges in diffrent destinations.</p>
                                </div>
                                <h2 class="main-slider__title">welcome to Academia Global<br> <span>Lets Spend / Invest On Education</span> <a href="3" class="main-slider__btn"><i class="icon-right-arrow1"></i></a></h2>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="video-two__inner">
                                <div class="video-two__rounded-text">
                                    <a target="_blank" href="https://www.youtube.com/embed/0Vyy3CjCcKk?si=GQvj1dz31ZtMtL9F" class="video-two__curved-circle-box">
                                        <div class="curved-circle-2">
                                            Watch Our agency portfolio Video
                                        </div><!-- /.curved-circle -->
                                        <div class="video-two__icon" style="line-height: 75px;">
                                            <span class="fa fa-play"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-2">
                <div class="main-slider__bg" style="background-image: url({{ asset('front') }}/assets/images/resica/2.png);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="main-slider__content">
                                <p class="main-slider__star">*</p>
                                <div class="main-slider__text-box">
                                    <p class="main-slider__text">We offer you the best  experience in applying to <br> 300+ University and Colleges in diffrent destinations.</p>
                                </div>
                                <h2 class="main-slider__title">travels immigration & visa<br> <span>Lets Spend / Invest On Education</span> <a href="#" class="main-slider__btn"><i class="icon-right-arrow1"></i></a></h2>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="video-two__inner">
                                <div class="video-two__rounded-text">
                                    <a  target="_blank" href="https://www.youtube.com/embed/EX6TWd87gwU?si=LK1K36aPR0Q554NF" class="video-two__curved-circle-box">
                                        <div class="curved-circle-2">
                                            Watch Our agency portfolio Video
                                        </div><!-- /.curved-circle -->
                                        <div class="video-two__icon" style="line-height: 75px;">
                                            <span class="fa fa-play"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Sllider Start -->

    <!--Services One Start-->
    <section class="services-one">
        <div class="section-title text-center">
            <h2 class="section-title__title mb-5">Our Expertise: Let Us Skilfully Guide You</h2>
        </div>
        <div class="container">
            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/service/1.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="{{ route('student.visa') }}">Student Visa</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-layer"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title text_twoline_allow"><a href="{{ route('student.visa') }}">Student Visa</a>
                                </h3>
                                <p class="services-one__hover-text text_twoline_allow">People who want to invest in, or start businesses abroad. Expected to support the development.
                                </p>
                                <div class="services-one__hover-arrow">
                                    <a href="{{ route('student.visa') }}"><span class="icon-down-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/service/2.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="{{ route('visit.visa') }}">Post Graduate Visa</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-cellphone"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="{{ route('visit.visa') }}">Post Graduate Visa</a>
                                </h3>
                                <p class="services-one__hover-text text_twoline_allow">For the persons whose jobs require a minimum work experience that are not temporary or seasonal.</p>
                                <div class="services-one__hover-arrow">
                                    <a href="{{ route('visit.visa') }}"><span class="icon-down-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/service/3.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="{{ route('program.selection') }}">Partner Visa</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-megaphone"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="{{ route('program.selection') }}">Partner Visa</a>
                                </h3>
                                <p class="services-one__hover-text text_twoline_allow">We consult for permanent residents visa documents issued to immigrants under the Immigration and Nationality Act.</p>
                                <div class="services-one__hover-arrow">
                                    <a href="{{ route('program.selection') }}"><span class="icon-down-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                 <!--Services One Single Start-->
                 <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/service/4.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="{{ route('visit.visa') }}">Visitor Visa</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-megaphone"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="{{ route('visit.visa') }}">Visitor Visa</a>
                                </h3>
                                <p class="services-one__hover-text text_twoline_allow">Permit To Work Refers to management systems used to ensure that work is done safely & efficiently.</p>
                                <div class="services-one__hover-arrow">
                                    <a href="{{ route('visit.visa') }}"><span class="icon-down-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                 <!--Services One Single Start-->
                 <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/service/7.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="{{ route('immigration') }}">Buisness Migration</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-megaphone"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="{{ route('immigration') }}">Buisness Migration</a>
                                </h3>
                                <p class="services-one__hover-text text_twoline_allow">Visas for the people who want to travel to and enter as a visitor for up to 6 months.We stick the visitor visa.</p>
                                <div class="services-one__hover-arrow">
                                    <a href="{{ route('immigration') }}"><span class="icon-down-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/service/6.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="{{ route('student.visa.extension') }}">Skiled Worker Visa</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-megaphone"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="{{ route('student.visa.extension') }}">Skiled Worker Visa</a>
                                </h3>
                                <p class="services-one__hover-text text_twoline_allow">Visas for the people who want to travel to and enter as a visitor for up to 6 months.We stick the visitor visa.</p>
                                <div class="services-one__hover-arrow">
                                    <a href="{{ route('student.visa.extension') }}"><span class="icon-down-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
            </div>
        </div>
    </section>
    <!--Services One End-->
     <!--Blog Page Start-->
     <section class="blog-page">
        <div class="section-title text-center">
            <h2 class="section-title__title mb-5">Popular Courses</h2>
        </div>
        <div class="container">
            <div class="row">
                <!--Blog One Single Start-->
                @foreach ($property as $iteam)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset($iteam->image) }}" alt="">
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <p><span class="fas fa-tags"></span>Design</p>
                                </li>
                                <li>
                                    <p><span class="fas fa-comments"></span>2 Comments</p>
                                </li>
                            </ul>
                            <div class="blog-one__title-box">
                                <h3 class="blog-one__title"><a href="{{ route('top.courses.details',$iteam->id) }}">{{ $iteam->name }}</a></h3>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('top.courses.details',$iteam->id) }}"><span class="icon-right-lg-arrow"></span></a>
                                <a href="{{ route('top.courses.details',$iteam->id) }}" class="blog-one__btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                @endforeach
            </div>
        </div>
    </section>
    <!--Blog Page End-->
 <!--Team One Start-->
 <section class="team-one">
    <div class="container">
        <div class="section-title text-center">
            <p>Enbark On Your Desired Destination</p>
            <h2 class="section-title__title">Country!</h2>
        </div>
        <div class="row">
            <!--Team One Single Start-->
            @foreach ($privacy as $item)
            <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img class="lazy-load" loading="lazy" data-src="{{ asset($item->image) }}" alt="">
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
<!--Team One Start-->
<section class="team-one">
    <div class="container">
        <div class="section-title text-center">
            <p>Inspiring Journeys And Ramarkable Experience Of Our</p>
            <h2 class="section-title__title">Studends !</h2>
        </div>
        <div class="row">
            <!--Team One Single Start-->
            <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="">
                            <iframe width="300" height="200" class="lazy-load" loading="lazy" data-src="https://www.youtube.com/embed/d2Tm3Yx4HWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team One Single Start-->
            <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="">
                            <iframe width="300" height="200" class="lazy-load" loading="lazy" data-src="https://www.youtube.com/embed/vw-KWfKwvTQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!--Team One Single Start-->
            <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="">
                            <iframe width="300" height="200" class="lazy-load" loading="lazy" data-src="https://www.youtube.com/embed/_UVfwBqcnbM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
            <!--Team One Single Start-->
            <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-one__single">
                    <div class="team-one__img-box">
                        <div class="">
                            <iframe width="300" height="200" class="lazy-load" loading="lazy" data-src="https://www.youtube.com/embed/IvyAMw7B39k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team One End-->
<!--Testimonial Two Start-->
<section class="testimonial-two">
    <div class="container">
        <div class="section-title text-center">
            <p>TESTIMONIALS</p>
            <h2 class="section-title__title">Feedback From Our Clients</h2>
        </div>
        <div class="testimonial-two__slider">

            <div class="testimonial-two__thumb-outer-box">
                <div class="testimonial-two__thumb-carousel owl-carousel owl-theme">
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/testimonial/testimonial-2-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/testimonial/testimonial-2-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/testimonial/testimonial-2-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-two__main-content">
                <div class="testimonial-two__carousel owl-carousel owl-theme">
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/testimonial/testimonial-two-content-img-1-1.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">This is due to their excellent service,
                                    competitive pricing and customer support. It’s throughly refresing to get
                                    such a personal touch.</p>
                                <h3 class="testimonial-two__client-name">Dainl christine <span> . Co
                                        founder</span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/testimonial/testimonial-two-content-img-1-2.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">This is due to their excellent service,
                                    competitive pricing and customer support. It’s throughly refresing to get
                                    such a personal touch.</p>
                                <h3 class="testimonial-two__client-name">Christine eve <span> . Co
                                        founder</span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/testimonial/testimonial-two-content-img-1-3.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">This is due to their excellent service,
                                    competitive pricing and customer support. It’s throughly refresing to get
                                    such a personal touch.</p>
                                <h3 class="testimonial-two__client-name">Kevin copper <span> . Co founder</span>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--Testimonial Two End-->
 <!--Feature One Start-->
 <section class="feature-one">
    <div class="feature-one__bg-box"></div>
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Our Health Insurance Partners</h2>
        </div>
        <div class="row">
            <!--Feature One Single Start-->
            <div class="col-xl-4 col-lg-6">
                <div class="feature-one__single">
                    <div class="feature-one__img">
                        <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/resources/feature-1-1.jpg" alt="">
                        <div class="feature-one__icon">
                            <span class="icon-team"></span>
                        </div>
                    </div>
                    <div class="feature-one__content">
                        <h3 class="feature-one__title"><a href="services.html">AHM </a></h3>
                        <p>Insurance Company</p>
                        <p class="feature-one__text">scoring parameters in each of the modules.scoring parameters in each of the modules.scoring parameters in each of the modules.</p>
                        <div class="feature-one__arrow">
                            <a href="services.html"><span class="icon-right-arrow1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature One Single End-->
            <!--Feature One Single Start-->
            <div class="col-xl-4 col-lg-6">
                <div class="feature-one__single">
                    <div class="feature-one__img">
                        <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/resources/feature-1-2.jpg" alt="">
                        <div class="feature-one__icon">
                            <span class="icon-customer-support"></span>
                        </div>
                    </div>
                    <div class="feature-one__content">
                        <h3 class="feature-one__title"><a href="team-details.html">MEDIBANK</a></h3>
                        <p>Insurance Company</p>
                        <p class="feature-one__text">scoring parameters in each of the modules.scoring parameters in each of the modules.scoring parameters in each of the modules.</p>
                        <div class="feature-one__arrow">
                            <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature One Single End-->
            <!--Feature One Single Start-->
            <div class="col-xl-4 col-lg-6">
                <div class="feature-one__single">
                    <div class="feature-one__img">
                        <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/resources/feature-1-3.jpg" alt="">
                        <div class="feature-one__icon">
                            <span class="icon-good-quality"></span>
                        </div>
                    </div>
                    <div class="feature-one__content">
                        <h3 class="feature-one__title"><a href="portfolio-details.html">NIB NIB</a></h3>
                        <p>Insurance Company</p>
                        <p class="feature-one__text">scoring parameters in each of the modules.scoring parameters in each of the modules.scoring parameters in each of the modules.</p>
                        <div class="feature-one__arrow">
                            <a href="portfolio-details.html"><span class="icon-right-arrow1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature One Single End-->
        </div>
    </div>
</section>
<!--Feature One End -->
        <section class="team-page">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Meet Our Dedicated Team!</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/team/team-1-1.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
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
                                    <h3><a href="team-details.html">Melika Fonals</a></h3>
                                    <p>Migration Agent</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/team/team-1-2.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
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
                                    <h3><a href="team-details.html">Sophia Arthur</a></h3>
                                    <p>Migration Agent</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/team/team-1-3.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
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
                                    <h3><a href="team-details.html">Robert Walter</a></h3>
                                    <p>Migration Agent</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/team/team-1-4.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
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
                                    <h3><a href="team-details.html">Michael Grey</a></h3>
                                    <p>Migration Agent</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/team/team-1-5.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
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
                                    <h3><a href="team-details.html">David cooper</a></h3>
                                    <p>Designer</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/team/team-1-6.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
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
                                    <h3><a href="team-details.html">Christine eve</a></h3>
                                    <p>Manager</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team Page End-->
        <!--Sliding Text Start -->
<section class="sliding-text">
    <div class="sliding-text__wrap">
        <ul class="sliding-text__list list-unstyled">

                <li>*Assist Daily Personal Activities</li>


                <li>*Assist Travel / Transport</li>


                <li>*Behaviour Support</li>


                <li>*Community Participation</li>


                <li>*Group / Centre Activities</li>


                <li>*Sleepover Support</li>


                <li>*Respite / Support Coordination</li>

        </ul>
    </div>
</section>
<!--Sliding Text Start -->
         <!--Feature One Start-->
 <section class="feature-one">
    <div class="feature-one__bg-box"></div>
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Our Health Insurance Partners</h2>
        </div>
        <div class="row">
            <!--Feature One Single Start-->
            <div class="col-xl-4 col-lg-6">
                <div class="feature-one__single">
                    <div class="feature-one__img">
                        <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/resources/feature-1-1.jpg" alt="">
                        <div class="feature-one__icon">
                            <span class="icon-team"></span>
                        </div>
                    </div>
                    <div class="feature-one__content">
                        <h3 class="feature-one__title"><a href="services.html">Winner </a></h3>
                        <p>Edith Cowan University</p>
                        <p class="feature-one__text">Parameters in each of the modules.scoring parameters</p>
                        <div class="feature-one__arrow">
                            <a href="services.html"><span class="icon-right-arrow1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature One Single End-->
            <!--Feature One Single Start-->
            <div class="col-xl-4 col-lg-6">
                <div class="feature-one__single">
                    <div class="feature-one__img">
                        <img class="lazy-load" loading="lazy" data-src="{{ asset('front') }}/assets/images/resources/feature-1-2.jpg" alt="">
                        <div class="feature-one__icon">
                            <span class="icon-customer-support"></span>
                        </div>
                    </div>
                    <div class="feature-one__content">
                        <h3 class="feature-one__title"><a href="team-details.html">Winner</a></h3>
                        <p>Victoria University</p>
                        <p class="feature-one__text">Parameters in each of the modules.scoring parameters</p>
                        <div class="feature-one__arrow">
                            <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature One Single End-->
            <!--Feature One Single Start-->
            <div class="col-xl-4 col-lg-6">
                <div class="feature-one__single">
                    <div class="feature-one__img">
                        <img class="lazy-load" loading="lazy" data-src             ="{{ asset('front') }}/assets/images/resources/feature-1-3.jpg" alt="">
                        <div class="feature-one__icon">
                            <span class="icon-good-quality"></span>
                        </div>
                    </div>
                    <div class="feature-one__content">
                        <h3 class="feature-one__title"><a href="portfolio-details.html">Winner</a></h3>
                        <p>Southern Cross University</p>
                        <p class="feature-one__text">Parameters in each of the modules.scoring parameters</p>
                        <div class="feature-one__arrow">
                            <a href="portfolio-details.html"><span class="icon-right-arrow1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature One Single End-->
        </div>
    </div>
</section>
    <!--Award One End-->
@endsection
