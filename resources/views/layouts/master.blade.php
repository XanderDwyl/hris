<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HRIS - Human Resource Information System</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <body id="app">

    @yield('header')

    @yield('content')

    <script src="{{ mix('/js/app.js') }}" charset="utf-8"></script>
  </body>
</html>
