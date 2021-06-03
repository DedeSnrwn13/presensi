<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Halaman Error atau Tidak Ada!</title>
  </head>
  <body>
    <div class="container">
        <div class="align-items-center text-center" style="margin-top: 190px;">
            <div>
                <h1>Oops Halaman tidak ada, <br> atau Anda memasukkan URL yang salah.</h1>
            </div>
            <br>
            <div>
                <a href="{{ route('/') }}" class="btn btn-info btn-lg">Kembali ke Home</a>
            </div>
        </div>
    </div>
  </body>
</html>
