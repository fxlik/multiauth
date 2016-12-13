<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
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
	    <title>P2IG UNTAN: Kuesioner Daerah</title>

  		<link rel="stylesheet" href="{{ url('adminpanel/css') }}/bootstrap.min.css"/>
  		<link rel="stylesheet" href="{{ url('questionpage') }}/styles.css"/>
  		<link rel="stylesheet" href="{{ url('questionpage') }}/material.min.css"/>
  		<link rel="stylesheet" href="{{ url('questionpage') }}/material.teal-red.min.css"/>


	    <script src="{{ url('adminpanel/js/jquery') }}/jquery.min.js"></script>
	    <script src="{{ url('adminpanel/js') }}/bootstrap.min.js"></script>
	    <script src="{{ url('questionpage') }}/material.min.js"></script>

	    <style>
		    #view-source {
		      position: fixed;
		      display: block;
		      right: 0;
		      bottom: 0;
		      margin-right: 40px;
		      margin-bottom: 40px;
		      z-index: 900;
		    }
    	</style>

	</head>

	<body>
		<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
          


            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
            @endif

            {!! Form::open(['route' =>'jawaban.store','method'=>'POST']) !!}
            <div class="demo-crumbs mdl-color-text--grey-600">
              @if(Auth::guard('user')->user())
                <input type="text" name="user" value="{{ Auth::guard('user')->user()->name }}" disabled>
                   
              @endif
            </div>
            <div class="mdl-cell--12-colol"><br></div>

            

            <div class="col-xs-12 col-sm-12 col-md-12 text-center ">
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
          {!! Form::close() !!}
            </div>
          }
        </div>
      </main>
    </div>
	</body>
</html>