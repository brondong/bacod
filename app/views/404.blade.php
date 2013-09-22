<!DOCTYPE html>
<html>
  <head>
    <title>Bacod - 404</title>
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
  <body>
    <div class="text-center">
        <h1>404</h1>

        <h2>Not Found</h2>

        <hr />

        <h3>Halaman yang anda minta tidak ditemukan.</h3>

        <br />

        <h5>Anda akan dialihkan ke halaman utama aplikasi.</h5>

        <br />

        <div class="progress">
          <div class="progress-bar" style="width: 0%;"></div>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
      var home = "{{ route('home') }}";

      var progress = setInterval(function() {
        var progress_bar = $('.progress-bar');

        if (progress_bar.width() == 400) {
          $(location).prop('href', home);
        } else {
          progress_bar.width(progress_bar.width() + 80);
        }

        progress_bar.text(progress_bar.width() / 4 + "%");
      }, 800);
    </script>
  </body>
</html>