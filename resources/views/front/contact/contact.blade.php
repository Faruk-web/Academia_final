@extends('front.master')
@section('title')
    About us
@endsection
@section('body')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('front')}}/assets/images/resica/about.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Contact</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">Contact Us</h2>
                    </div>
                    <ul class="contact-page__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-help"></span>
                            </div>
                            <div class="content">
                                <p>Call</p>
                                <h4><a href="tel:+923076806860">01847050934</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-mailbox"></span>
                            </div>
                            <div class="content">
                                <p>Email</p>
                                <h4><a href="ask@academiaglobal.org">ask@academiaglobal.org</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-maps-and-flags"></span>
                            </div>
                            <div class="content">
                                <p>Location</p>
                                <h4>Snowdrops, House# 78, Level - 4, Road# 11, Block# M, Banani, Dhaka, Bangladesh</h4>
                            </div>
                        </li>
                    </ul>
                    <div class="contact-page__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="contact-page__right">
                    <div class="contact-page__form-box">
                        <form action="assets/inc/sendemail.php" class="contact-page__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__input-box">
                                        <div class="contact-page__showing-sort">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected="">Sort by popular</option>
                                                <option value="1">Sort by popular-01</option>
                                                <option value="2">Sort by popular-02</option>
                                                <option value="3">Sort by popular-03</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea name="message" placeholder="Write Comment"></textarea>
                                    </div>
                                    <div class="contact-page__btn-box">
                                        <button type="submit" class="thm-btn contact-page__btn">Send a
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--Google Map Start-->
<section class="google-map__three">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__one" allowfullscreen=""></iframe>

</section>
<!--Google Map End-->
@endsection
