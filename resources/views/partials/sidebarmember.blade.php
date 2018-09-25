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

                        <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Laporan</a>

                            <ul>
                                <li class="@@datatableactive"><a href="{{route('absen')}}">Absen</a></li>
                         
                           </li>

                    </ul>

                            <ul class="navigation">
                        <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i>Absensi</a>


                                        </div>
            </aside>
