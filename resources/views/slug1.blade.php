@extends('layouts.main')

@section('content')

<!-- start page-title -->
<section class="page-title  slide-bg-image">
    <img src="assets/images/slider/home-banner-02.jpg" width="100% style="object-fit: cover;">
    <div class="page-title-container">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>@lang('messages.Services_page_01')</h2>
                        <hr>
                        <ul>
                            <li>
                                <font color="#fff">@lang('messages.Services_page_02')</font>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </div>
</section>
<!-- end page-title -->


<!-- start team-section -->
<section class="team-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-12  col-md-12 ">
                <div class="section-title-s2">
                    {{-- <span>Team members</span> --}}
                    <h2 style="color: #293D96;">@lang('messages.fleet')</h2><hr>
                    <p style="text-align: left; padding: 15px;">@lang('messages.fleet_01')</p>
                    <p style="text-align: left; padding: 15px;">@lang('messages.fleet_02')</p>
                    <p style="text-align: left; padding: 15px;">@lang('messages.fleet_03')</p>
                    <p style="text-align: left; padding: 15px;">@lang('messages.fleet_04')</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-area">
        <div class="team-grids team-slider">

            {{-- 1 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/ktp-1.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_1')</h4>
                        <span>@lang('messages.fleet_name_KTP1')</span>
                    </div>
                </div>
            </div>

            {{-- 2 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/ktp-2.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_2')</h4>
                        <span>@lang('messages.fleet_name_KTP2')</span>
                    </div>
                </div>
            </div>

            {{-- 3 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/ktp-3.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_3')</h4>
                        <span>@lang('messages.fleet_name_KTP3')</span>
                    </div>
                </div>
            </div>

            {{-- 4 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/ktp-4.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_4')</h4>
                        <span>@lang('messages.fleet_name_KTP4')</span>
                    </div>
                </div>
            </div>

            {{-- 5 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/inter-marine.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_5')</h4>
                        <span>@lang('messages.fleet_name_MT1')</span>
                    </div>
                </div>
            </div>

            {{-- 6 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/kittiphon.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_6')</h4>
                        <span>@lang('messages.fleet_name_MT2')</span>
                    </div>
                </div>
            </div>

            {{-- 7 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/ocean-marine.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_7')</h4>
                        <span>@lang('messages.fleet_name_MT3')</span>
                    </div>
                </div>
            </div>

            {{-- 8 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/pc-natthaphon.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_8')</h4>
                        <span>@lang('messages.fleet_name_MT4')</span>
                    </div>
                </div>
            </div>

            {{-- 9 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/srivichai-1.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_9')</h4>
                        <span>@lang('messages.fleet_name_SR1')</span>
                    </div>
                </div>
            </div>

            {{-- 10 --}}
            <div class="grid">
                <div class="inner">
                    <div class="img-holder">
                        <img src="assets/images/slug/srivichai-2.png" width="100%" height="400px" alt>
                    </div>
                    <div class="details">
                        <h4 style="color: #30B8C3;">@lang('messages.fleet_name_10')</h4>
                        <span>@lang('messages.fleet_name_SR2')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end team-section -->



@stop
