<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<head>
  <!-- Scripts -->
 
<script src="{{ asset('js/app.js') }}" defer></script>
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <!-- hier wird der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   <title>@yield('title')</title>
</head>
<body>


   <!-- hier wird auch der Wert von der section "title" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   <h1><a href="/messages">@yield('title')</a></h1>
   <!-- hier wird der Wert von der section "content" eines blade templates ausgefüllt,
   welches dieses layout "extended" -->
   @yield('content')
   <!-- hier wird die php Funktion date() aufgerufen mit dem Format-Pattern 'd.m.Y'
    und im html ausgegeben-->
   <div class="text-white"><b>© Copyright Zürich: {{date('d.m.Y')}}</b></div>   
</body>
</html>



