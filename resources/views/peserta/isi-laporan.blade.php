@extends('layouts.user', ['activePage' => 'kuesioner', 'titlePage' => __('Isi Laporan')])

@section('content')
<div class="content">
    @if (Session::has('message'))
    <p class="alert alert-success">
        {{Session::get('message')}}
        {{Session::put('message', null)}}
    </p>    
    @endif
    @if (Session::has('error'))
    <p class="alert alert-danger">
        {{Session::get('error')}}
        {{Session::put('error', null)}}
    </p>    
    @endif
    <div class="container-fluid">
        {{-- FORM ISI LAPORAN  --}}
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('store-kuesioner') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h3 class="card-title">{{ __('Isi Kuesioner Sebagai Syarat Verifikasi') }}</h3>
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
                                <label class="col-sm-2 col-form-label">{{ __('Jenis Usaha') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('jenis_usaha') ? ' has-danger' : '' }}">
                                        <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="jenis_usaha" id="inlineRadio1" value="barang"> Barang
                                              <span class="circle">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                          </div>
                                          <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="jenis_usaha" id="inlineRadio1" value="jasa"> Jasa
                                              <span class="circle">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                          </div>
                                        @if ($errors->has('jenis_usaha'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('jenis_usaha') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Bidang Usaha') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('bidang_usaha') ? ' has-danger' : '' }}">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="bidang_usaha"
                                                    id="exampleRadios1" value="produksi">
                                                Produksi
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="bidang_usaha"
                                                    id="exampleRadios1" value="distribusi">
                                                Distribusi
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="bidang_usaha"
                                                    id="exampleRadios1" value="pemasaran">
                                                Pemasaran
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        @if ($errors->has('bidang_usaha'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('bidang_usaha') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Skala Usaha') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('skala_usaha') ? ' has-danger' : '' }}">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="skala_usaha"
                                                    id="exampleRadios1" value="kecil">
                                                Kecil
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="skala_usaha"
                                                    id="exampleRadios1" value="menengah">
                                                Menengah
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="skala_usaha"
                                                    id="exampleRadios1" value="besar">
                                                Besar
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        @if ($errors->has('skala_usaha'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('skala_usaha') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Sudah ada PT atau belum') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('existing_pt') ? ' has-danger' : '' }}">
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input hide-collapse" type="radio" name="existing_pt"
                                                    id="exampleRadios1" value="belum">
                                                Belum
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input collapsed" type="radio"
                                                    name="existing_pt" id="exampleRadios1" value="sudah">
                                                Sudah
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                            <div class="collapse-test">
                                                <div class="form-group{{ $errors->has('nama_pt') ? ' has-danger' : '' }}">
                                                    <input class="form-control" name="nama_pt" id="input-name"
                                                        type="text" placeholder="{{ __('Nama PT') }}" value=""
                                                        />
                                                    @if ($errors->has('nama_pt'))
                                                    <span id="name-error" class="error text-danger"
                                                        for="input-name">{{ $errors->first('nama_pt') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group{{ $errors->has('npwp') ? ' has-danger' : '' }}">
                                                    <input class="form-control" name="npwp" id="input-name"
                                                        type="number" placeholder="{{ __('NPWP') }}" value=""
                                                        />
                                                    @if ($errors->has('npwp'))
                                                    <span id="name-error" class="error text-danger"
                                                        for="input-name">{{ $errors->first('npwp') }}</span>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                <label class="col-sm-2 col-form-label">{{ __('Tanggal berdiri') }}</label>
                                                <div class="form-group{{ $errors->has('tanggal_berdiri') ? ' has-danger' : '' }}">
                                                    <input class="form-control" name="tanggal_berdiri" id="input-name"
                                                        type="date" placeholder="{{ __('Nama PT') }}" value=""
                                                        />
                                                    @if ($errors->has('tanggal_berdiri'))
                                                    <span id="name-error" class="error text-danger"
                                                        for="input-name">{{ $errors->first('tanggal_berdiri') }}</span>
                                                    @endif
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('existing_pt'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('existing_pt') }}</span>
                                        @endif
                                        @if ($errors->has('nama_pt'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('nama_pt') }}</span>
                                        @endif
                                        @if ($errors->has('npwp'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('npwp') }}</span>
                                        @endif
                                        @if ($errors->has('tanggal_berdiri'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('tanggal_berdiri') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Omset Perbulan') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('omset_perbulan') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="omset_perbulan" id="input-name" type="number"
                                            placeholder="{{ __('') }}" value="" required="true" aria-required="true" />
                                        @if ($errors->has('omset_perbulan'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('omset_perbulan') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Modal Awal') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('modal_awal') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="modal_awal" id="input-name" type="number"
                                            placeholder="{{ __('') }}" value="" required="true" aria-required="true" />
                                        @if ($errors->has('modal_awal'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('modal_awal') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Jumlah Kas Saat ini') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('jumlah_kas') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="jumlah_kas" id="input-name" type="number"
                                            placeholder="{{ __('') }}" value="" required="true" aria-required="true" />
                                        @if ($errors->has('jumlah_kas'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('jumlah_kas') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Jumlah Karyawan Tetap') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('jumlah_karyawan_tetap') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="jumlah_karyawan_tetap" id="input-name" type="number"
                                            placeholder="{{ __('') }}" value="" required="true" aria-required="true" />
                                        @if ($errors->has('jumlah_karyawan_tetap'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('jumlah_karyawan_tetap') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Jumlah Karyawan Lengkap') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('jumlah_karyawan_lengkap') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="jumlah_karyawan_lengkap" id="input-name" type="number"
                                            placeholder="{{ __('') }}" value="" required="true" aria-required="true" />
                                        @if ($errors->has('jumlah_karyawan_lengkap'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('jumlah_karyawan_lengkap') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Kondisi Terkini Usaha') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('kondisi_usaha') ? ' has-danger' : '' }}">
                                        <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="kondisi_usaha" id="inlineRadio1" value="bagus"> Bagus
                                              <span class="circle">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                          </div>
                                          <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="kondisi_usaha" id="inlineRadio1" value="kurang"> Kurang Bagus
                                              <span class="circle">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                          </div>
                                        @if ($errors->has('kondisi_usaha'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('kondisi_usaha') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label
                                    class="col-sm-2 col-form-label">{{ __('Jelaskan Kondisi Mengapa Usaha Anda Bagus/Kurang Bagus ?') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('penjelasan_kondisi') ? ' has-danger' : '' }}">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="penjelasan_kondisi"></textarea>
                                        @if ($errors->has('penjelasan_kondisi'))
                                        <span id="email-error" class="error text-danger"
                                            for="input-email">{{ $errors->first('penjelasan_kondisi') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Jangkauan Area Pelanggan') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('jangkauan_area') ? ' has-danger' : '' }}">
                                        <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="jangkauan_area" id="inlineRadio1" value="international"> International
                                              <span class="circle">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                          </div>
                                          <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="jangkauan_area" id="inlineRadio1" value="nasional"> Nasional
                                              <span class="circle">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                          </div>
                                          <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="jangkauan_area" id="inlineRadio1" value="provinsi"> Provinsi
                                              <span class="circle">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                          </div>
                                          <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="jangkauan_area" id="inlineRadio1" value="kabupaten"> Kabupaten
                                              <span class="circle">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                          </div>
                                          <div class="form-check form-check-radio form-check-inline">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="jangkauan_area" id="inlineRadio1" value="kota"> Kota
                                              <span class="circle">
                                                  <span class="check"></span>
                                              </span>
                                            </label>
                                          </div>
                                        @if ($errors->has('jangkauan_area'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('jangkauan_area') }}</span>
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

    </div>
</div>
@endsection

@section('collapsed-js')
<script>
    $(document).ready(function(){
      $(".collapsed").click(function(){
        $(".collapse-test").collapse('toggle');
      });
      $(".hide-collapse").click(function(){
    $(".collapse").collapse('hide');
        });
    });
</script>
@endsection