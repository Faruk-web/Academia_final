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
                    <h2>Immigration</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Immigration</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title_academia">Immigration</h2>
        </div>
        <div class="row" >
            <div class="">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>Immigration policies and requirements vary from country to country, and the United States, Canada,
                            Australia, and the United Kingdom are all popular destinations for immigrants. To help you understand
                            the immigration processes and document requirements in these four countries, let&#39;s compare them:</p>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">1. Visa Categories:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Family-Sponsored Visas:</b> These are for immediate relatives (spouses, children, parents)
                                            of U.S. citizens, as well as certain family members of lawful permanent residents.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Employment-Based Visas:</b> These include various categories, such as H-1B for skilled
                                            workers, L-1 for intracompany transferees, and EB-5 for investors.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Diversity Visa (DV) Lottery:</b> Provides a chance for nationals from countries with low
                                            immigration rates to the U.S. to apply for a green card (permanent residency).</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">2. Document Requirements:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>A valid passport.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Visa application forms specific to the chosen category.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Proof of financial support.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Relevant supporting documents (e.g., educational degrees, job offer letters, or marriage
                                            certificates for family-sponsored visas).</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Medical examination and police clearance, depending on the category.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">3. Pathways:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Family reunification.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Employment-based immigration for skilled workers, professionals, and investors.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Asylum for those fleeing persecution.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Diversity Visa Lottery for select nationalities.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">4. Processing Times:</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Processing times vary widely depending on the visa category, country of origin, and
                                            USCIS workload. Employment-based visas can take several months to years.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">5. Green Card (Permanent Residency):</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Many immigrants aspire to obtain a green card, granting them permanent residency
                                            rights in the United States.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Canada:</h4>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">1. Visa Categories:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Express Entry:</b>A points-based system for skilled workers.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Family Sponsorship:</b>For Canadian citizens and permanent residents to sponsor family
                                            members.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Provincial Nominee Programs (PNPs):</b>Provincial governments nominate immigrants
                                            based on their economic contribution to the specific province.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Student Visas:</b>For international students.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">2. Document Requirements:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>A valid passport.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Language proficiency test results (e.g., IELTS).</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Educational credentials assessment for Express Entry.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Proof of funds to support yourself and your family.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Medical and background checks.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">3. Pathways:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Express Entry for skilled workers.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Family reunification.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Provincial Nominee Programs for specific provinces.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">4. Processing Times:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Express Entry processing times are relatively quick compared to other countries, often
                                            taking months rather than years.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">5. Permanent Residency:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Many immigrants aim to obtain permanent residency in Canada, leading to citizenship
                                            eligibility.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Australia:</h4>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">1. Visa Categories:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>General Skilled Migration:</b>For skilled workers.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Family Reunion:</b>For family members of Australian citizens or permanent residents.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Student Visas:</b>For international students.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Investor Visas:</b>Such as the Business Innovation and Investment Visa (subclass 188/888).</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">2. Document Requirements:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> A valid passport.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Skills assessment in your occupation.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>English language proficiency test results (e.g., IELTS).</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Health and character checks.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Proof of financial capacity.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">3. Pathways:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> General Skilled Migration is the primary pathway for skilled workers.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Family reunion and partner visas are common for those joining family members.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">4. Processing Times:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Processing times can vary depending on the visa category but are generally manageable
                                            for skilled workers.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">5. Permanent Residency:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Many immigrants aim to achieve permanent residency status in Australia, which
                                            provides various benefits, including access to social services and healthcare.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">United Kingdom (UK):</h4>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">1. Visa Categories:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Points-Based System (PBS):</b>Includes visas for skilled workers, entrepreneurs, investors,
                                            and students.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Family Reunion:</b>For family members of UK residents or British citizens.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> <b>Settlement Visas:</b>Leading to Indefinite Leave to Remain (ILR), which grants permanent
                                            residency.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">2. Document Requirements:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>A valid passport.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Proof of finances.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Proof of English language proficiency.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Sponsorship documents for work visas (Certificate of Sponsorship).</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">3. Pathways:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Points-Based System for skilled workers and investors.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Family reunion visas.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">4. Processing Times:</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Processing times vary but have been streamlined for the Points-Based System.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">5. Settlement (Indefinite Leave to Remain):</h4>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Immigrants often aim to settle in the UK, which grants them the right to remain
                                            indefinitely.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>Please note that immigration policies and requirements in these countries can change over time, so it&#39;s
                            crucial to consult the official websites of the respective countries&#39; immigration authorities or seek
                            professional legal advice for the most up-to-date and accurate information regarding immigration
                            processes and document requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ Page End-->
@endsection
