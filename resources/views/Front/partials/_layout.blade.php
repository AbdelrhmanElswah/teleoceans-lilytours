
<!doctype HTML>
<html lang="en">
<head>
    <title>Lilly Tours</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('Front.partials._style')

</head>
<body>

<div class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>





   @include('Front.partials._header')


@yield('content')


@include('Front.partials._footer')




@include('Front.partials._script')
</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 13:45:30 GMT -->
</html>
