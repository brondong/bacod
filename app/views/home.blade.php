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
  <body>
    <div class="navbar-fixed-top">
      <button class="btn btn-info" id="simpan" onclick="simpan()">Simpan</button>
    </div>

    <textarea class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-control" id="code"></textarea>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('js/tabby.min.js') }}"></script>
    <script src="{{ asset('js/autosize.min.js') }}"></script>
    <script>
      var url_simpan = "{{ route('simpan') }}";

      $(function() {
        // textarea
        var tinggi = ($(window).height() - 55);
        $('#code').height(tinggi).focus().tabby().autosize();
      });

      function simpan() {
        // code di textarea
        var code = $.trim($('#code').val());

        // kosong
        if (!code) return false;

        // ajax request
        $.ajax({
          url: url_simpan,
          type: 'POST',
          dataType: 'json',
          data: { code: code },
        })
        .done(function(respon) {
          $(location).prop('href', respon.uri);
        })
        .fail(function() {
          console.log("error");
        });
      }
    </script>
  </body>
</html>