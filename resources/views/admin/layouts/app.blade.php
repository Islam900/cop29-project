
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <meta name="description" content="Admin Template to use in any Backend Development" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/simplebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}" />
    @yield('css-code')
</head>
<body>
<div class="main-wrapper">
    @include('admin.layouts.partials.header')
    @include('admin.layouts.partials.sidebar')

    <!-- SideNav Section End -->


    <!-- Content Body Start -->
    <div class="content-body">
        <!-- Page Headings Start -->
        <div class="row justify-content-between align-items-center mb-4">
            <!-- Page Heading Start -->
            <div class="col-md-auto col-12 mb-2">
                <h3 class="mb-0">@yield('page-title')</h3>
            </div>
            <!-- Page Heading End -->

            <!-- Page Button Group Start -->
            <div class="col-md-auto col-12 mb-2">
                Calendar
            </div>
            <!-- Page Button Group End -->
        </div>
        <!-- Page Headings End -->

        @yield('content')
    </div>
    <!-- Content Body End -->

    <!-- Footer Section Start -->
    @include('admin.layouts.partials.footer')
    <!-- Footer Section End -->

</div>

<!-- JS Files
============================================ -->
<!-- Global Vendor, plugins JS -->

<!-- Vendor JS -->
<script src="{{ asset('assets/js/vendor/vendor.min.js') }}"></script>
<!--Plugins JS-->
<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
<!-- Data Table Script -->

<script>
    $('.order-list-table').each(function() {
        var $this = $(this),
            $dtrAllSelect = $this.find('thead .dtrAllSelect'),
            $dtrSelect = $this.find('tbody .dtr-select:not(:disabled)');
        $this.DataTable({
            responsive: true,
            dom: "t",
            ordering: false
        });
        $dtrAllSelect.on('click', function() {
            if (this.checked) {
                $dtrSelect.prop('checked', this.checked).parent().addClass('selected');
            } else {
                $dtrSelect.prop('checked', this.checked).parent().removeClass('selected');
            }
        });
        $dtrSelect.on('change', function() {
            var $this = $(this);
            if ($this.is(":checked")) {
                $this.parent().addClass('selected')
            } else {
                $this.parent().removeClass('selected')
            };
            var check = ($dtrSelect.filter(":checked").length === $dtrSelect.length);
            $dtrAllSelect.prop("checked", check);
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!--Main JS (Common Activation Codes)-->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables.min.js') }}"></script>
<script>
    $('.data-table').DataTable({
        responsive: true,
        language: {
            paginate: {
                previous: '',
                next: ''
            }
        }
    });
</script>
@yield('js-code')
</body>
</html>
