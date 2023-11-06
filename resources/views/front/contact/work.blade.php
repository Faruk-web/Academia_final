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
            <h2>Work with ResicareSA</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Work with ResicareSA</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="section-title text-left">
                <p class="text-center">ResicareSA provides a professional and great team work environment with a clear focus on providing the best care for our clients. <br>
                    Thank you for showing an interest and joining a leading provider in South Australia. </p>
            </div>
            <div class="col-xl-12 col-lg-12">
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
<!--Google Map End-->
@endsection
