@extends('admin.layout')
@section('content')
<div class="row breadcrumbs">
	<div class="col-md-12">
      <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}">Home</a></li>
        <li class="active">Daerah</li>
      </ol>
      <h3 class="page-header">Daerah</h3><br>
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
					<th>#</th>
					<th>id respon</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</div>
@endsection
