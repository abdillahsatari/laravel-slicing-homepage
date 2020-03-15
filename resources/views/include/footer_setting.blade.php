@if($pageSetting == "ADMIN")
{{--    @include('admin.__layouts.public_head')--}}
{{--    @include('admin.__layouts.public_header')--}}
{{--    @include('admin.__layouts.public_content')--}}
{{--    @include('admin.__layouts.public_footer')--}}
@else
    <!-- JS here -->
    <script src="{{ asset('assets/publics/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/publics/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/scrollIt.js') }}"></script>
    <script src="{{ asset('assets/publics/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/publics/js/gijgo.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('assets/publics/js/contact.js') }}"></script>
    <script src="{{ asset('assets/publics/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/publics/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/publics/js/mail-script.js') }}"></script>

    <script src="{{ asset('assets/publics/js/main.js') }}"></script>
@endif
