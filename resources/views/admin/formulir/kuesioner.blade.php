@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('Formulir Kuesioner Isi Laporan')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('update-formulir-kuesioner') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Formulir Kuesioner') }}</h4>
              </div>
              <div class="card-body ">
                @if (Session::has('message'))
                <p class="alert alert-success">
                    {{Session::get('message')}}
                    {{Session::put('message', null)}}
                </p>    
                @endif
                @foreach ($kuesioner as $item)
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Pertama') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_pertama') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_pertama" id="input-name" type="text" placeholder="{{ __('') }}" value="{{$item->pertanyaan_pertama}}" required="true" aria-required="true"/> 
                      @if ($errors->has('pertanyaan_pertama'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_pertama') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Kedua') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_kedua') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_kedua" id="input-name" type="text" placeholder="{{ __('') }}" value="{{$item->pertanyaan_kedua}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_kedua'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_kedua') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Ketiga') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_ketiga') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_ketiga" id="input-name" type="text" placeholder="{{ __('') }}" value="{{$item->pertanyaan_ketiga}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_ketiga'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_ketiga') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Keempat') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_keempat') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_keempat" id="input-name" type="text" placeholder="{{ __('') }}" value="{{$item->pertanyaan_keempat}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_keempat'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_keempat') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

              

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Kelima') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_kelima') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_kelima" id="input-name" type="text" placeholder="{{ __('') }}" value="{{$item->pertanyaan_kelima}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_kelima'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_kelima') }}</span>
                      @endif
                    </div>
                  </div>
                </div>


                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Keenam') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_keenam') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_keenam" id="input-name" type="text" placeholder="{{ __('Nomor Kontak') }}" value="{{$item->pertanyaan_keenam}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_keenam'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_keenam') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Ketujuh') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_ketujuh') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_ketujuh" id="input-email" type="text" placeholder="{{ __('') }}" value="{{$item->pertanyaan_ketujuh}}" required />
                      @if ($errors->has('pertanyaan_ketujuh'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('pertanyaan_ketujuh') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Kedelapan') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_kedelapan') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_kedelapan" id="input-name" type="text" placeholder="{{ __('Tahun Berdiri') }}" value="{{$item->pertanyaan_kedelapan}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_kedelapan'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_kedelapan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Kesembilan') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_kesembilan') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_kesembilan" id="input-name" type="text" placeholder="{{ __('Deskripsi Usaha') }}" value="{{$item->pertanyaan_kesembilan}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_kesembilan'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_kesembilan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan Kesepuluh') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_kesepuluh') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_kesepuluh" id="input-name" type="text" placeholder="{{ __('Deskripsi Usaha') }}" value="{{$item->pertanyaan_kesepuluh}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_kesepuluh'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_kesepuluh') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan kesebelas') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_kesebelas') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_kesebelas" id="input-name" type="text" placeholder="{{ __('Deskripsi Usaha') }}" value="{{$item->pertanyaan_kesebelas}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_kesebelas'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_kesebelas') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan keduabelas') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_keduabelas') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_keduabelas" id="input-name" type="text" placeholder="{{ __('Deskripsi Usaha') }}" value="{{$item->pertanyaan_keduabelas}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_keduabelas'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_keduabelas') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan ketigabelas') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_ketigabelas') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_ketigabelas" id="input-name" type="text" placeholder="{{ __('Deskripsi Usaha') }}" value="{{$item->pertanyaan_ketigabelas}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_ketigabelas'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_ketigabelas') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan keempatbelas') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_keempatbelas') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_keempatbelas" id="input-name" type="text" placeholder="{{ __('Deskripsi Usaha') }}" value="{{$item->pertanyaan_keempatbelas}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_keempatbelas'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_keempatbelas') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan kelimabelas') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan_kelimabelas') ? ' has-danger' : '' }}">
                      <input class="form-control" name="pertanyaan_kelimabelas" id="input-name" type="text" placeholder="{{ __('Deskripsi Usaha') }}" value="{{$item->pertanyaan_kelimabelas}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan_kelimabelas'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pertanyaan_kelimabelas') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
              </div>
              @endforeach
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