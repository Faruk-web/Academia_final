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
                    <h2>Top Courses</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Top Courses</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title_academia">Top Courses</h2>
        </div>
        <div class="row" >
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
<!--FAQ Page End-->
@endsection
