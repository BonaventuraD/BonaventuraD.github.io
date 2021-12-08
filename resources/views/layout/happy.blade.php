<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <style>
        body{padding-top: 100px;}
        .a{ margin-top: 25px}
        .a a{ color:black;
            margin-bottom:12px;
            display:block;
        transition-duration: 0.4s}
        .a a:hover {text-decoration: none;
            color: white;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="col-md-12" style=" padding:20px; background-color:rgba(128, 128, 128, 0.432); border-radius:12px; margin-bottom:20px">
                    <div class="text-center">
                    <header>
                    <img class="img-rounded" style="width:150px"src="../../images/deva.jpg" alt="">
                    <br><br><h3>Bonaventura Daiva Putra
                        <br><br>5026201096</h3>
                </header>
                 </div>
                </div>

                <div class="col-md-12" style=" padding:20px; background-color:rgba(128, 128, 128, 0.432); border-radius:12px; ">
                <h3 class="text-center">Menu</h3>
                    <h4 class="a">
                        <a  href="/pegawai">Pegawai</a>
                        <a  href="/absen">Absen</a>
                        <a  href="/tugas">Tugas</a>
                        <a  href="/unggas">Unggas</a>
                    </h4>
                </div>
            </div>
            <div class="col-md-9">
                <h1>@yield('judulhalaman')</h1><br>
                @section('konten')
                @show
            </div>

        </div>

        <footer>
            <div style="bottom:0; left: 0; position:absolute; text-align: center; width: 100%; margin-bottom:10px;">
                © 2021 Copyright: 5026201096 - Bonaventura Daiva Putra

              </div>
        </footer>

    </div>

</body>

</html>
