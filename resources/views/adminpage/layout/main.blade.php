<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>P2IG: Admin</title>
        <meta id="token" name="token" value="{{ csrf_token() }}">
        

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" type="image/png" href="https://1drv.ms/i/s!AjFw_MmBx28s9lFjmm6LaVTh3joL" />

        <!-- style for css -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/bootstrap.min.css"/>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/style.css"/>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/theme-1.css"/>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/toastr.min.css"/>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/dataTables.bootstrap.css"/>
        <!-- <link rel="stylesheet" href="{{ url('adminpanel/jquery-ui') }}/jquery-ui.min.css"/> -->
        

        <!-- style for js -->
        <!-- <script src="js/chartjs/chart.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js/chartjs') }}/chart.js"></script> -->
        <!-- <script src="js/jquery/jquery.min.js"></script> -->
        <script src="{{ url('adminpanel/js/jquery') }}/jquery.min.js"></script>
        <script src="{{ url('adminpanel/js') }}/bootstrap.min.js"></script>
        <script src="{{ url('adminpanel/js') }}/toastr.min.js"></script>
        <script src="{{ url('bower_components/vue/dist') }}/vue.min.js"></script>
        <script src="{{ url('adminpanel/js') }}/vue-resource.min.js"></script>


        <!-- <script src="js/jquery/jquery.dataTables.min.js"></script> -->
        <script src="{{ url('adminpanel/js/jquery') }}/jquery.dataTables.min.js"></script>
        <!-- <script src="js/jquery/dataTables.bootstrap.js"></script> -->
        <script src="{{ url('adminpanel/js/jquery') }}/dataTables.bootstrap.js"></script>
        <!-- <script src="js/angular/angular.min.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js/angular') }}/angular.min.js"></script> -->
        <!-- <script src="js/angular/angular-route.min.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js/angular') }}/angular-route.min.js"></script> -->
        <!-- <script src="js/angular/angular-ui-router.min.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js/angular') }}/angular-ui-router.min.js"></script> -->
        <!-- <script src="js/angular/angular-resource.min.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js/angular') }}/angular-resource.min.js"></script> -->
        <!-- <script src="js/angular/angular-animate.min.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js/angular') }}/angular-animate.min.js"></script> -->
        <!-- <script src="js/bootstrap/ui-bootstrap-tpls-0.12.1.min.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js/bootstrap') }}/ui-bootstrap-tpls-0.12.1.min.js"></script> -->
        <!-- <script src="js/chartjs/tc-angular-chartjs.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js/chartjs') }}/tc-angular-chartjs.js"></script> -->
        <!-- <script src="js/app.js"></script> -->
        <script type="text/javascript" src="{{ url('adminpanel/js') }}/daerah.js"></script>
        <!-- <script src="js/controllers.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js') }}/controllers.js"></script> -->
        <!-- <script src="js/services.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js') }}/services.js"></script> -->
        <!-- <script src="js/directives.js"></script> -->
        <!-- <script src="{{ url('adminpanel/js') }}/directives.js"></script> -->
        <!-- <script src="{{ url('adminpanel/jquery-ui') }}/jquery-ui.min.js"></script> -->
    </head>
	

    <body>
      <header id="header" >
          <div class="logo">
            <a href="{{ url('/admin')}}">
              <img src="{{ url('adminpanel/images') }}/rect.png" />
                </a>
            </div>
            <div class="header-content">
                <button id="sidebar-toggle" type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                </button>
                <ul>
                    @if(Auth::guard('admin')->user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </header>
<section id="container">
  <nav id="sidebar" ng-controller="SidebarController">
    <form>
      <div class="form-group" style="margin:10px;">
        <input type="text" class="form-control" style="font-weight:normal;" placeholder="Search..." />
        <!--<button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>-->
      </div>
    </form>
    <ul>
      <li>
        <a href="{{url('/admin')}}" class="open active">
          <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
          Dashboard
        </a>
      </li>
      <!-- <li>
        <a href="{{url('admin/kuesioner')}}" >
          <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
          Kuesioner
        </a>
      </li> -->

      <!-- percobaan  -->
      <li>
        <a href="#">
          <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
          Kuesioner
          <span class="caret"></span>
        </a>
        <ul>
          <li><a href="{{ url('admin/kategori') }}">Kategori</a></li>
          <li><a href="{{url('admin/kuesioner')}}">Kuesioner</a></li>
        </ul>
      </li>
      <!-- //percobaan -->
      
      <!-- percobaan keusioner yang bisa nih -->
      <li>
        <a href="{{url('admin/daerah')}}" >
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          Surveys
        </a>
      </li>
      <!-- percobaan kuesioner yang bisa nih -->

      <li>
        <a href="{{url('admin/daerah')}}" >
          <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
          Daerah
        </a>
      </li>
      <li>
        <a href="#">
          <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
          Tanggapan
        </a>
      </li>
      <li>
        <a href="#">
          <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
          Pendukung Keputusan
        </a>
      </li>
      <li>
        <a href="">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          Manajemen Admin
        </a>
      </li>
    </ul>
  </nav>

  <div>
    <div class="container-fluid">
      @yield('content')
    </div>
  </div>
  
</section>
<script>
$(document).ready(function () {
  $('.config > .config-toggle').click(function(){
    $(this).parent().toggleClass('open');
  });
  $('#sidebar-toggle').click(function () {
    $('header, header > .logo, section, section > nav#sidebar').toggleClass('active');
  });
  $('nav > ul > li > a').click(function(){
    if(!$(this).hasClass('open')){
      $(this).parent().parent().find('ul').not(this).slideUp();
      $(this).parent().find('ul').slideToggle('fast');
      $(this).parent().parent().find('a').removeClass('open');
      $(this).addClass('open');
    }else{
      $(this).parent().find('ul').slideToggle('fast');
      $(this).removeClass('open');
    }
  });
});
</script>
    </body>
</html>