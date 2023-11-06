@extends('front.master')
@section('title')
    About us
@endsection
@section('body')
 <!--About Three Start-->
  <!--Page Header Start-->
  <section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('front')}}/assets/images/resica/about.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ $privacy->name }}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li class="active">{{ $privacy->title }}</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->
<section class="why-choose-one">
<div class="container mt-5">
    <div class="row">
    <div class="blog-details__content">
            <h3 class="blog-details__title">{{ $privacy->name }}</h3>
            <h6 class="blog-details__text-1"> {{ $privacy->title }}</h6>
            <p class="blog-details__text-1 mt-4"> {!! $privacy->privacy !!} </p>
        </div>
    </div>
    <a href="{{ '/' }}" class="btn btn-info mt-5">BACK TO HOME</a>
</div>
</section>
@endsection
