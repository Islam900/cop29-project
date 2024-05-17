
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@section('title')</title>
    <meta name="description" content="Admin Template to use in any Backend Development" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/vendor.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/simplebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/chart/apexcharts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jqvmap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}" />
</head>
<body>
<div class="main-wrapper">

    @include('layouts.partials.header')
    @include('layouts.partials.sidebar')

    <!-- SideNav Section End -->


    <!-- Content Body Start -->
    @yield('content')
    <!-- Content Body End -->

    <!-- Footer Section Start -->
    @include('layouts.partials.footer')
    <!-- Footer Section End -->

</div>

<!-- JS Files
============================================ -->
<!-- Global Vendor, plugins JS -->

<!-- Vendor JS -->
<script src="{{ asset('assets/js/vendor/vendor.min.js') }}"></script>
<!--Plugins JS-->
<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>

<!-- Plugins & Activation JS For Only This Page -->

<!-- Apex Chart Script -->
<script src="{{ asset('assets/js/plugins/chart/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/chart/apexcharts/homeOne.js') }}"></script>

<!-- VMap Script -->
<script src="{{ asset('assets/js/plugins/jvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jvmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jvmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
<script>
    $("#vmap-world").vectorMap({
        map: "world_en",
        backgroundColor: "transparent",
        color: "#006491",
        hoverColor: "#014E72",
        selectedColor: "#014E72",
        borderColor: "#ffffff",
        enableZoom: false,
        values: sample_data,
        scaleColors: ["#006491", "#9FD1E8"],
        showTooltip: true,
        onLoad: function(event, map) {
            var legend = map.container[0].previousElementSibling,
                colors = map.colorScale.colors,
                text = ["Most saleing", "Less saleing"];
            if (legend) {
                colors.forEach(function(e, i) {
                    legend.innerHTML = legend.innerHTML + '<div class="legend-item"><span style="background-color:rgb(' + colors[i] + ');"></span>' + text[i] + "</div>";
                });
            }
        },
    });
</script>

<!-- Data Table Script -->
<script src="{{ asset('assets/js/plugins/datatables.min.js') }}"></script>
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

<!--Main JS (Common Activation Codes)-->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
