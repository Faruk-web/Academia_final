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
                    <h2>IELTS</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">IELTS</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title_academia">Using Our IELTS Band Score Calculators</h2>
        </div>
        <div class="row" >
            <div class="">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>Calculating your IELTS band score can be daunting, especially for those new to the IELTS test. However, it can be a straightforward process with the right tools and knowledge. In this article, we will discuss the IELTS test’s various components and how they are scored. We will also provide you with a step-by-step guide on calculating your overall band score. <br>The IELTS test comprises four components: Listening, Reading, Writing, and Speaking. Each component is scored on a scale of 0-9, with 0 being the lowest and 9 being the highest. The scores from each component are then averaged to give you an overall band score.</p>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Listening:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> The listening component of the IELTS test consists of four sections, each with ten questions. The total test duration is approximately 30 minutes to assess your ability to understand spoken English.</p>
                                    </div>
                                </li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Reading:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> The reading component of the IELTS test consists of three sections, with a total of 40 questions. The total test duration is 60 minutes, designed to assess your ability to read and understand academic texts.</p>
                                    </div>
                                </li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Writing:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> The writing component of the IELTS test consists of two tasks. The total test duration is 60 minutes, designed to assess your ability to write in English.</p>
                                    </div>
                                </li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Speaking:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> The speaking component of the IELTS test consists of three parts. Part 1 is a general introduction, Part 2 requires you to speak on a given topic, and Part 3 involves a discussion with the examiner. The total test duration is approximately 11-14 minutes, designed to assess your ability to speak in English.</p>
                                    </div>
                                </li>
                        </div>
                    </div>
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>In conclusion, calculating your IELTS band score is a simple process that requires a basic understanding of the components of the IELTS test and its scoring system. <br> By following the steps outlined in this guide, you can easily calculate your overall band score and take the necessary steps to improve your score.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ Page End-->
@endsection
