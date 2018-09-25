@extends('layouts.petugas')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Absen Guru 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('absensi_guru.update',$absensi_guru->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
			  		{{ csrf_field() }}

			  		<div class="form-group {{ $errors->has('id_guru') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Guru</label>	
			  		<select name="id_guru" class="form-controll">
			  					@foreach($guru as $data)
			  						<option value="{{ $data->id }}" {{$selectguru == $data->id ? 'selected="selected"':'' }}>{{ $data->Nama }}</option>
			  				@endforeach
			  			</select>
			  						@if ($errors->has('id_guru'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_guru') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
							  		
			  		<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal</label>	
			  			<input type="date" name="tanggal" value="{{$absensi_guru->tanggal}}" class="form-controll" required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
								<label class="control-label">keterangan</label><br>

								<input type="radio" class="radio-control" name="keterangan" value="Izin" {{ $absensi_guru->keterangan == 'Izin' ? 'checked' : '' }}>Izin&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="Sakit" {{ $absensi_guru->keterangan == 'Sakit' ? 'checked' : '' }}>Sakit&nbsp&nbsp
								<input type="radio" class="radio-control" name="keterangan"  value="Alfa" {{ $absensi_guru->keterangan == 'Alfa' ? 'checked' : '' }}>Alfa
								@if ($errors->has('keterangan'))
									<span class="help-blocks">
										<strong>{{$errors->first('keterangan')}}</strong>
									</span>
								@endif
							
							
			  		        	<div class="form-group {{ $errors->has('nama_petugas') ? ' has-error' : '' }}">
			  			<input type="hidden" name="nama_petugas" value="{{$absensi_guru->nama_petugas}}" class="form-controll"  required>
			  			@if ($errors->has('nama_petugas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_petugas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	                   
			  	<div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama user</label>	
			  		<select name="id_user" class="form-controll">
			  					@foreach($user as $data)
			  						<option value="{{ $data->id }}" {{$selectuser == $data->id ? 'selected="selected"':'' 
			  					}}>{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  						@if ($errors->has('id_user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_user') }}</strong>
                            </span>
                        @endif
			  		</div>
			  
           
			  		

			  		
			  			<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
