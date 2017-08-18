
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Vivify NBA</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link href="/css/comments-list.css" rel="stylesheet">
  </head>

  <body>

    @include('partials.navbar')

    @include('partials.header')

    @if($flash = session('message'))
      <div class="alert alert-success" role="alert">
        {{$flash}}
      </div>
    @endif

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          @yield('content')


        </div><!-- /.blog-main -->


      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('partials.footer')


  </body>
</html>
