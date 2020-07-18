@extends('layouts.app', ['activePage' => '', 'titlePage' => __('Edit Slider')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('update-slider') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Edit Slider') }}</h4>
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
                                <label class="col-sm-2 col-form-label">{{ __('Slider Pertama') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('slider1') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('slider1') ? ' is-invalid' : '' }}"
                                            name="slider1" id="input-name" type="text"
                                            placeholder="" value="{{$slider->slider1}}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('slider1'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('slider1') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Slider Kedua') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('slider2') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('slider2') ? ' is-invalid' : '' }}"
                                            name="slider2" id="input-name" type="text"
                                            placeholder="" value=" {{$slider->slider2}} " required="true"
                                            aria-required="true" />
                                        @if ($errors->has('slider2'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('slider2') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Slider Ketiga') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('slider3') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('slider3') ? ' is-invalid' : '' }}"
                                            name="slider3" id="input-name" type="text"
                                            placeholder="" value="{{$slider->slider3}}" required="true"
                                            aria-required="true" />
                                        @if ($errors->has('slider3'))
                                        <span id="name-error" class="error text-danger"
                                            for="input-name">{{ $errors->first('slider3') }}</span>
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