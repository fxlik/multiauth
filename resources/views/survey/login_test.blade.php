<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Material Design Lite</title>

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="images/android-desktop.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
        <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">

        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="shortcut icon" type="image/png" href="http://ppids.untan.ac.id/p2ig/public/html/img/logo.png" />
        <title>P2IG UNTAN</title>

        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/bootstrap.min.css"/>
        <link rel="stylesheet" href="{{ url('questionpage') }}/styles.css"/>
        <link rel="stylesheet" href="{{ url('questionpage') }}/material.min.css"/>
        <link rel="stylesheet" href="{{ url('questionpage') }}/material.teal-red.min.css"/>
        <!-- <link rel="stylesheet" href="{{ url('questionpage') }}/login.css"/> -->


        <script src="{{ url('adminpanel/js/jquery') }}/jquery.min.js"></script>
        <script src="{{ url('adminpanel/js') }}/bootstrap.min.js"></script>
        <script src="{{ url('questionpage') }}/material.min.js"></script>
         <!-- <script src="{{ url('questionpage') }}/login.js"></script> -->


    </head>

    <body>
        {!! Form::open(['route' =>'kuesioner.store','method'=>'POST']) !!}
       <div class="row">
            <div class="form-group">
                <label for="kategori" class="control-label col-md-3">Daerah</label>
                <div class="col-md-5">
                    {!! Form::select("id", $daerahs, null, ['class' => 'form-control']) !!}
                </div>
            </div>

           <div class="form-group">
                <label for="kuesioner" class="control-label col-md-3">Kuesioner</label>
                <div class="col-md-8">
                    {!! Form::text("kode_akses", null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Isi Kuesioner</button>
            </div>
       </div>
       {!! Form::Close() !!} 
    </body>
</html>