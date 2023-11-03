@extends('layouts.main')

@section('content')


<!-- start page-title -->
<section class="page-title  slide-bg-image">
    <img src="assets/images/slider/home-banner-02.jpg" width="100%" style="object-fit: cover;">
    <div class="page-title-container">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2 >@lang('messages.Services_page_01')</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </div>
</section>
<!-- end page-title -->

<section class="contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center">
                    {{-- <span>Our Services</span> --}}
                    <div class="col col-xs-12">
                        <h2 class="gradient-text1">@lang('messages.Services_head')</h2>
                        <br><hr>
                        <ul>
                            <li>@lang('messages.Services_page_02')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>



<!-- start team-section -->
<section class="team-section section-padding pt-2" style="background-color: #F7F7F7">
    <div class="container">

        <div class="row">
            <div class="col col-md-4 text-center">
                <img src="assets/images/home/home_our_services-02.jpg" alt="" style="border-radius: 50%; width: 280px; height: 280px; border: 8px solid #82BEE1; object-fit: cover;">
            </div>
            <div class="col col-md-8" style="background: #fff;">
                <div class="details">
                    <h3 style="color: #3190AF;">@lang('messages.Services_section_01')</h3>
                    <ul style="text-align: justify">@lang('messages.Services_sub_01')</ul>
                    <br>
                    <a href="{{ route('slug1') }}" style="text-align: right; display: block;">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text">@lang('messages.Services_button')</span>
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
            </div>
            <div class="col col-md-8" style="background: #fff;">
                <div class="details">
                    <h3 style="color: #3190AF;">@lang('messages.Services_section_02')</h3>
                    <ul style="text-align: justify">@lang('messages.Services_sub_02')</ul>
                    <br>
                    <a href="{{ route('slug2') }}" style="text-align: right; display: block;">
                        <button class="btn-17">
                            <span class="text-container">
                                <span class="text">@lang('messages.Services_button')</span>
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

@stop
