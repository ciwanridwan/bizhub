@extends('layouts.user', ['activePage' => 'profile', 'titlePage' => __('Edit Slider')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('update-kontak') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Edit Kontak') }}</h4>
                        </div>
                        <div class="card-body ">
                            @if (session('status'))
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <span>{{ session('status') }}</span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}"
                                            name="nama" id="input-name" type="text"
                                            placeholder="" value="{{$kontak->nama}}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('nama'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('nama') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" id="input-name" type="text"
                                            placeholder="" value=" {{$kontak->email}} " required="true"
                                            aria-required="true" />
                                        @if ($errors->has('email'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Nomor Telepon') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('nomor_telepon') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('nomor_telepon') ? ' is-invalid' : '' }}"
                                            name="nomor_telepon" id="input-name" type="text"
                                            placeholder="" value="{{$kontak->nomor_telepon}}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('nomor_telepon'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('nomor_telepon') }}</span>
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