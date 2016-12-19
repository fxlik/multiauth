@extends('admin.layout')

@section('content')
	<div class="row breadcrumbs">
    	<div class="col-md-12">
      		<ol class="breadcrumb">
        		<li><a href="{{ url('admin') }}">Home</a></li>
        		<li><a href="{{ url('admin/daerah') }}">Daerah</a></li>
        		<li class="active">Edit Daerah</li>
      		</ol>
      		<h3 class="page-header">Daerah</h3>
      		<h4 class="sub-header">  Edit Daerah</h4>
    	</div>
    </div>

	<div class="row">
		<div class="col-md-12">
			<div class="pull-left"> 
			<a href="{{url('admin/daerah')}}">
				<button type="button" class="btn btn-danger "> <i class="glyphicon glyphicon-arrow-left"></i> Back</button>
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

		{!! Form::model($daerah, ['method'=>'PATCH','route' =>['admin.daerah.update', $daerah->id]]) !!}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Daerah:</strong>
					{!! Form::text('nama_daerah', null, array('placeholder' => 'Daerah','class' => 'form-control')) !!}
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
@endsection