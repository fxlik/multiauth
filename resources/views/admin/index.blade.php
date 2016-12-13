@extends('admin.layout')
@section('content')
<div class="col-md-12">
	<br>
</div>
	<div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel panel-primary text-center no-boder bg-color-green">
            <div class="panel-body">
                <i class="fa fa-commenting fa-5x"></i>
                <h3>{{$tanggapan}}</h3>
            </div>
        	<div class="panel-footer back-footer-green">
        	Tanggapan

        	</div>
        </div>
    </div>

    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="panel panel-primary text-center no-boder bg-color-green">
            <div class="panel-body">
                <i class="fa fa-globe fa-5x"></i>
                <h3>14</h3>
            </div>
        	<div class="panel-footer back-footer-green">
        	Daerah Responden

        	</div>
        </div>
    </div>

	<!-- <a class="btn btn-success" href="{{ action('Admin\SurveyController@create') }}">Create Survey</a> -->
@endsection