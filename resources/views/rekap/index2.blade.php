@extends('layouts.petugas')
@section('content')
		<div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Akumulasi</h4>
            <div class="pull-right">
			<a href="{{ URL::previous() }}"><button class="btn-primary btn-lg"> Back</button></a></div>
			<div class="table-responsive">
            <table  id="data-table" class="table">
			<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Keterangan</th>
						</tr>
						</thead>
					<?php
					$no = 1;
					?>
						@foreach($absensi_siswa as $data)
						<tbody>
						<tr>
							<td>{{$no++}}</td>
							<td>{{$data->tanggal}}</td>
							<td>{{$data->siswa->Nama}}</td>
							<td>{{$data->kelas->nama_kelas}}</td>
							<td>{{$data->keterangan}}</td>
						</tr>
						</tbody>
						@endforeach
				</table>

				<table class="tabelss table-striped table-bordered table-hover">
  
  <tr>
<td colspan="20" class="text-center info">Jumlah Absensi</td>
</tr>

<tr>
<th  colspan="5" class="text-center success">Izin</th>
<th  colspan="5" class="text-center success">Alfa</th>
<th  colspan="5" class="text-center success">Sakit</th>

</tr>

<tr>
<td colspan="5" class="text-center">{{ $jumlahIzin }}</td>
<td colspan="5" class="text-center">{{ $jumlahAlfa }}</td>
<td colspan="5" class="text-center">{{ $jumlahSakit}}</td>

</tr>
</table>

			</div>
			</div>
		</div>
@endsection