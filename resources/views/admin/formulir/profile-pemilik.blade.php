@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('Formulir Pertanyaan Profile Pemilik')])

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
                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                <p class="card-category">{{ __('User information') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('Nama Usaha') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nama_usaha') ? ' has-danger' : '' }}">
                      <input class="form-control" name="nama_usaha" id="input-name" type="text" placeholder="{{ __('Nama Usaha') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('nama_usaha'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nama_usaha') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Badan Usaha') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('badan_usaha') ? ' has-danger' : '' }}">
                      <input class="form-control" name="badan_usaha" id="input-name" type="text" placeholder="{{ __('Badan Usaha') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('badan_usaha'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('badan_usaha') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Jenis Usaha') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('jenis_usaha') ? ' has-danger' : '' }}">
                      <input class="form-control" name="jenis_usaha" id="input-name" type="text" placeholder="{{ __('Jenis Usaha') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('jenis_usaha'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('jenis_usaha') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nama_usaha') ? ' has-danger' : '' }}">
                      <input class="form-control" name="nama_usaha" id="input-name" type="text" placeholder="{{ __('Alamat') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('nama_usaha'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nama_usaha') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">
                      <select name="kecamatan" class="form-control form-control-lg">
                        <option value="">Pilih Kelurahan</option>
                        <option value="">Kucing</option>
                        <option value="">Kuda</option>
                        <option value="">Ayam</option>
                      </select>
                      {{-- <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('Alamat') }}" value="" required="true" aria-required="true"/> --}}
                      @if ($errors->has('kelurahan'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('kelurahan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">
                      <select name="kecamatan" class="form-control">
                        <option value="">Pilih Kecamatan</option>
                        <option value="">Kucing</option>
                        <option value="">Kuda</option>
                        <option value="">Ayam</option>
                      </select>
                      {{-- <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('Alamat') }}" value="" required="true" aria-required="true"/> --}}
                      @if ($errors->has('kelurahan'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('kelurahan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">
                      <select name="kecamatan" class="form-control">
                        <option value="">Pilih Kota/Kabupaten</option>
                        <option value="">Kucing</option>
                        <option value="">Kuda</option>
                        <option value="">Ayam</option>
                      </select>
                      {{-- <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('Alamat') }}" value="" required="true" aria-required="true"/> --}}
                      @if ($errors->has('kelurahan'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('kelurahan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">
                      <select name="kecamatan" class="form-control">
                        <option value="">Pilih Provinsi</option>
                        <option value="">Kucing</option>
                        <option value="">Kuda</option>
                        <option value="">Ayam</option>
                      </select>
                      {{-- <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('Alamat') }}" value="" required="true" aria-required="true"/> --}}
                      @if ($errors->has('kelurahan'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('kelurahan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Kodepos') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">
                      <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('Kodepos...') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('kelurahan'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('kelurahan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>


                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nomor Kontak') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nomor_kontak') ? ' has-danger' : '' }}">
                      <input class="form-control" name="nomor_kontak" id="input-name" type="text" placeholder="{{ __('Nomor Kontak') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('nomor_kontak'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nomor_kontak') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tahun Berdiri') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('tahun_berdiri') ? ' has-danger' : '' }}">
                      <input class="form-control" name="tahun_berdiri" id="input-name" type="text" placeholder="{{ __('Tahun Berdiri') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('tahun_berdiri'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('tahun_berdiri') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Deskripsi Usaha') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nama_usaha') ? ' has-danger' : '' }}">
                      <input class="form-control" name="nama_usaha" id="input-name" type="text" placeholder="{{ __('Deskripsi Usaha') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('nama_usaha'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nama_usaha') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      {{-- FORM PENDAFTARAN PROFILE PEMILIK USAHA --}}
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile-akun-daftar') }}" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Change password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_password'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Nama Lengkap') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-danger' : '' }}">
                      <input class="form-control" input type="password" name="nama_lengkap" id="input-current-password" placeholder="{{ __('Nama Lengkap') }}" value="" required />
                      @if ($errors->has('nama_lengkap'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nama_lengkap') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('Alamat') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                      <input class="form-control" name="alamat" id="" type="text" placeholder="{{ __('Alamat') }}" value="" required />
                      @if ($errors->has('alamat'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('alamat') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-nomor_hp">{{ __('Nomor Handphone') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nomor_hp') ? ' has-danger' : '' }}">
                      <input class="form-control" name="nomor_hp" id="" type="text" placeholder="{{ __('Nomor Handphone...') }}" value="" required />
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
                      <input class="form-control" name="nomor_wa" id="" type="text" placeholder="{{ __('Nomor Whatsapp...') }}" value="" required />
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
                      <input class="form-control" name="email" id="" type="text" placeholder="{{ __('Email') }}" value="" required />
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
                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection