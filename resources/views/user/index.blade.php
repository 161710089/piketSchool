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
<td  colspan="5" class="text-center ">Email</td>
<td  colspan="5" class="text-center ">Action</td>

					</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($user as $data)


				  	  <tr>
				    	<td colspan="5" class="text-center ">{{ $no++ }}</td>
				    	<td colspan="5" class="text-center ">{{ $data->name }}</td>
				    	<td colspan="5" class="text-center ">{{ $data->email }}</td>
				   
				     

						<td>
							<a class="btn btn-warning" href="{{ route('user.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('user.destroy',$data->id) }}">
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
			          <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-controll" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<div class="form-group row">
 <label for="name" class="col-md-4 col-form-label text-md-right">Role </label>   

<div class="col-md-6">
    <input type="radio" name="role" value="3">Petugas
    <input type="radio" name="role" value="4">Siswa
    <input type="radio" name="role" value="5">Guru
    
</div>

</div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-controll" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-controll" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-controll" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

@endsection

				    
				    