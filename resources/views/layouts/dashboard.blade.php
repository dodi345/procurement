<!DOCTYPE html>
<html lang="en">

<x-dashboard.meta/>
<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">
        <x-dashboard.header>

        <x-dashboard.sidebar>

        <div class="page-wrapper">
            <div class="content">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/inventory') }}/assets/js/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('vendor/inventory') }}/assets/js/feather.min.js"></script>

    <script src="{{ asset('vendor/inventory') }}/assets/js/jquery.slimscroll.min.js"></script>

    <script src="{{ asset('vendor/inventory') }}/assets/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('vendor/inventory') }}/assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('vendor/inventory') }}/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('vendor/inventory') }}/assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ asset('vendor/inventory') }}/assets/plugins/apexchart/chart-data.js"></script>

    <script src="{{ asset('vendor/inventory') }}/assets/js/script.js"></script>
</body>

</html>
