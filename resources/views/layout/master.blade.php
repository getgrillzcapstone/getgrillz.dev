<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GetGrillz</title>
    @include('layout.partials.header')
    @yield('itemsCss')
    @yield('itemsBackgroundImg')
    @yield('footerStyling')

</head>
<body>
    @include('layout.partials.navbar')

    @yield('content')

    @include('layout.partials.footer')

    @include('layout.partials.scriptTags')
    @yield('javascriptFilesForCreateOrderRent')
    @yield('javascriptFileForCreateOrderBuy')
    @yield('javascriptFileForCheckout')
    @yield('javascriptFileForConfirmOrder')
    @yield('javascriptFilesForFaqContact')
    @yield('javascriptFileThankyou')
</body>
</html>
