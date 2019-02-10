<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include(config('themes.view_path.' . session('theme')) . 'includes.head')

<body class="bg-default">

    <!-- Main content -->
    <div class="main-content">

        @yield('content')

    </div>

@include(config('themes.view_path.' . session('theme')) . 'sections.footer-auth')

@include(config('themes.view_path.' . session('theme')) . 'includes.footer-resources')

</body>
</html>
