<!DOCTYPE html>
<html>
  <head>
    <title>Bacod</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="bacod, bagi code, snippet, code sharing, laravel, wab application">
    <meta name="description" content="Aplikasi web untuk berbagi code snippet">
    <meta name="author" content="Heru Rusdianto">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">

    <!--[if lt IE 9]>
      <script src="{{ asset('js/html5shiv.js') }}"></script>
      <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
  </head>
  <body onload="prettyPrint()">
    <div class="navbar-fixed-top">
      <button class="btn btn-info" onclick="baru()">Baru</button>
    </div>

    <pre class="col-xs-12 col-sm-12 col-md-12 col-lg-12 prettyprint linenums">{{ e($kode->code) }}</pre>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//google-code-prettify.googlecode.com/svn/loader/prettify.js"></script>
    <script>
      var url_home = "{{ route('home') }}";

      function baru() {
        $(location).prop('href', url_home);
      }
    </script>
  </body>
</html>