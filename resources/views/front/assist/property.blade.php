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
                    <h2>{{ $property->name }}</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">{{ $property->name }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
        <section class="feature-two">
            <div class="container mt-5">
                <div class="section-title text-center">
                    <h2 class="section-title__title">{{ $property->name }}</h2>
                </div>
                <div class="row">
                    <!--Feature Two Single Start-->
                    @foreach ($multi_iamge as $item)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="why-choose-one__right">
                            <div class="why-choose-one__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <img src="{{ asset($item->multi_image) }}" alt="">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Feature Two Single End-->

                </div>
                <a href="{{ '/' }}" class="btn btn-info mt-5">BACK TO HOME</a>
            </div>
        </section>
@endsection
