@extends('admin.layout')

@section('content')

	<div class="row breadcrumbs">
    	<div class="col-md-12">
      		<ol class="breadcrumb">
        		<li><a href="{{ url('admin') }}">Home</a></li>
        		<li><a href="{{ url('admin/daerah') }}">Daerah</a></li>
        		<li class="active">Tambah Daerah</li>
      		</ol>
      		<h3 class="page-header">Daerah</h3>
      		<h4 class="sub-header">  Tambah Daerah</h4>
    	</div>
    </div>

	<div class="row">
		<div class="col-md-12">
			<div class="pull-left"> 
			<a href="{{url('admin/daerah')}}">
				<button type="button" class="btn btn-danger "> <i class="glyphicon glyphicon-arrow-left"></i> Kembali</button>
			</a>
			</div>
		</div>	
		<div class="col-md-12">
			<br>
		</div>

		@if (count($errors) > 0)
        	<div class="alert alert-danger">
            	<strong>Whoops!</strong> There were some problems with your input.<br><br>
            	<ul>
                	@foreach ($errors->all() as $error)
                    	<li>{{ $error }}</li>
                	@endforeach
            	</ul>
        	</div>
        @endif

		{!! Form::open(['route' =>'admin.daerah.store','method'=>'POST']) !!}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong class="col-md-1 control-label">Daerah:</strong>
					<div class="col-md-5">
						{!! Form::text('nama_daerah', null, array('placeholder' => 'Daerah','class' => 'form-control')) !!}
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<br>
			</div>
			<div class="form-group">
                <div class="col-md-5 col-md-offset-1">
                    <button type="submit" class="btn btn-primary">
                        <i class="glyphicon glyphicon-plus"></i>Tambah
                    </button>
                </div>
            </div>
		</div>
		{!! Form::close() !!}
	</div>
@endsection