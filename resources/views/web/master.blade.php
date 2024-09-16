<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTO EXAM</title>

    <!-- Roboto Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    @include('web.layout.header-links')
</head>
<body>
    <!-- scroll up -->
    <div class="scroll-up">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
    @include('web.layout.header')
    @yield('content')
    @include('web.layout.footer')
    @include('web.layout.footer-links')
    @include('web.layout.common-js')
    @yield('js')

</body>
</html>
