<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    @include('inc.header')

    <div class="conteiner">
      @include('inc.messages')
      <div class="row">
        <div class="col-10">
            @yield('content')
        </div>

      </div>
      <div class="col-2">
          @include('/inc.aside')
      </div>
    </div>


  </body>
</html>
