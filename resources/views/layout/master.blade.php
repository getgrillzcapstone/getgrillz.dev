<!DOCTYPE html>
<html lang="en">
<head>
    <title>GetGrillz</title>
    @include('layout.partials.header')
</head>
<body>
    @include('layout.partials.navbar')

    @yield('content')

    @include('layout.partials.footer')

    @include('layout.partials.scriptTags')
</body>
</html>
