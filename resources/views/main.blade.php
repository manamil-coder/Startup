<!DOCTYPE html>
<html lang="en-us">
<head>
    {{-- HEAD --}}
    @include('layout.head')
    {{-- HEAD END --}}
    @yield('styles')
</head>
<body>
    {{-- HEADER --}}
    @include('layout.navbar')
    {{-- HEADER END --}}
    {{-- CONTENT --}}
    @yield('content')
    {{-- CONTENT END --}}
    {{-- FOOTER --}}
    @include('layout.footer')
    {{-- FOOTER END --}}
    @yield('scripts')
</body>
</html>
