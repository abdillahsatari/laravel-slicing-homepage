        <!-- footer -->
        <footer class="footer footer_bg_1">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img src="{{ asset('assets/publics/img/logo.png') }}" alt="">
                                    </a>
                                </div>
                                <p>
                                    Firmament morning sixth subdue darkness creeping gathered divide our let god moving.
                                    Moving in fourth air night bring upon it beast let you dominion likeness open place day
                                    great.
                                </p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Courses
                                </h3>
                                <ul>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#"> Photoshop</a></li>
                                    <li><a href="#">Illustrator</a></li>
                                    <li><a href="#">Adobe XD</a></li>
                                    <li><a href="#">UI/UX</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Resourches
                                </h3>
                                <ul>
                                    <li><a href="#">Free Adobe XD</a></li>
                                    <li><a href="#">Tutorials</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> About</a></li>
                                    <li><a href="#"> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Address
                                </h3>
                                <p>
                                    200, D-block, Green lane USA <br>
                                    +10 367 467 8934 <br>
                                    edumark@contact.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->

        <!-- form itself end-->
        <form id="test-form" class="white-popup-block mfp-hide">
            <div class="popup_box ">
                <div class="popup_inner">
                    <div class="logo text-center">
                        <a href="#">
                            <img src="{{ asset('assets/publics/img/form-logo.png') }}" alt="">
                        </a>
                    </div>
                    <h3>Sign in</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <input type="email" placeholder="Enter email">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed_btn_orange">Sign in</button>
                            </div>
                        </div>
                    </form>
                    <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
                    </p>
                </div>
            </div>
        </form>
        <!-- form itself end -->

        <!-- form itself end-->
        <form id="test-form2" class="white-popup-block mfp-hide">
            <div class="popup_box ">
                <div class="popup_inner">
                    <div class="logo text-center">
                        <a href="#">
                            <img src="{{ asset('assets/publics/img/form-logo.png') }}" alt="">
                        </a>
                    </div>
                    <h3>Resistration</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <input type="email" placeholder="Enter email">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="Password" placeholder="Confirm password">
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed_btn_orange">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </form>
        <!-- form itself end -->

        @include('include.footer_setting')
    </body>
</html>
