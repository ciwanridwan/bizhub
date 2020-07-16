@extends('layouts.user', ['activePage' => 'profile', 'titlePage' => __('Isi Laporan')])

@section('content')
<div class="content">
    <div class="container-fluid">
        {{-- FORM ISI LAPORAN  --}}
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('profile-usaha') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h3 class="card-title">{{ __('Isi Laporan Sebagai Syarat Verifikasi') }}</h3>
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
                                    <div class="form-group{{ $errors->has('nama_usaha') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="nama_usaha" id="input-name" type="text"
                                            placeholder="{{ __('') }}" value="" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('nama_usaha'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('nama_usaha') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Bidang Usaha') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('badan_usaha') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="badan_usaha" id="input-name" type="text"
                                            placeholder="{{ __('') }}" value="" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('badan_usaha'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('badan_usaha') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Skala Usaha') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('jenis_usaha') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="jenis_usaha" id="input-name" type="text"
                                            placeholder="{{ __('') }}" value="" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('jenis_usaha'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('jenis_usaha') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Sudah ada PT atau belum') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('nama_usaha') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="nama_usaha" id="input-name" type="text"
                                            placeholder="{{ __('') }}" value="" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('nama_usaha'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('nama_usaha') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Omset Perbulan') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('') }}"
                                        value="" required="true" aria-required="true"/>
                                        @if ($errors->has('kelurahan'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('kelurahan') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Modal Awal') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('') }}"
                                        value="" required="true" aria-required="true"/>
                                        @if ($errors->has('kelurahan'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('kelurahan') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Jumlah Kas Saat ini') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('') }}"
                                        value="" required="true" aria-required="true"/>
                                        @if ($errors->has('kelurahan'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('kelurahan') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Jumlah Karyawan Tetap') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">  
                                        <input class="form-control" name="kelurahan" id="input-name" type="text" placeholder="{{ __('') }}"
                                        value="" required="true" aria-required="true"/>
                                        @if ($errors->has('kelurahan'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('kelurahan') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Jumlah Karyawan Lengkap') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('kelurahan') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="kelurahan" id="input-name" type="text"
                                            placeholder="{{ __('') }}" value="" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('kelurahan'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('kelurahan') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Kondisi Terkini Usaha') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('nomor_kontak') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="nomor_kontak" id="input-name" type="text"
                                            placeholder="{{ __('') }}" value="" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('nomor_kontak'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('nomor_kontak') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label
                                    class="col-sm-2 col-form-label">{{ __('Jelaskan Kondisi Mengapa Usaha Anda Bagus/Kurang Bagus ?') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="email" id="input-email" type="email"
                                            placeholder="{{ __('') }}" value="" required />
                                        @if ($errors->has('email'))
                                        <span id="email-error" class="error text-danger"
                                            for="input-email">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Jangkauan Area Pelanggan') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('tahun_berdiri') ? ' has-danger' : '' }}">
                                        <input class="form-control" name="tahun_berdiri" id="input-name" type="text"
                                            placeholder="{{ __('') }}" value="" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('tahun_berdiri'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('tahun_berdiri') }}</span>
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