@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>
           <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		    
<td colspan="5"  class=" text-center" >No</td>
<td  colspan="5" class="text-center ">Nama kelas</td>
<td  colspan="5" class="text-center ">Nama Jurusan</td>
<td  colspan="5" class="text-center ">Aksi</td>
					</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($kelas as $data)


				  	  <tr>
				    	<td colspan="5" class="text-center ">{{ $no++ }}</td>
				    	<td colspan="5" class="text-center ">{{ $data->nama_kelas }}</td>
				    	<td colspan="5" class="text-center ">{{ $data->jurusan->nama_jurusan }}</td>
				    
						<td>
							<a class="btn btn-warning" href="{{ route('kelas.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('kelas.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
       <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
      <br>
        <button type="button" class="close" data-dismiss="modal">&times;<br> </button>
        <br>
       </div>
      <div class="modal-body">
          <form action="{{ route('kelas.store') }}" method="post" >
			  		{{ csrf_field() }}
			  	
			  		<div class="form-group {{ $errors->has('nama_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kelas</label>	
			  			<input type="text" name="nama_kelas" class="form-controll"  required>
			  			@if ($errors->has('nama_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('id_jurusan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jurusan</label>	
			  			<select  name="id_jurusan" class="form-controll" >
			  			<option>Pilih Jurusan</option>
			  			
			  			@foreach($jurusan as $data)
			  			<option value="{{ $data->id}}">{{ $data->nama_jurusan}}</option>
			  			@endforeach
			  		
			  			</select>
			  			@if ($errors->has('id_jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_jurusan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	
                                 <div class="form-group">
                <button type="submit" class="btn btn-danger">Submit</button>

                <button type="submit" class="btn btn-warning">Reset</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
    </div>

@endsection

				    
				    