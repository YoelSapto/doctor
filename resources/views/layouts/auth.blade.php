<!DOCTYPE html>
<html lang="en">
@include('includes.frontsite.meta')
<title> @yield('title') | Meet Doctor</title>

<head>
    @stack('before-style')
    @include('includes.frontsite.style')
    @stack('after-style')

</head>

<body>

    @yield('content')
    {{-- @include('components.frontsite.footer') --}}


    @stack('before-script')
    @include('includes.frontsite.script')
    @stack('after-script')
</body>

</html>
