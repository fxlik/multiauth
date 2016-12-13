@extends('admin.layout')
@section('content')
<div class="row breadcrumbs">
	<div class="col-md-12">
      <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}">Beranda</a></li>
        <li class="active">Tanggapan</li>
      </ol>
      <h3 class="page-header">Tanggapan</h3><br>
    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<br>
	</div>
	<div class="col-md-12">
		<table class="table table-bordered table-striped table-hover table-heading table-datatable">
			<thead>
				<tr>
					<th width="15px">#</th>
					<th>id respon</th>
					<th style="width: 50px">Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($responses as $key => $response)
				<tr>
					<td>{{++$i}}</td>
					<td>{{$response->id}}</td>
					<td>
					<a class="btn btn-primary" href="{{ route('admin.respon.show', $response )}}">
                		<i class="glyphicon glyphicon-eye-open"></i> Lihat Tanggapan
              		</a>
              		</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
