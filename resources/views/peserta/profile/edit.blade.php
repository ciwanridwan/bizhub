@extends('layouts.user')

@section('content')
<div class="content">
  @if (Session::has('sukses-update'))
  <p class="alert alert-success">
    {{Session::get('sukses-update')}}
    {{Session::put('sukses-update', null)}}
  </p>
  @endif
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{ route('update-profile') }}" autocomplete="off" class="form-horizontal">
          @csrf
          @method('post')

          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Edit Profile') }}</h4>
              <p class="card-category">{{ __('User information') }}</p>
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
                    <input class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama"
                      id="input-name" type="text" placeholder="{{ __('Name') }}"
                      value="{{old('nama', auth()->guard('peserta')->user()->nama)}}" required="true"
                      aria-required="true" />
                    @if ($errors->has('nama'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nama') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                      id="input-email" type="email" placeholder="{{ __('Email') }}"
                      value="{{old('nama', auth()->guard('peserta')->user()->email)}}" required />
                    @if ($errors->has('email'))
                    <span id="email-error" class="error text-danger"
                      for="input-email">{{ $errors->first('email') }}</span>
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

    <div class="row">
      <div class="col-md-12">
        <form method="post" action="{{route('ubah-password')}}" class="form-horizontal">
          @csrf
          @method('post')

          <div class="card ">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Ubah password') }}</h4>
            </div>
            <div class="card-body ">
              @if (Session::has('sukses-ganti'))
              <p class="alert alert-success">
                {{Session::get('sukses-ganti')}}
                {{Session::put('sukses-ganti', null)}}
              </p>
              @endif

              @if (Session::has('gagal-ganti'))
              <p class="alert alert-danger">
                {{Session::get('gagal-ganti')}}
                {{Session::put('gagal-ganti', null)}}
              </p>
              @endif
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-current-password">Password Lama</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input
                      type="password" name="old_password" id="input-current-password" placeholder="Password Lama Anda"
                      value="" required />
                    @if ($errors->has('old_password'))
                    <span id="name-error" class="error text-danger"
                      for="input-name">{{ $errors->first('old_password') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password">Password Baru</label>
                <div class="col-sm-7">
                  <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                      id="input-password" type="password" placeholder="Password Baru Anda" value="" required />
                    @if ($errors->has('password'))
                    <span id="password-error" class="error text-danger"
                      for="input-password">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">Konfirmasi Password
                  Baru</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="password_confirmation" id="input-password-confirmation"
                      type="password" placeholder="Konfirmasi Password Baru" value="" required />
                  </div>
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