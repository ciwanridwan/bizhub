@extends('layouts.user', ['activePage' => 'profileUsaha', 'titlePage' => __('Pendaftaran')])

@section('content')
<div class="content">
  <div class="container-fluid">
    {{-- FORM PENDAFTARAN PROFILE USAHA --}}
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('profile-usaha') }}" autocomplete="off" class="form-horizontal">
          @csrf
          @method('post')

          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Profile Usaha') }}</h4>
            </div>
            <div class="card-body ">
              @if (Session::has('message'))
              <p class="alert alert-success">
                  {{Session::get('message')}}
                  {{Session::put('message', null)}}
              </p>
              @endif

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

              @foreach ($usaha as $item)
              <div class="row">
                <label class="col-sm-2 col-form-label">{{$item->pertanyaan_pertama}}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('nama_usaha') ? ' has-danger' : '' }}">
                    <input class="form-control" name="nama_usaha" id="input-name" type="text"
                      placeholder="" value="" required="true" aria-required="true" />
                    @if ($errors->has('nama_usaha'))
                    <span id="name-error" class="error text-danger"
                      for="input-name">{{ $errors->first('nama_usaha') }}</span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">{{$item->pertanyaan_kedua}}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('badan_usaha') ? ' has-danger' : '' }}">
                    <input class="form-control" name="badan_usaha" id="input-name" type="text"
                      placeholder="" value="" required="true" aria-required="true" />
                    @if ($errors->has('badan_usaha'))
                    <span id="name-error" class="error text-danger"
                      for="input-name">{{ $errors->first('badan_usaha') }}</span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">{{$item->pertanyaan_ketiga}}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('jenis_usaha') ? ' has-danger' : '' }}">
                    <input class="form-control" name="jenis_usaha" id="input-name" type="text"
                      placeholder="" value="" required="true" aria-required="true" />
                    @if ($errors->has('jenis_usaha'))
                    <span id="name-error" class="error text-danger"
                      for="input-name">{{ $errors->first('jenis_usaha') }}</span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label">{{$item->pertanyaan_keempat}}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                    <input class="form-control" name="alamat" id="input-name" type="text"
                      placeholder="" value="" required="true" aria-required="true" />
                    @if ($errors->has('alamat'))
                    <span id="name-error" class="error text-danger"
                      for="input-name">{{ $errors->first('alamat') }}</span>
                    @endif
                  </div>
                </div>
              </div>

            <div class="row">
              <label class="col-sm-2 col-form-label" for="">{{$item->pertanyaan_kelima}}</label>
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
                  <span id="name-error" class="error text-danger"
                    for="input-name">{{ $errors->first('provinsi') }}</span>
                  @endif
              </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">{{ $item->pertanyaan_keenam }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('kota') ? ' has-danger' : '' }}">
                  <select name="kota" class="form-control" id="kota_id" required>
                    <option value="">Pilih Kabupaten/Kota</option>
                  </select>
                  {{-- <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('Alamat') }}"
                  value="" required="true" aria-required="true"/> --}}
                  @if ($errors->has('kota'))
                  <span id="name-error" class="error text-danger"
                    for="input-name">{{ $errors->first('kota') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">{{ $item->pertanyaan_ketujuh }}</label>
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
              <label class="col-sm-2 col-form-label">{{ $item->pertanyaan_kedelapan }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('kodepos') ? ' has-danger' : '' }}">
                  <input class="form-control" name="kodepos" id="input-name" type="numeric"
                    placeholder="" value="" required="true" aria-required="true" />
                  @if ($errors->has('kodepos'))
                  <span id="name-error" class="error text-danger"
                    for="input-name">{{ $errors->first('kodepos') }}</span>
                  @endif
                </div>
              </div>
            </div>


            <div class="row">
              <label class="col-sm-2 col-form-label">{{ $item->pertanyaan_kesembilan }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('nomor_kontak') ? ' has-danger' : '' }}">
                  <input class="form-control" name="nomor_kontak" id="input-name" type="text"
                    placeholder="" value="" required="true" aria-required="true" />
                  @if ($errors->has('nomor_kontak'))
                  <span id="name-error" class="error text-danger"
                    for="input-name">{{ $errors->first('nomor_kontak') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">{{ $item->pertanyaan_kesepuluh }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                  <input class="form-control" name="email" id="input-email" type="email" placeholder=""
                    value="" required />
                  @if ($errors->has('email'))
                  <span id="email-error" class="error text-danger"
                    for="input-email">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">{{ $item->pertanyaan_kesebelas }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('tahun_berdiri') ? ' has-danger' : '' }}">
                  <input class="form-control" name="tahun_berdiri" id="input-name" type="numeric"
                    placeholder="" value="" required="true" aria-required="true" />
                  @if ($errors->has('tahun_berdiri'))
                  <span id="name-error" class="error text-danger"
                    for="input-name">{{ $errors->first('tahun_berdiri') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="row">
              <label class="col-sm-2 col-form-label">{{ $item->pertanyaan_keduabelas }}</label>
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('deskripsi_usaha') ? ' has-danger' : '' }}">
                  <input class="form-control" name="deskripsi_usaha" id="input-name" type="text"
                    placeholder="" value="" required="true" aria-required="true" />
                  @if ($errors->has('deskripsi_usaha'))
                  <span id="name-error" class="error text-danger"
                    for="input-name">{{ $errors->first('deskripsi_usaha') }}</span>
                  @endif
                </div>
              </div>
            </div>

          </div>
          <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-primary">{{ __('Daftar') }}</button>
          </div>
      </div>
      </form>
    </div>
    @endforeach
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