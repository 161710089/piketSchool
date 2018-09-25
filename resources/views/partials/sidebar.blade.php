     <aside class="sidebar">
                <div class="scrollbar-inner">

              <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="/assets/212/demo/img/profile-pics/2.jpg" alt="">
                            <div>
                                <div class="user__name">{{ Auth::user()->name}}</div>
                                <div class="user__email">{{ Auth::user()->email}}</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__active"><a href="#"><i class="zmdi zmdi-home"></i> Home</a></li>
                    
                            <ul class="navigation">
                        <li class="navigation__sub @@tableactive">
                            @role('admin')
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Data</a>

                            <ul>
                               <li class="@@datatableactive"><a href="{{ route
                                ('user.index') }}" >Buat Akun</a>
                                
                               </li>
             
                                <li class="@@datatableactive"><a href="{{ route('siswa.index') }}">View Siswa</a>
                                
                               </li>
                                <li class="@@datatableactive"><a href="{{ route('guru.index') }}">View Guru</a>
                                
                               </li>
                                <li class="@@datatableactive"><a href="{{ route('jurusan.index') }}">View jurusan</a>
                                
                               </li>
                                <li class="@@datatableactive"><a href="{{ route('kelas.index') }}">View kelas</a>
                                
                               </li>                   
                              
             

                    </ul>
                             
                           </li>
@endrole
           {{--    @role('member')

              <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Laporan</a>

                            <ul>
                                <li class="@@datatableactive"><a href="{{route('absenMember')}}">Absen</a></li>
                         
                           </li>

                    </ul>

                            <ul class="navigation">
                        <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Absensi</a>

                    </ul>
@endrole --}}

@role('petugas')
   <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Absensi</a>

                            <ul class="navigation">
                        <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Siswa</a>

                            <ul>
                                <li class="@@datatableactive"><a href="{{ route('absensi_siswa.index') }}">View Absen</a>
                                <li class="@@datatableactive"><a href="{{route('Rekap.index')}}">Rekap</a></li>
                               
                           </li>

                    </ul>

                        <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i> Guru</a>

                            <ul>
                                <li class="@@datatableactive"><a href="{{route('absensi_guru.index')}}">View Absen</a></li>
                                <li class="@@datatableactive"><a href="{{route('Rekapguru')}}">Rekap Guru</a></li>
                           </li>

@endrole
     @role('siswa')

              <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Laporan</a>

                            <ul>
                                <li class="@@datatableactive"><a href="{{route('absen')}}">Absen</a></li>
                         
                           </li>

                    </ul>

                            <ul class="navigation">
                        <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Absensi</a>

                    </ul>
@endrole

     @role('guru')

              <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Laporan</a>

                            <ul>
                                <li class="@@datatableactive"><a href="{{route('absenGuru')}}">Absen</a></li>
                         
                           </li>

                    </ul>

                            <ul class="navigation">
                        <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Absensi</a>

                    </ul>
@endrole

                </div>
            </aside>
