
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Vendor JS -->
<script src="{{ asset('assets/js/vendor/vendor.min.js') }}"></script>
<!--Plugins JS-->
<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>

<!--Main JS (Common Activation Codes)-->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/login-register.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script>
    $(".select2-active select").select2();
</script>
@yield('js-code')
