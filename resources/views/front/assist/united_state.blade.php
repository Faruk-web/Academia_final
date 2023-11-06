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
                    <h2>United State:</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">United State:</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title_academia">United State:</h2>
        </div>
        <div class="row" >
            <div class="">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>Choosing to pursue a Ph.D. is a significant academic and career decision, and several factors need to be
                            considered, including university fees, post-study work opportunities, and potential salaries in different
                            countries. Let&#39;s compare the United States, Canada, Australia, and the United Kingdom in these aspects.</p>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">United States:</h4>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">1. University Fees:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Tuition fees in the United States can vary significantly depending on the institution and the
                                            program of study. Generally, private universities tend to be more expensive than public ones.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Many U.S. universities offer financial aid and scholarships to both domestic and international
                                            Ph.D. students. Research assistantships (RA), teaching assistantships (TA), and fellowships are
                                            common ways to offset tuition costs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>It&#39;s essential to research universities and programs to identify those offering substantial funding
                                            opportunities.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">2. Post-Study Work Opportunities:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text mt-2">
                                        <p> The Optional Practical Training (OPT) program allows international students to work in the U.S.
                                            for up to 12 months (or 36 months for STEM graduates) after completing their studies.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> During OPT, students can gain valuable work experience, potentially leading to long-term
                                            employment through employer-sponsored visas like the H-1B.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">3. Potential Salaries:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text mt-2">
                                        <p>Salaries for Ph.D. holders in the U.S. vary widely by field, industry, and location. In high-demand
                                            fields like technology, engineering, and business, salaries can be quite competitive.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>According to the National Science Foundation, the median salary for doctorate holders in
                                            science and engineering fields was significantly higher than in other sectors.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>In conclusion, the choice of pursuing a Ph.D. in the United States, Canada, Australia, or the United
                            Kingdom involves careful consideration of tuition fees, post-study work opportunities, and potential
                            salaries. Each country has its unique advantages and opportunities, so it&#39;s essential to align your
                            academic and career goals with the specific offerings of your chosen destination. Additionally, factors
                            like visa requirements, quality of life, and personal preferences should also play a role in your decision-
                            making process.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ Page End-->
@endsection
