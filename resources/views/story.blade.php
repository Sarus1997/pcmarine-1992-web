@extends('layouts.main')

@section('content')

<!-- start page-title -->
<section class="page-title slide-bg-image">
    <img src="assets/images/slider/home-banner-03.jpg" width="100%" style="object-fit: cover;">
    <div class="page-title-container">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>@lang('messages.Manu_Story')</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </div>
</section>
<!-- end page-title -->


<!-- start testimonial-section -->
<section class="testimonial-section testimonial-slider-style" style="background-color: #F7F4F0;">
    <div class="container">
        <div class="row">
            <div class="col col-lg-5 col-md-5">
                <div class="img-holder">
                    <img src="assets/images/blog/story/Story_our_page.webp" alt>
                </div>
            </div>
            <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                <div class="details">
                    <h2 class="gradient-text1"><b>@lang('messages.Story_page_01')</b></h2>
                    <p>@lang('messages.Story_page_02')</p>
                </div>
                <hr>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end testimonial-section -->



<!-- start team-section-s2 -->
<section class="team-section-s2 section-padding">
    <div class="container mt-3">
        <div class="content-area" >
            <div class="team-grids team-slider-s2" >

                {{-- 2535 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto; " >
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2535_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2535')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2535_2')</p>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2535_3')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2546 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2546_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2564')</h3>
                                <p class="cat" style="text-align: left; padding: 4px;">@lang('messages.Story_2564_2')</p>
                                <h3>@lang('messages.Story_2546_3')</h3>
                                <p class="cat" style="text-align: left; padding: 4px;">@lang('messages.Story_2546_4')</p>
                                <p class="cat" style="text-align: left; padding: 4px;">@lang('messages.Story_2546_5')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2551 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2551_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2551')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2551_2')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2553 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2553_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2553')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2553_2')</p>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2553_3')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2555 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2555_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2555')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2555_2')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2556 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2556_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2556')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2556_2')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2558 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2558_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2558')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2556_2')</p>
                                <h3>@lang('messages.Story_2558_3')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2558_4')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2559 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2559_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2559')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2559_2')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2561 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2561_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2561')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2561_2')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2562 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2562_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2562')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2562_2')</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2564 --}}
                <div class="grid" style="width: 100%;  max-width: 1200px; margin: 0 auto;">
                    <div class="inner">
                        <div class="details" style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe">
                            <h4 style="text-align: center">@lang('messages.Story_2564_Head')</h4>
                        </div>
                        <div class="col ">
                            <div class="section-title">
                                <h3>@lang('messages.Story_2564')</h3>
                                <p style="text-align: left; padding: 4px;" class="cat">@lang('messages.Story_2564_2')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end team-section-s2 -->


@stop
