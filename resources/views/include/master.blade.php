<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('include.styles')
    <title>@yield('page_title')</title>
</head>
<body>

@include('include.header')

@include('include.search')

@yield('main_content')


@include('include.footer')

@include('include.scripts')
</body>
</html>
