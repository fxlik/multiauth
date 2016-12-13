<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>

        <!-- Bootstrap -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"> -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


        <link rel="shortcut icon" type="image/png" href="https://1drv.ms/i/s!AjFw_MmBx28s9lFjmm6LaVTh3joL" />

        <!-- style for css -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/dataTables.bootstrap.css"/>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/bootstrap.min.css"/>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/style.css"/>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/theme-1.css"/>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/toastr.min.css"/>
        <link rel="stylesheet" href="{{ url('adminpanel/css') }}/font-awesome.min.css"/>
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

    <section id="container" style="height: 100%;">
        <nav id="sidebar">
            <form>
                <div class="form-group" style="margin:10px;">
                    <input type="text" class="form-control" style="font-weight:normal;" placeholder="Search..." />
                </div>
            </form>
            <ul>
                <li>
                    <a href="{{url('/admin')}}" class="header">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/surveys/6/edit')}}" >
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                    Kuesioner
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/respon')}}" >
                    <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                    Tanggapan
                    </a>
                </li>
            </ul>
        </nav>
        <!-- <div class="row"> -->
            <!-- <div class="col-xs-12"> -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Uh-oh!</strong> There was a problem with your submission:</p>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                
            <!-- </div> -->
        <!-- </div> -->
    </section>
    @section('js')
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script> -->
    @show
</body>
</html>