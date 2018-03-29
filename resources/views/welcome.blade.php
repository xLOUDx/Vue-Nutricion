<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Prueba</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

    <div id="app">
      <Myheader> </Myheader> <br>
        <router-view></router-view> <br>
      <Myfooter> </Myfooter>
    </div>

    <script src="{{ asset('js/app.js') }}"> </script>
  </body>
</html>
