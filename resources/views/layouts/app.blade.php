<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.meta')
</head>
<body>

    <div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-boxed">

        @include('layouts.app-header')

        {{-- Start of Main --}}
        <main class="main-container">

            @yield('content')

        </main>
        {{-- End of Main --}}

    </div>

</body>
</html>
