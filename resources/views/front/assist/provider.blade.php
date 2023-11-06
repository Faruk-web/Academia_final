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
                    <h2>Provider</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Provider</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title_academia">Comprehensive Value-Added Services:</h2>
        </div>
        <div class="row" >
            <div class="">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>At Academia International, we are committed to providing a holistic and one-stop solution for our
                            students. In addition to our core services, we are pleased to offer a range of valuable services through
                            our esteemed partner network. These services are designed to enhance the overall experience of
                            studying abroad and ensure that our students have access to essential resources and support. Here&#39;s an
                            in-depth look at our value-added services:</p>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">1. Education Loan Assistance:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> We understand that financing an international education can be a significant concern
                                            for students and their families.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> To address this, we have established partnerships with both nationalized banks, such as
                                            SBI, private banks like AXIS, and reputable financial institutions like Credila.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Through these affiliations, we assist students in navigating the process of securing
                                            education loans, making their dream of studying abroad more attainable.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">2. Student Health Cover:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Student health cover is often a mandatory requirement before visa lodgment in many
                                            countries.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our expert counselors leverage our trusted partner network to assist students in
                                            purchasing health insurance that meets all necessary requirements.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>This ensures that students have access to essential healthcare coverage during their
                                            international education journey.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">3. Accommodation Support:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Finding suitable accommodation in a foreign country can be a daunting task.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our valued partner network includes accommodation providers who offer a range of
                                            options tailored to students&#39; needs and preferences.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our counselors work closely with students to help them select the best accommodation
                                            solution, and our partners assist with the application process.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Enhanced Value-Added Services:</h4>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">4. Scholarship and Financial Aid Application:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> While we assist students in identifying scholarship opportunities, we go further by
                                            providing support in the actual application process.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Our experts help students craft compelling scholarship applications, increasing their
                                            chances of securing financial assistance.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">5. Travel and Flight Booking:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Preparing for the journey to a new country can be overwhelming, especially for first-
                                            time travelers.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our comprehensive services include assistance with travel arrangements, including
                                            flight booking, itinerary planning, and travel insurance recommendations.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">6. Cultural Orientation and Language Support:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Adapting to a new culture and language can be challenging.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our pre-departure services include cultural orientation sessions and language support,
                                            helping students feel more comfortable and prepared for the cultural transition.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">7. Visa Extension and Renewal Guidance:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> As students’ progress in their academic journey, they may need to extend or renew their
                                            visas.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our experts offer guidance on navigating the visa extension or renewal process,
                                            ensuring students maintain legal status in their host country.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">8. Part-Time Job Assistance:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Many students seek part-time employment to support their living expenses abroad.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>We provide guidance on finding part-time job opportunities and understanding the local
                                            regulations governing student employment.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">9. Airport Arrival Assistance:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Arriving in a new country can be overwhelming, but our support doesn&#39;t end with visa
                                            assistance.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>We offer airport arrival assistance, ensuring that students have a smooth transition from
                                            their home country to their study destination.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">10. Counseling and Well-Being Services:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Mental and emotional well-being are essential aspects of a successful international
                                            education experience.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our counseling services extend to providing resources for students to access mental
                                            health support and wellness programs.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">11. Alumni Network Access:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our students become part of a valuable alumni network.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>We facilitate connections with alumni who can offer insights, advice, and support
                                            throughout students&#39; academic journeys and beyond.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">12. Legal and Immigration Consultations:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Navigating legal and immigration matters in a foreign country can be complex.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Our experts offer consultations and guidance on immigration issues, ensuring that
                                            students remain compliant with local laws and regulations.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>Academia International&#39;s comprehensive suite of value-added services reflects our unwavering
                            commitment to students&#39; holistic well-being and success while studying abroad. We aim to provide a
                            support system that addresses not only the academic aspects but also the practical, cultural, and
                            personal facets of their international education journey. Our mission is to be the trusted partner that
                            students can rely on at every step of their educational adventure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ Page End-->
@endsection
