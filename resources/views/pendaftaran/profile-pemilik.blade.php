@extends('layouts.user', ['activePage' => 'profile', 'titlePage' => __('Pendaftaran')])

@section('content')
{{-- FORM PENDAFTARAN PROFILE PEMILIK USAHA --}}
<div class="content">
  <div class="container-fluid">
<div class="row">
  <div class="col-md-12">
    <form method="post" action="{{ route('profile-akun-daftar') }}" class="form-horizontal">
      @csrf
      @method('post')

      <div class="card ">
        <div class="card-header card-header-primary">
          <h4 class="card-title">{{ __('Profile Pemilik') }}</h4>
        </div>
        <div class="card-body ">
          @if (session('message'))
          <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
                </button>
                <span>{{ session('message') }}</span>
              </div>
            </div>
          </div>
          @endif
          <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Nama Lengkap') }}</label>
            <div class="col-sm-7">
              <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-danger' : '' }}">
                <input class="form-control" input type="text" name="nama_lengkap" placeholder="{{ __('Nama Lengkap') }}"
                  value="" required />
                @if ($errors->has('nama_lengkap'))
                <span id="name-error" class="error text-danger"
                  for="input-name">{{ $errors->first('nama_lengkap') }}</span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
            <div class="col-sm-7">
              <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                <input class="form-control" name="alamat" id="" type="text" placeholder="{{ __('Alamat') }}" value=""
                  required />
                @if ($errors->has('alamat'))
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('alamat') }}</span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <label class="col-sm-2 col-form-label" for="">Propinsi</label>
            <div class="col-sm-7">
              <div class="form-group{{ $errors->has('provinsi') ? ' has-danger' : '' }}">
                <select class="form-control" name="provinsi" id="provinsi_id" required>
                  <option value="">Pilih Propinsi</option>
                  @foreach ($provinsi as $row)
                  <option value="{{ $row->id }}">{{ $row->name }}</option>
                  @endforeach
                </select>
                {{-- <p class="text-danger">{{ $errors->first('province_id') }}</p> --}}
                @if ($errors->has('provinsi'))
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('provinsi') }}</span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Kota/Kabupaten') }}</label>
            <div class="col-sm-7">
              <div class="form-group{{ $errors->has('kota') ? ' has-danger' : '' }}">
                <select name="kota" class="form-control" id="kota_id" required>
                  <option value="">Pilih Kabupaten/Kota</option>
                </select>
                {{-- <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('Alamat') }}"
                value="" required="true" aria-required="true"/> --}}
                @if ($errors->has('kota'))
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('kota') }}</span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Kecamatan') }}</label>
            <div class="col-sm-7">
              <div class="form-group{{ $errors->has('kecamatan') ? ' has-danger' : '' }}">
                <select name="kecamatan" class="form-control" id="kecamatan_id" required>
                  <option value="">Pilih Kecamatan</option>
                </select>
                {{-- <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('Alamat') }}"
                value="" required="true" aria-required="true"/> --}}
                @if ($errors->has('kelurahan'))
                <span id="name-error" class="error text-danger"
                  for="input-name">{{ $errors->first('kecamatan') }}</span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Kodepos') }}</label>
            <div class="col-sm-7">
              <div class="form-group{{ $errors->has('kodepos') ? ' has-danger' : '' }}">
                <input class="form-control" name="kodepos" id="input-name" type="numeric"
                  placeholder="{{ __('Kodepos...') }}" value="" required="true" aria-required="true" />
                @if ($errors->has('kodepos'))
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('kodepos') }}</span>
                @endif
              </div>
            </div>
          </div>


          <div class="row">
            <label class="col-sm-2 col-form-label" for="input-nomor_hp">{{ __('Nomor Handphone') }}</label>
            <div class="col-sm-7">
              <div class="form-group{{ $errors->has('nomor_hp') ? ' has-danger' : '' }}">
                <input class="form-control" name="nomor_hp" id="" type="numeric"
                  placeholder="{{ __('Nomor Handphone...') }}" value="" required />
                @if ($errors->has('nomor_hp'))
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nomor_hp') }}</span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <label class="col-sm-2 col-form-label" for="input-nomor_wa">{{ __('Nomor Wa') }}</label>
            <div class="col-sm-7">
              <div class="form-group{{ $errors->has('nomor_wa') ? ' has-danger' : '' }}">
                <input class="form-control" name="nomor_wa" id="" type="numeric"
                  placeholder="{{ __('Nomor Whatsapp...') }}" value="" required />
                @if ($errors->has('nomor_wa'))
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nomor_wa') }}</span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <label class="col-sm-2 col-form-label" for="input-email">{{ __('Email') }}</label>
            <div class="col-sm-7">
              <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <input class="form-control" name="email" id="" type="email" placeholder="{{ __('Email') }}" value=""
                  required />
                @if ($errors->has('email'))
                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('email') }}</span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <label class="col-sm-2 col-form-label" for="input-ktp">{{ __('Foto KTP') }}</label>
            <div class="col-sm-7">
              {{-- <div class="form-group{{ $errors->has('ktp') ? ' has-danger' : '' }}"> --}}
              <input class="form-control" name="ktp" id="" type="file" required />
              @if ($errors->has('ktp'))
              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('ktp') }}</span>
              @endif
              {{-- </div> --}}
            </div>
          </div>
        </div>

        <div class="card-footer ml-auto mr-auto">
          <button type="submit" class="btn btn-primary">{{ __('Daftar') }}</button>
        </div>
      </div>
    </form>
  </div>
</div>
  </div>
</div>
@endsection


@section('dropdown')
<script>
  $('#provinsi_id').on('change', function() {
      $.ajax({
          url: "{{ url('/api/kota') }}",
          type: "GET",
          data: { provinsi_id: $(this).val() },
          success: function(html){

              $('#kota_id').empty()
              $('#kota_id').append('<option value="">Pilih Kabupaten/Kota</option>')
              $.each(html.data, function(key, item) {
                  $('#kota_id').append('<option value="'+item.id+'">'+item.name+'</option>')
              })
          }
      });
  })

  $('#kota_id').on('change', function() {
      $.ajax({
          url: "{{ url('/api/kecamatan') }}",
          type: "GET",
          data: { kota_id: $(this).val() },
          success: function(html){
              $('#kecamatan_id').empty()
              $('#kecamatan_id').append('<option value="">Pilih Kecamatan</option>')
              $.each(html.data, function(key, item) {
                  $('#kecamatan_id').append('<option value="'+item.id+'">'+item.name+'</option>')
              })
          }
      });
  })
</script>
@endsection