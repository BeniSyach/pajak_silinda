<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')

<body class="main">

    @include('layouts.partials.topbar')
    @include('layouts.partials.topnav')


    @yield('content')


    @include('layouts.partials.footer')
    <script>
        var pallete = document.querySelector(".main").getAttribute('data-pallete').replace(/"/g, '').replace('[', '')
            .replace(']', '').split(',');
    </script>
    <script src="{{ asset('assets/js/gauge.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @include('layouts.partials.scripts')
</body>

</html>
