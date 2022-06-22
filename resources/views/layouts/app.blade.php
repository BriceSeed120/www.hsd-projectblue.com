<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts._head')
</head>

<body>

<!-- ======= Header ======= -->

@include('layouts._header')
<!-- End Header -->



<main id="main">


@yield('content')


</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('layouts._footer')

</body>

</html>
