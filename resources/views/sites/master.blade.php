 <!DOCTYPE html>
 <html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('siteTitle')</title>
    {{ Html::style('css/site.css') }}
    {{ Html::script('https://code.jquery.com/jquery-3.3.1.js')}}
     @routes()
    {{ Html::script('js/booking.js')}}
</head>
<body>
    @yield('content')
 </body>
 </html>
 