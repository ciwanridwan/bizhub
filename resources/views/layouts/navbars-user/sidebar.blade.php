<div class="sidebar" data-color="orange" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{route('dashboard-peserta')}}" class="simple-text logo-normal">
            Bizhub
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            @if (Session::has('dashboard-peserta'))
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard-peserta')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            {{Session::put('dashboard-peserta', null)}}
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard-peserta')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            @endif

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Pendaftaran') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        @if (Session::has('profile-pemilik'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('pendaftaran-profile')}}">
                                <i class="material-icons">portrait</i>
                                <p>Profile Akun</p>
                            </a>
                        </li>
                        {{Session::put('profile-pemilik', null)}}
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pendaftaran-profile')}}">
                                <i class="material-icons">portrait</i>
                                <p>Profile Akun</p>
                            </a>
                        </li>
                        @endif

                        @if (Session::has('profile-usaha'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('pendaftaran-usaha')}}">
                                <i class="material-icons">add_business</i>
                                <p>Profile Usaha</p>
                            </a>
                        </li>
                        {{Session::put('profile-usaha', null)}}
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pendaftaran-usaha')}}">
                                <i class="material-icons">add_business</i>
                                <p>Profile Usaha</p>
                            </a>
                        </li>
                        @endif

                        @if (Session::has('isi-laporan'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('isi-laporan')}}">
                                <i class="material-icons">rate_review</i>
                                <p>Isi Laporan</p>
                            </a>
                        </li>
                        {{Session::put('isi-laporan', null)}}
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('isi-laporan')}}">
                                <i class="material-icons">rate_review</i>
                                <p>Isi Laporan</p>
                            </a>
                        </li>
                        @endif

                    </ul>
                </div>
            </li>

            @if (Session::has('edit-peserta'))
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="material-icons">person</i>
                    <p>Profile</p>
                </a>
            </li>
            {{Session::put('edit-peserta', null)}}
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('edit-peserta')}}">
                    <i class="material-icons">person</i>
                    <p>Profile</p>
                </a>
            </li>
            @endif

            @if (Session::has('riwayat-laporan'))
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">notifications</i>
                    <p>Riwayat Laporan</p>
                </a>
            </li>
            {{Session::put('riwayat-laporan', null)}}
            @else
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">notifications</i>
                    <p>Riwayat Laporan</p>
                </a>
            </li>
            @endif

            @if (Session::has('konsultasi'))
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">how_to_reg</i>
                    <p>Konsultasi</p>
                </a>
            </li>
            {{Session::put('konsultasi', null)}}
            @else
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">how_to_reg</i>
                    <p>Konsultasi</p>
                </a>
            </li>
            @endif

            @if (Session::has('akses-modal'))
            <li class="nav-item active">
                <a class="nav-link" href="{{route('akses-modal')}}">
                    <i class="material-icons">business_center</i>
                    <p>Akses Modal</p>
                </a>
            </li>
            {{Session::put('akses-modal', null)}}
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('akses-modal')}}">
                    <i class="material-icons">business_center</i>
                    <p>Akses Modal</p>
                </a>
            </li>
            @endif

            @if (Session::has('akses-pasar'))
            <li class="nav-item active">
                <a class="nav-link" href="{{route('akses-ecommerce')}}">
                    <i class="material-icons">local_mall</i>
                    <p>Akses E-commerce</p>
                </a>
            </li>
            {{Session::put('akses-pasar', null)}}
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('akses-ecommerce')}}">
                    <i class="material-icons">local_mall</i>
                    <p>Akses E-commerce</p>
                </a>
            </li>
            @endif

            @if (Session::has('video'))
            <li class="nav-item active">
                <a class="nav-link" href="{{route('video-berwirausaha')}}">
                    <i class="material-icons">movie_creation</i>
                    <p>Materi Berwirausaha</p>
                </a>
            </li>
            {{Session::put('video', null)}}
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('video-berwirausaha')}}">
                    <i class="material-icons">movie_creation</i>
                    <p>Materi Berwirausaha</p>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>