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
                    <h2>Community Participation</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Community Participation</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title">Participation In Community, Social & Civil Activities</h2>
        </div>
        <div class="row" >
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p> Participation in community, social and civic activities is one of the most popular NDIS supports utilised.

                            This is because it is so important to go out in the community, meet people, try new things and have fun, for overall wellbeing.

                            Activities may be provided in a centre or in community settings at standard or higher intensity rates. </p>
                    </div><br>
                    <h4>Meet People, Try New Things & Have Fun, Individually Or As Part Of A Group </h4><br>
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>  It is also important that each participant decides what activities they want to engage in. Activities could include joining a club, trying a new hobby, catching up with friends, learning a new skill or even being a volunteer. Activities can be undertaken either individually or part of a group. It all depends on what a participant’s needs and goals are.

                            It is the role of ResicareSA to provide support to participants during these activities. This includes transport, as well as support while the activity is being undertaken, as well as developing a participant’s ability to partake in these activities. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="why-choose-one__right">
                    <div class="why-choose-one__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <img src="{{ asset('front') }}/assets/images/service/4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ Page End-->
<section class="pricing-page">
    <div class="container">
        <div class="pricing-page__main-tab-box tabs-box">
            <div class="tabs-content">
                <!--tab-->
                <div class="tab active-tab" id="yearly">
                    <div class="pricing-page__inner">
                        <div class="row">
                            <!--Pricing Page Single Start-->
                            <div class="col-xl-12 col-lg-12">
                                <div class="pricing-page__single">
                                    <div class="pricing-page__single-inner">
                                        <div class="pricing-page__price-box">
                                            <h3 class="pricing-page__price">Community Participation Activities Offered</h3>
                                        </div>
                                        <div class="text">
                                            <p>Some of the many activities participants can take part in include: </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <ul class="list-unstyled pricing-page__service-list">
                                                    <li class="mt-3">
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p> Volunteer work -eg Op.  </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Shops, Meals on Wheels. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Go shopping trips. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Go to a sporting event.  </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Visit a park.  </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Go to the movies. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Learn to cook. </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="list-unstyled pricing-page__service-list">
                                                    <li class="mt-3">
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p> Go swimming. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Learn a new craft. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Go to the zoo.  </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Riding for the Disabled. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Visit the beach. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Visit friends.  </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Outings to cafes. </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="list-unstyled pricing-page__service-list">
                                                    <li class="mt-3">
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p> Join a club.  </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Go fishing. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Visit an art gallery or museum. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Go to the theatre.  </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Learn to play a musical instrument.  </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Visit the gym. </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Page Single End-->
                        </div>
                    </div>
                </div>
                <!--tab-->
            </div>
        </div>
    </div>
</section>
@endsection
