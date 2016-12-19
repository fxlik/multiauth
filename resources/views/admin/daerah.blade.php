@extends('admin.layout')

@section('content')
<!-- <div class="container"> -->
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
		<!-- <div class="col-md-12">
			<br>
		</div> -->
		<div class="col-md-12">
      <a href="{{ url('admin/daerah/create') }}">
          <button type="button" class="btn btn-success "> <i class="glyphicon glyphicon-plus"></i> Tambah Daerah</button>
      </a>
		</div>
		<div class="col-md-12">
			<br>
		</div>
		<div class="col-md-12">

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
      @endif


			<table class="table table-bordered table-striped table-hover table-heading table-datatable"> 
				<thead>
					<tr>
            <th width="45px" style="text-align: center; vertical-align: middle;">#</th>
						<th>Nama Daerah</th>
						<th style="text-align: center; vertical-align: middle;">Kode Akses</th>
						<th width="145px" style="text-align: center; vertical-align: middle;">Action</th>
					</tr>
				</thead>
				<tbody>
        @foreach($daerahs as $key => $daerah)
					<tr>
            <td style="text-align: center; vertical-align: middle;">{{ ++$i }}</td>
						<td style="text-align: left; vertical-align: middle;"> {{$daerah->nama_daerah}} </td>
						<td style="text-align: center; vertical-align: middle;"> {{$daerah->kode_akses}} </td>
						<td style="text-align: center; vertical-align: middle;">
							<a class="btn btn-primary" href="{{ route('admin.daerah.edit',$daerah->id) }}">
                <i class="glyphicon glyphicon-edit"></i></button>
              </a>
              {!! Form::open(['method' => 'DELETE','route' => ['admin.daerah.destroy', $daerah->id],'style'=>'display:inline']) !!}
              <button type="submit" class="btn btn-danger "> <i class="glyphicon glyphicon-trash"></i></button>
              {!! Form::close() !!}
						</td>
					</tr>
        @endforeach
				</tbody>
			</table>
      
      {!! $daerahs->render() !!}

			<!-- <nav>
    			<ul class="pagination">
      				<li v-if="pagination.current_page > 1">
        				<a href="#" aria-label="Previous" @click.prevent="changePage(pagination.current_page - 1)">
          					<span aria-hidden="true">«</span>
        				</a>
      				</li>
      				<li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
        				<a href="#" @click.prevent="changePage(page)">
          					@{{ page }}
        				</a>
      				</li>
      				<li v-if="pagination.current_page < pagination.last_page">
        				<a href="#" aria-label="Next" @click.prevent="changePage(pagination.current_page + 1)">
          					<span aria-hidden="true">»</span>
        				</a>
      				</li>
    			</ul>
  			</nav> -->
		</div>
	</div>

  

<!-- </div> -->

@endsection

