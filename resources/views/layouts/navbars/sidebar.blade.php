<div class="sidebar" data-color="orange" data-background-color="white"
  data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{route('home')}}/" class="simple-text logo-normal">
      {{ __('Bizhub') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Formulir') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile-pemilik' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                {{-- <a class="nav-link" href="{{ route('user.index') }}"> --}}
                <i class="material-icons">account_box</i>
                <p>{{ __('Profile Pemilik') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profileUsaha' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">how_to_vote</i>
                <p>{{ __('Profile Usaha') }}</p>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'kuesioner' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">comment_bank</i>
                <p>{{ __('Kuesioner') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'mitra' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('mitra-kami') }}">
          <i class="material-icons">people</i>
          <p>{{ __('Mitra Kami') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'kontak' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('kontak-kami') }}">
          <i class="material-icons">phone_callback</i>
          <p>{{ __('Kontak Kami') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'slider' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('slider') }}">
          <i class="material-icons">hdr_strong</i>
          <p>{{ __('Slider') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'terverifikasi' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('terverifikasi')}}">
          <i class="material-icons">fact_check</i>
          <p>{{ __('Wirausaha Terverifikasi') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'belum-verifikasi' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('belum-terverifikasi')}}">
          <i class="material-icons">event_busy</i>
          <p>{{ __('Belum Terverifikasi') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'berdasarkan-skala' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('skala')}}">
          <i class="material-icons">edit_location</i>
          <p>{{ __('Wirausaha Berdasarkan Skala') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>