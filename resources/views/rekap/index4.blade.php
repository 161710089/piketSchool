@extends('layouts.petugas')
@section('content')
		<div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Akumulasi</h4>
            <div class="pull-right">
			<a href="{{ URL::previous() }}"><button class="btn-primary btn-lg"> Back</button></a></div>
			<div class="table-responsive">
            <table  class="table">
			<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Nama</th>
							<th>Keterangan</th>
						</tr>
						</thead>
					<?php
					$no = 1;
					?>
						@foreach($absensi_guru as $data)
						<tbody>
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->tanggal}}</td>
							<td>{{$data->guru->Nama}}</td>
							<td>{{$data->keterangan}}</td>
						</tr>
						</tbody>
						@endforeach
				</table>
			</div>
			</div>
		</div>
@endsection