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
        body{padding-top: 100px};
    </style>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <header>
                    <img style="width:150px"src="../../images/deva.jpg" alt="">
                    <br><br>Bonaventura Daiva Putra
                    <br>5026201096
                </header>
                <br><br><br><br>
                <h3>Menu</h3>

                <a href="/pegawai">Pegawai</a><br>
                <a href="/absen">Absen</a><br>
                <a href="/tugas">Tugas</a><br>
                <a href="">Praktikum</a><br>
                <br><br><br><br>
                <footer> © Copyright 2021 <br> 5026201096 - Bonaventura Daiva Putra
                </footer>
            </div>
            <div class="col-sm-9">
                <h1>@yield('judulhalaman')</h1><br>
                @section('konten')
                @show
            </div>

        </div>


    </div>
</body>

</html>
