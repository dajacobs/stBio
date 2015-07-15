<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'biostats')</title>
  {!! HTML::style('bower/jquery-ui/themes/smoothness/jquery-ui.min.css') !!}
  {!! HTML::style('/css/app.css') !!}
  {!! HTML::style('bower/datatables/media/css/jquery.dataTables.min.css') !!}
  {!! HTML::style('bower/datatables/media/css/jquery.dataTables_themeroller.css') !!}
  {!! HTML::style('/css/scrollMonitor.css') !!}
  
  <style>
    @yield('style')
  </style>
</head>
<body>

  @include('partials.nav')

  @yield('content')

  <!-- scripts -->
  {!! HTML::script('bower/jquery/dist/jquery.min.js') !!}
  {!! HTML::script('bower/jquery-ui/jquery-ui.min.js') !!}
  {!! HTML::script('bower/bootstrap/dist/js/bootstrap.min.js') !!}
  {!! HTML::script('bower/datatables/media/js/jquery.dataTables.min.js') !!}
  {!! HTML::script('bower/scrollMonitor/scrollMonitor.js') !!}
  @yield('script')
</body>
</html>
