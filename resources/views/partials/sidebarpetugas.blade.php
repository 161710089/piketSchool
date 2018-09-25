     <aside class="sidebar">
                <div class="scrollbar-inner">

              <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="/assets/212/demo/img/profile-pics/8.jpg" alt="">
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

                    </ul>
                </div>
            </aside>
