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
<td  colspan="5" class="text-center ">Nama </td>
<td colspan="5"  class=" text-center" >Nik</td>
<td  colspan="5" class="text-center ">jenis kelamin</td>
<td  colspan="5" class="text-center ">tempat_lahir</td>
<td  colspan="5" class="text-center ">tanggal lahir</td>
<td  colspan="5" class="text-center ">Alamat</td>
<td  colspan="5" class="text-center ">Aksi</td>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($guru as $data)


                      <tr>
                        <td colspan="5" class="text-center ">{{ $no++ }}</td>
                        <td colspan="5" class="text-center ">{{ $data->Nama }}</td>
                        <td colspan="5" class="text-center ">{{ $data->Nik }}</td>
                        <td colspan="5" class="text-center ">{{ $data->jk }}</td>
                        <td colspan="5" class="text-center ">{{ $data->tempat_lahir }}</td>
                        <td colspan="5" class="text-center ">{{ $data->tanggal_lahir }}</td>
                        <td colspan="5" class="text-center ">{{ $data->alamat}}</td>
                    
                        <td>
                            <a class="btn btn-warning" href="{{ route('guru.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('guru.destroy',$data->id) }}">
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
          <form action="{{ route('guru.store') }}" method="post" >
            {{ csrf_field() }}
        

            <div class="form-group {{ $errors->has('Nama') ? ' has-error' : '' }}">
              <label class="control-label">Nama</label> 
              <input type="text" name="Nama" class="form-controll"  required>
              @if ($errors->has('Nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama') }}</strong>
                            </span>
                        @endif
            </div>
            
          <div class="form-group {{ $errors->has('Nik') ? ' has-error' : '' }}">
              <label class="control-label">Nik</label>  
              <input type="text" name="Nik" class="form-controll"  required>
              @if ($errors->has('Nik'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nik') }}</strong>
                            </span>
                        @endif
            </div>
            
            
<div class="form-group {{ $errors->has('jk') ? ' has-error' : '' }}">
              <label class="control-label">Jenis Kelamin</label><br>  
            <input type="radio" class="radio-control" name="jk" value="Laki-laki">Laki-Laki &nbsp;            
            <input type="radio" class="radio-control" name="jk" value="Perempuan">Perempuan           
            @if ($errors->has('jk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jk') }}</strong>
                            </span>
                        @endif
                      






<div class="form-group {{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
              <label class="control-label">tempat lahir</label> 
              <input type="text" name="tempat_lahir" class="form-controll"  required>
              @if ($errors->has('tempat_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                            </span>
                        @endif
            </div>
            
            <div class="form-group {{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
              <label class="control-label">tanggal lahir</label>  
              <input type="date" name="tanggal_lahir" class="form-controll"  required>
              @if ($errors->has('tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                            </span>
                        @endif
            </div>
            
            <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
              <label class="control-label">alamat</label> 
              <input type="text" name="alamat" class="form-controll"  required>
              @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
            </div>


            <div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
              <label class="control-label">Nama user</label> 
              <select  name="id_user" class="form-controll" >
              <option>Pilih user</option>
              
              @foreach($user as $data)
              <option value="{{ $data->id}}">{{ $data->name}}</option>
              @endforeach
            
              </select>
              @if ($errors->has('id_user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_user') }}</strong>
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

                    
                    