<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.html">
                                <img src="{{ asset('assets/publics/img/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="{{ Route::is('public.contents.home') ? 'active' : '' }}" href="{{ route('public.contents.home') }}">home</a></li>
                                    <li><a class="{{ Route::is('public.contents.courses') ? 'active' : '' }}" href="{{ route('public.contents.courses') }}">Courses</a></li>
                                    <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="course_details.html">course details</a></li>
                                            <li><a href="elements.html">elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="{{ Route::is('public.contents.about') ? 'active' : '' }}" href="{{ route('public.contents.about') }}">About</a></li>
                                    <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a class="{{ Route::is('public.contents.blog') ? 'active' : '' }}" href="{{ route('public.contents.blog') }}">blog</a></li>
                                            <li><a href="single-blog.html">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="{{ Route::is('public.contents.contact') ? 'active' : '' }}" href="{{ route('public.contents.contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="log_chat_area d-flex align-items-center">
                            <a href="#test-form" class="login popup-with-form">
                                <i class="flaticon-user"></i>
                                <span>log in</span>
                            </a>
                            <div class="live_chat_btn">
                                <a class="boxed_btn_orange" href="#">
                                    <i class="fa fa-phone"></i>
                                    <span>+10 378 467 3672</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
