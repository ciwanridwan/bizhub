<div class="sidebar" data-color="orange" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard-peserta')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i class="material-icons">content_paste</i>
                    <p>Pendaftaran
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('pendaftaran-usaha')}}">
                                <i class="material-icons">group</i>
                                <p>Usaha dan Pemilik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('isi-laporan')}}">
                                <i class="material-icons">content_paste</i>
                                <p>Isi Laporan</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('edit-peserta')}}">
                    <i class="material-icons">person</i>
                    <p>Profile</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('riwayat-laporan')}}">
                    <i class="material-icons">notifications</i>
                    <p>Riwayat Laporan</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('konsultasi')}}">
                    <i class="material-icons">how_to_reg</i>
                    <p>Konsultasi</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('akses-modal')}}">
                    <i class="material-icons">notifications</i>
                    <p>Akses Modal</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('akses-ecommerce')}}">
                    <i class="material-icons">notifications</i>
                    <p>Akses E-commerce</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('video-berwirausaha')}}">
                    <i class="material-icons">movie_creation</i>
                    <p>Materi Berwirausaha</p>
                </a>
            </li>

        </ul>
    </div>
</div>