@extends('front.master')

@section('title')
    About us
@endsection

@section('body')
  <!--Page Header Start-->
  <section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Blog sidebar</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Sidebar Start-->
<section class="blog-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-sidebar__left">
                    <div class="blog-sidebar__content-box">
                        <!--Blog sidebar Single Start-->
                        <div class="blog-sidebar__single">
                            <div class="blog-sidebar__img">
                                <img src="{{ asset('front') }}/assets/images/blog/blog-sidebar-1-1.jpg" alt="">
                                <div class="blog-sidebar__date-box">
                                    <p>16 apr</p>
                                </div>
                            </div>
                            <div class="blog-sidebar__content">
                                <ul class="blog-details__meta list-unstyled">
                                    <li>
                                        <a href=""><i class="fas fa-tags"></i>Design</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-comments"></i>2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-sidebar__title"><a href="">Get a few solutions
                                        to hire a best candidate</a></h3>
                                <p class="blog-sidebar__text">There are many variations of passages of Lorem
                                    Ipsum available, but majority have suffered alteration in some form, by
                                    injected humour, or randomised words which don't look even slightly
                                    believable. If you are going to use a passage of Lorem Ipsum.</p>
                                <div class="blog-sidebar__arrow">
                                    <a href=""><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog sidebar Single End-->
                        <!--Blog sidebar Single Start-->
                        <div class="blog-sidebar__single">
                            <div class="blog-sidebar__img">
                                <img src="{{ asset('front') }}/assets/images/blog/blog-sidebar-1-2.jpg" alt="">
                                <div class="blog-sidebar__date-box">
                                    <p>16 apr</p>
                                </div>
                            </div>
                            <div class="blog-sidebar__content">
                                <ul class="blog-details__meta list-unstyled">
                                    <li>
                                        <a href=""><i class="fas fa-tags"></i>Design</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-comments"></i>2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-sidebar__title"><a href="">Basic rules of
                                        running a small web agency</a></h3>
                                <p class="blog-sidebar__text">There are many variations of passages of Lorem
                                    Ipsum available, but majority have suffered alteration in some form, by
                                    injected humour, or randomised words which don't look even slightly
                                    believable. If you are going to use a passage of Lorem Ipsum.</p>
                                <div class="blog-sidebar__arrow">
                                    <a href=""><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog sidebar Single End-->
                        <!--Blog sidebar Single Start-->
                        <div class="blog-sidebar__single">
                            <div class="blog-sidebar__img">
                                <img src="{{ asset('front') }}/assets/images/blog/blog-sidebar-1-3.jpg" alt="">
                                <div class="blog-sidebar__date-box">
                                    <p>16 apr</p>
                                </div>
                            </div>
                            <div class="blog-sidebar__content">
                                <ul class="blog-details__meta list-unstyled">
                                    <li>
                                        <a href=""><i class="fas fa-tags"></i>Design</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-comments"></i>2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-sidebar__title"><a href="">Introducing the
                                        latest tech features for you</a></h3>
                                <p class="blog-sidebar__text">There are many variations of passages of Lorem
                                    Ipsum available, but majority have suffered alteration in some form, by
                                    injected humour, or randomised words which don't look even slightly
                                    believable. If you are going to use a passage of Lorem Ipsum.</p>
                                <div class="blog-sidebar__arrow">
                                    <a href=""><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog sidebar Single End-->
                    </div>
                    <div class="blog-sidebar__bottom-box">
                        <div class="blog-sidebar__bottom-box-icon">
                            <img src="{{ asset('front') }}/assets/images/icon/blog-sidebar-bottom-box-icon.png" alt="">
                        </div>
                        <p class="blog-sidebar__bottom-box-text">There are many variations of passages of Lorem
                            Ipsum available, but majority have suffered alteration in some form, by injected
                            humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <div class="blog-sidebar__provide-services">
                        <div class="blog-sidebar__provide-services-icon">
                            <a href="blog-details.html"><img src="{{ asset('front') }}/assets/images/icon/blog-sidebar-provide-services-icon.png" alt=""></a>
                        </div>
                        <h3 class="blog-sidebar__provide-services-title"><a href="blog-details.html">Providing
                                the creative design services</a></h3>
                    </div>
                    <div class="blog-sidebar__load-more">
                        <a href="blog-details.html" class="thm-btn blog-sidebar__load-more-btn">Load more
                            posts</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Keywrord...">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{ asset('front') }}/assets/images/blog/lp-1-1.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="fa fa-clock"></i>20
                                            Mar, 2023</span>
                                        <a href="blog-details.html">Get deep knowledge
                                            <br> of your audience</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{ asset('front') }}/assets/images/blog/lp-1-2.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="fa fa-clock"></i>20
                                            Mar, 2023</span>
                                        <a href="blog-details.html">Aliquam tellus nulla <br> sollicitudin
                                            at</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{ asset('front') }}/assets/images/blog/lp-1-3.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta"><i class="fa fa-clock"></i>20
                                            Mar, 2023</span>
                                        <a href="blog-details.html">Donec sit amet is<br> lacinia nulla.</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="blog-details.html"><span class="fas fa-arrow-right"></span>Web
                                    Development</a>
                            </li>
                            <li><a href="blog-details.html"><span class="fas fa-arrow-right"></span>Social
                                    Marketing</a>
                            </li>
                            <li><a href="blog-details.html"><span class="fas fa-arrow-right"></span>Technology</a>
                            </li>
                            <li><a href="blog-details.html"><span class="fas fa-arrow-right"></span>Digital
                                    Solutions</a>
                            </li>
                            <li><a href="blog-details.html"><span class="fas fa-arrow-right"></span>Business &
                                    Finance</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__project">
                        <h3 class="sidebar__title">Projects</h3>
                        <div class="sidebar__project-box">
                            <div class="sidebar__project-carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": true,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        }
                                    }
                                }'>
                                <div class="item">
                                    <div class="sidebar__project-single">
                                        <div class="sidebar__project-bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/sidebar-project-bg.jpg);">
                                        </div>
                                        <p>Digital
                                            <br> Solutions</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sidebar__project-single">
                                        <div class="sidebar__project-bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/sidebar-project-bg-2.jpg);">
                                        </div>
                                        <p>Web <br> Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">
                            <a href="#">Marketing</a>
                            <a href="#">development</a>
                            <a href="#">Design</a>
                            <a href="#">Digital</a>
                        </div>
                    </div>
                    <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">Comments</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A wordpress commenter <br> on launch new mobile app</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p> <span>John Doe</span> on Template: <br>
                                        Comments</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A wordpress commenter <br> on launch new mobile app</p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="sidebar__comments-text-box">
                                    <p> <span>John Doe</span> on Template: <br>
                                        Comments</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Sidebar End-->
@endsection
