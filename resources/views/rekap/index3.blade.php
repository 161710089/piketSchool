@extends('layouts.petugas')
@section('content')	
<br>
		<div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Akumulasi</h4>
            <div class="pull-right">
			<form action="{{route('laporanabsensiguru')}}" method="post">
			{{csrf_field()}}
			<label>Dari Tanggal</label>
			<input type="date" name="a" required="">
			
			<label>Sampai Tanggal</label>
			<input type="date" name="b" required="">
	        	<input type="submit" name="submit" class="btn btn-light" value="Submit">
			</form>	
			</div>
			</div>
@endsection