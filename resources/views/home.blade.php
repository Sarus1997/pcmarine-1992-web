@extends('layouts.main')

@section('content')


<!-- start of hero -->
<section class="hero-slider hero-style-2">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="assets/images/slider/home-banner-01.jpg" style="object-fit: cover;">
                    <div class="container">

                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>@lang('messages.Hero_Head')</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>@lang('messages.Hero_Detail')</p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="{{ route('services') }}" class="theme-btn-s2" style="background-color: #2A8FD3;">@lang('messages.Hero_Button_Service')</a>
                            <a href="{{ route('story') }}" class="theme-btn-s3">@lang('messages.Hero_Button_Our_Story')</a>
                        </div>
                    </div>
                </div> <!-- end slide-inner -->
            </div> <!-- end swiper-slide -->

            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="assets/images/slider/home-banner-04.jpg">
                    <div class="container">

                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>@lang('messages.Hero_Head')</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>@lang('messages.Hero_Detail') </p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="{{ route('services') }}" class="theme-btn-s2" style="background-color: #2A8FD3;">@lang('messages.Hero_Button_Service')</a>
                            <a href="{{ route('story') }}" class="theme-btn-s3">@lang('messages.Hero_Button_Our_Story')</a>
                        </div>
                    </div>
                </div> <!-- end slide-inner -->
            </div> <!-- end swiper-slide -->

            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="assets/images/slider/home-banner-03.jpg">
                    <div class="container">

                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>@lang('messages.Hero_Head')</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>@lang('messages.Hero_Detail')</p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="{{ route('services') }}" class="theme-btn-s2" style="background-color: #2A8FD3;">@lang('messages.Hero_Button_Service')</a>
                            <a href="{{ route('story') }}" class="theme-btn-s3">@lang('messages.Hero_Button_Our_Story')</a>
                        </div>
                    </div>
                </div> <!-- end slide-inner -->
            </div><!-- end swiper-slide -->
        </div>
        <!-- end swiper-wrapper -->

        <!-- swipper controls -->
        <div class="swiper-pagination" ></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- end of hero slider -->


<!-- start about-section -->
<section class="about-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-5 col-md-5">
                <div class="section-title">
                    {{-- <span>About us</span> --}}
                    <h2 class="gradient-text1">@lang('messages.Story_Name')</h2>
                    <hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 1.5px;">
                </div>
                <div class="about-text">
                    <h4 style="color: #8A94C5;">@lang('messages.Story_Head')</h4>
                    <p></p>
                    <a href="{{ route('story') }}">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text" >@lang('messages.Story_Read_More')</span>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                <div class="about-pic-area">
                        <img src="assets/images/home/home-our-story.jpg" alt="home-our-story" width="100%">
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end about-section -->


<!-- start team-section -->
<section class="team-section section-padding pt-2" style="background-color: #1A5279">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="section-title-s2">
                    <p style="text-align: center; font-size: 3rem; color:#fff">@lang('messages.Services_Name')</p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-4 text-center">
                <img src="assets/images/home/home_our_services-02.jpg" alt="" style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover; text-align: justify">
            </div><br>
            <div class="col col-md-8" style="background: #fff;">
                <div class="details"><br>
                    <h3 style="color: #3190AF;">@lang('messages.Services_Head_01')</h3>
                    <ul>@lang('messages.Services_Detail_Head_01')</ul>
                    <br>
                    <a href="{{ route('services') }}" style="text-align: right; display: block;">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text">@lang('messages.Story_Read_More')</span>
                            </span>
                        </button>
                    </a>

                </div>
                <hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 1.5px;">
            </div>
        </div>

        <br>
        <br>

        <div class="row">
            <div class="col col-md-4 text-center">
                <img src="assets/images/home/home_our_services-01.jpg" alt="" style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
            </div><br>
            <div class="col col-md-8" style="background: #fff;">
                <div class="details"><br>
                    <h3 style="color: #3190AF;">@lang('messages.Services_Head_02')</h3>
                    <ul>@lang('messages.Services_Detail_Head_02')</ul>
                    <br>
                    <a href="{{ route('services') }}" style="text-align: right; display: block;">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text">@lang('messages.Story_Read_More')</span>
                            </span>
                        </button>
                    </a>

                </div>
                <hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 1.5px;">
            </div>
        </div>
    </div>
</section>
<!-- end team-section -->


<!-- Contact Us -->
<section class="contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-8">
                <div class="logo widget-title" style="display: flex; align-items: center;">
                    <img src="assets/images/logo/pc-marine-full-logo.svg" width="120rem" height="120rem" style="box-shadow: 5px 5px 3px rgb(245,245,245); border-radius: 50%;">
                    <div class="section-title" style="margin-left: 10px;">
                        <br/>
                        {{-- <span>Contact Us</span> --}}
                        <h2 class="gradient-text1">@lang('messages.Contact_name_header')</h2>
                        <p style="color: #3197B3;">@lang('messages.Contact_name')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>

    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-md-6 col-sm-8">
                <div class="widget ">
                    <div class="contact-info">
                        <div>
                            <div class="icon"  style="color: #504389;">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="details">
                                <h5 style="color: #504389;">@lang('messages.Contact_address_name')</h5>
                                <p>@lang('messages.Contact_address')</p>
                            </div>
                        </div>
                        <div>
                            <div class="icon"  style="color: #6A8DB3;">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="details">
                                <h5 style="color: #6A8DB3;">@lang('messages.Contact_tel_name')</h5>
                                <p><a href="tel:0849991749" style="color: #797979;">@lang('messages.footer_tel')</a> &nbsp; <a href="tel:0822032318" style="color: #797979;">@lang('messages.footer_tel_02')</a></p>
                            </div>
                        </div>
                        <div>
                            <div class="icon"  style="color: #319CB5;">
                                <i class="ti-email"></i>
                            </div>
                            <div class="details">
                                <h5 style="color: #319CB5;">@lang('messages.Contact_email_name')</h5>
                                <p><a href="mailto:sales@pce-pcm.com" style="color: #797979;">@lang('messages.Contact_email')</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-lg-6 col-md-6 col-sm-8">
                <div class="widget newsletter-widget">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31512.7647227426!2d99.378376!3d9.1458391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305408aff1d0af43%3A0xe1df03abec6e1a2e!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4nuC4iuC4o-C4qOC4o-C4teC4p-C4tOC4iuC4seC4oiDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYTguJ7guKPguKrguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1695352952806!5m2!1sth!2sth"
                        width="100%" height="350" style="box-shadow: 10px 10px 5px rgb(245,245,245);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div> <!-- end container -->
    </div>
</section>
<!-- End Contact Us -->



@stop
