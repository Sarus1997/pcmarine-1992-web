@extends('layouts.main')

@section('content')

<!-- start page-title -->
<section class="page-title  slide-bg-image">
    <img src="assets/images/slider/home-banner-02.jpg" width="100% style=" object-fit: cover;">
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



<!-- start blog-single-section -->
<section class="blog-single-section blog-single-fullwidth section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-10 col-md-offset-1">
                <div class="blog-content">
                    <div class="post format-standard-image">
                        <h1 style="text-align: center; color:#293D96">@lang('messages.Transporta_name')</h1>
                        <br/>
                        <p>@lang('messages.Transporta_Title_1')</p>
                        <p>@lang('messages.Transporta_Title_2')</p>
                        <p>@lang('messages.Transporta_Title_3')</p>
                        <p>@lang('messages.Transporta_Title_4')</p>
                        {{-- <blockquote>
                            Samples lay spread out on the table - Samsa was a travelling salesman - and above it there
                            hung a picture that he had recently cut out of an illustrated magazine and housed in a nice,
                            gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright
                            <span class="quoter">- Mic dow</span>
                        </blockquote> --}}
                    </div>
                </div> <!-- end comments-section -->
            </div> <!-- end comments-area -->
        </div>
    </div>
</section>
<!-- end blog-single-section -->

@stop
