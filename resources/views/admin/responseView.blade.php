@extends('admin.layout')
@section('content')
<div class="row breadcrumbs">
	<div class="col-md-12">
      <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}">Beranda</a></li>
        <li><a href="{{ url('admin/respon') }}">Tanggapan</a></li>
         <li class="active">Tanggapan {{$respon->id}}</li>
      </ol>
      <h3 class="page-header">Tanggapan Daerah</h3><br>
    </div>
</div>

<div class="row">
	<div class="col-md-12">
		<br>
	</div>
	<div class="col-md-12">
		 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Respon:</strong>
                {{ $respon->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                Jawaban dengan nilai <strong> Sudah: </strong>
                <b style="color: blue;">{{$hitungs}}</b> &
                Jawaban dengan nilai <strong>Belum: </strong>
                <b style="color: red;">{{$hitungb}}</b>     
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                @if ($hitungs>=75)
    				Daerah kelas <h4>A</h4>
				@elseif ($hitungs<=4 )
    				Daerah kelas <h4>B</h4>
    			@elseif($hitung>100)
    				I don't have any records!
				@else
    				Daerah kelas <h4>B</h4>
				@endif
            </div>
        </div>
	</div>
	<div class="col-md-12">
		<table class="table table-bordered table-striped table-hover table-heading table-datatable">
			<thead>
				<tr>
					<th></th>
					<th></th>	
				</tr>	
			</thead>
			<tbody>
			@foreach($jawabans as $key => $jawaban)
				<tr>
					<td>{{ $jawaban->label }}</td>
					<td>{{ $jawaban->value }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
