@extends('layouts.app', ['activePage' => 'slider', 'titlePage' => __('Slider')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Slider Kami</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Slider Pertama
                  </th>
                  <th>
                    Slider Kedua
                  </th>
                  <th>
                    Slider Ketiga
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                  @foreach ($slider as $item)    
                  <tr>
                    <td>
                      {{$item->id}}
                    </td>
                    <td>
                      {{$item->slider1}}
                    </td>
                    <td>
                      {{$item->slider2}}
                    </td>
                    <td>
                      {{$item->slider3}}
                    </td>
                    <td class="td-actions text-right">
                      <a type="button" rel="tooltip" class="btn btn-success btn-simple" href="/admin/slider/edit/{{$item->id}}">
                        <i class="material-icons">edit</i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection