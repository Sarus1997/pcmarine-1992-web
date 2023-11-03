


<header id="header" class="site-header header-style-3">

    <div class="topbar">
        <div class="container">
            <div class="row">
            <div class="col col-sm-9">
                <div class="contact-info">
                <div class="contact-info">
                    <ul>
                    <li><i class="ti-email"></i> @lang('messages.Contact_email')</li>
                    <li><i class="ti-mobile"></i> @lang('messages.Contact_tel')</li>
                    {{-- <li><i class="ti-location-pin"></i></li> --}}
                    </ul>
                </div>

                </div>
            </div>
            <div class="col col-sm-3">
                <div class="social">
                <div class="social-links" style="height: 50px">

                    <select class="form-control changeLang">
                    <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : '' }}>Thai</option>
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    </select>


                </div>
                </div>
            </div>
            </div>
        </div> <!-- end container -->
        </div>

        <nav class="navigation navbar navbar-default" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn" style="background-color: #2A8FD3;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-brand gap-2">
                    <a class=" d-flex" href="index.html">
                    <img src="assets/images/logo/pc-marine-logo.svg" alt="" srcset="">
                    </a>

                    <span class="gradient-text1" style="font-size: 20px">@lang('messages.Pc-marine_name')</span>

                </div>

            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                <button class="close-navbar" style="background-color: #2A8FD3;"><i class="ti-close" ></i></button>
                <ul class="nav navbar-nav">
                    <li><a style="color: #67C1CE;" href="{{ route('home') }}">@lang('messages.Manu_Home')</a></li>
                    <li><a style="color: #5590B2;" href="{{ route('story') }}">@lang('messages.Manu_Story')</a></li>
                    <li><a style="color: #4B5491;" href="{{ route('services') }}">@lang('messages.Manu_Services')</a></li>
                    <li><a style="color: #330E6A;" href="{{ route('contact') }}">@lang('messages.Manu_Contact_Us')</a></li>

                </ul>
            </div>

            {{-- </div><!-- end of nav-collapse -->
            <div class="cart-contact">
            <div class="contact-btn">
                <a href="#" class="theme-btn">Free consultation</a>
            </div>
            </div> --}}


        </div><!-- end of container -->
    </nav>

</header>
<!-- end of header -->
