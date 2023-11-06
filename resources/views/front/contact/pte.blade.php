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
                    <h2>PTE</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">PTE</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title_academia">Difference between PTE & IELTS Exam</h2>
        </div>
        <div class="row" >
            <div class="">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>Operational difference: The major difference between IELTS and PTE lies in the way they are administered. Candidates can choose between a Computer-based or Paper-based test with IELTS while The PTE exam is conducted via a computer only. Thus, applicants who are not proficient in using a computer may choose to give IELTS. </p>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Offered Test Types:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> While both PTE and IELTS have academic tests, IELTS General Training is mostly preferred by applicants for immigration purposes. </p>
                                    </div>
                                </li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Assessment Evaluation: </h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> For speaking assessment, candidates taking the PTE exam talk into a microphone while IELTS candidates demonstrate speaking skills in front of an examiner. The reading and writing sections of the IELTS exam are marked physically by an examiner while it is machine-marked in the case of PTE.</p>
                                    </div>
                                </li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Duration:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> IELTS exams take 3.11 hours to complete, which is less than the PTE exam, which takes 2.50 hours. </p>
                                    </div>
                                </li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Exam Structure:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Many questions on the PTE exam are integrated. Thus, reading, writing, speaking, and listening to questions could be intertwined. This is not the case with IELTS, where each section is assessed separately.</p>
                                    </div>
                                </li>
                        </div>
                    </div>
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>Different universities may prefer either PTE or IELTS based on their policies. However, to help students who have invested considerable time and resources preparing for one type of exam, it was decided by test organisations to accept a converted score. Additionally, most universities believed that since the format and grading methods of the two exams differ in testing the same proficiency (knowledge of English language). It would be in the interest of students to accept converted PTE to IELTS scores.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ Page End-->
@endsection
