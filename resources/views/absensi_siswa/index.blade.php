
 @extends('layouts.petugas')
@section('content')
<style type="text/css">
    #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 30%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    width: 100%; /* Full-width */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
  
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #000000;
}
</style>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Piket Sekolah</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="/assets/datepick/daterangepicker.css" />

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script> 
      <script type="text/javascript" src="/assets/datepick/moment.min.js"></script>
      <script type="text/javascript" src="/assets/datepick/daterangepicker.js"></script>



 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" ></script>

</head>

<body>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                       
                        </div>
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Kelas..">


<hr>
{{-- <div class="row">
    <div class="col-md-4">
     {!! Form::label('tanggal','pilih kelas') !!}   
     {!! Form::select('id', $kelas ,null,array ('id'=>'kelas','class' => 'form-controll')) !!}   
        
    </div>
</div> --}}
                        <!-- /.panel-heading -->
{{-- <form action="absensi_siswa/index.php" name="date" method="get">                    
<button class="btn btn-primary" type="submit">apply</button>
 --}}
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table  id="myTable" class="table">
  
                                        


<tr>
<th colspan="5" class="text-center success">no</th>    
<th colspan="5" class="text-center success">Tanggal</th>    
<th colspan="5" class="text-center success">Nama</th>    
<th colspan="5" class="text-center success">Kelas</th>    
<th  colspan="5" class="text-center success">Keterangan</th>
<th  colspan="5" class="text-center success">Nama PetugasPiket</th>
<th  colspan="5" class="text-center success">Aksi</th>

</tr>
                        
<tr>
    <tbody id="absensi_siswa">
                           @php $no = 1; @endphp
                     

                        @foreach($absensi_siswa as $data)
<td colspan="5" class="text-center success">{{ $no++ }}</td>
<td colspan="5" class="text-center">{{ $data->tanggal }}</td>
<td colspan="5" class="text-center">{{ $data->siswa->Nama }}</td>
<td colspan="5" class="text-center">{{ $data->kelas->nama_kelas }}</td>
<td colspan="5" class="text-center">{{ $data->keterangan }}</td>
<td colspan="5" class="text-center">{{ $data->nama_petugas }}</td>

 <td>
    <a class="btn btn-warning" href="{{ route('absensi_siswa.edit',$data->id) }}">Edit</a>
</td>
                       <td>
                            <form method="post" action="{{ route('absensi_siswa.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                     
</tr>

        
    </tbody>          
@endforeach  
                                </table>

                            </div>

{{-- Count --}}
{{-- Count --}}
{{-- Count --}}
<table class="tabelss table-striped table-bordered table-hover">
<tr>
<th  colspan="5" class="text-center success">Izin</th>
<th  colspan="5" class="text-center success">Alfa</th>
<th  colspan="5" class="text-center success">Sakit</th>
</tr>

<tr>
<td colspan="5" class="text-center">{{ $jumlahIzin }}</td>
<td colspan="5" class="text-center">{{ $jumlahAlfa }}</td>
<td colspan="5" class="text-center">{{ $jumlahSakit }}</td>

</tr>
</table>
   
{{-- Count --}}
{{-- Count --}}
{{-- Count --}}

                            <!-- /.table-responsive -->
                      {{--       <div class="well">
                                <h4>Keterangan Absensi</h4>
                                <p>A = Tidak Masuk Tanpa Keterangan</p>
                                <p>I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan</p>
                                <p>S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan</p>
                                <p>M = Hadir</p>
                                <p>N = Belum Ada Keterangan Absensi</p>
                                <p>L = Hari Libur </p>

                            </div> --}}
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
      
    <!-- Core Scripts - Include with every page -->
{{-- Modal Create Start --}}
{{-- Modal Create Start --}}
{{-- Modal Create Start --}}

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
  <form action="{{route('absensi_siswa.store')}}" method="post">
                            {{csrf_field()}}

                    <div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
                                <label class="control-label">Nama Kelas </label>    
                                <select name="id_kelas" class="form-controll" id="kelas">
                                <option>Pilih Kelas</option>
                                @foreach($kelas as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                                @endforeach
                        </select>
                        @if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
                    </div>
    
                    <div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
                                <label class="control-label">Nama Siswa </label>    
                                <select name="id_siswa" class="form-controll" id="namasis">
                                <option>Pilih Siswa</option>
                                @foreach($siswa as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->Nama }}|{{ $data->Nis }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_siswas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswas') }}</strong>
                            </span>
                        @endif
                    </div>
                    

                    

                    <div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}}">
                                <label class="control-label">Tanggal</label>
                                <input type="date" class="form-controll" name="tanggal" required>
                                @if ($errors->has('tanggal'))
                                    <span class="help-blocks">
                                        <strong>{{$errors->first('tanggal')}}</strong>
                                    </span>
                                @endif
                            </div>

                    <div class="form-group {{$errors->has('keterangan') ? 'has-error' : ''}}">
                                <label class="control-label">keterangan</label><br>
                                <input type="radio" class="radio-control" name="keterangan" value="Izin">Izin&nbsp&nbsp
                                <input type="radio" class="radio-control" name="keterangan"  value="Sakit">Sakit&nbsp&nbsp
                                <input type="radio" class="radio-control" name="keterangan"  value="Alfa">Alfa
                                @if ($errors->has('keterangan'))
                                    <span class="help-blocks">
                                        <strong>{{$errors->first('keterangan')}}</strong>
                                    </span>
                                @endif

                            </div>

                <div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
                                <label class="control-label">User </label>    
                                <select name="id_user" class="form-controll" id="user" >
                                <option>pilih user</option>
                                @foreach($user as $data)
                                    <option value="{{ $data->id }}" >
                                        {{ $data->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_user') }}</strong>
                            </span>
                        @endif
                    </div>

       {{--  <div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
                                  
                    <input  type="text" name="id_user" 
                    class="form-controll" id="user" >
                                        
                        @if ($errors->has('id_user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_user') }}</strong>
                            </span>
                        @endif
                    </div>
                            
 --}}
        <div class="form-group {{ $errors->has('nama_petugas') ? ' has-error' : '' }}">
                                  
                    <input  type="hidden" name="nama_petugas" 
                    class="form-controll" value="{{ Auth::user()->name }}">
                        @if ($errors->has('nama_petugas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_petugas') }}</strong>
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
{{-- Modal Crete End --}}
{{-- Modal Crete End --}}
{{-- Modal Crete End --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#kelas').change(function() {
            $('#namasis').html('');
            $.ajax({
                method : 'GET',
                dataType: 'html',
                url : 'filter/kelas/' + $(this).val(),
                success : function(data){
                    $('#namasis').append(data);
                },
                error : function() {
                    $('#namasis').html('Tidak Ada Hasil');
                }

            });         
        });
        $('#class').change(function() {
            $('#name').html('');
            $.ajax({
                method : 'GET',
                dataType: 'html',
                url : 'filter/kelas/' + $(this).val(),
                success : function(data){
                    $('#name').append(data);
                },
                error : function() {
                    $('#name').html('Tidak Ada Hasil');
                }

            });         
        })
    });
</script>



<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#namasis').change(function() {
            $('#user').html('');
            $.ajax({
                method : 'GET',
                dataType: 'html',
                url : 'filter/user/' + $(this).val(),
                success : function(data){
                    $('#user').append(data);
                },
                error : function() {
                    $('#user').html('Tidak Ada Hasil');
                }

            });         
        });
        $('#class').change(function() {
            $('#name').html('');
            $.ajax({
                method : 'GET',
                dataType: 'html',
                url : 'filter/user/' + $(this).val(),
                success : function(data){
                    $('#name').append(data);
                },
                error : function() {
                    $('#name').html('Tidak Ada Hasil');
                }

            });         
        })
    });
</script>




    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>


</html>

@endsection

