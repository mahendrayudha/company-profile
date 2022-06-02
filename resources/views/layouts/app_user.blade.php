<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')

    <title>Company Profile</title>

    {{-- Favicon --}}
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-iocn" href="">

    @stack('before-style')
    {{-- style --}}
    @include('partials.style')

    @stack('after-style')
</head>

<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')

    @stack('before-script')
    {{-- script --}}
    @include('partials.js')
    @stack('after-script')
</body>

</html>