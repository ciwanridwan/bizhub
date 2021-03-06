@extends('layouts.app', ['activePage' => 'mitra', 'titlePage' => __('Mitra')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Mitra Kami</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Nomor Telepon
                  </th>
                  <th>
                    Badan Usaha
                  </th>
                </thead>
                <tbody>
                  @foreach ($mitra as $item)    
                  <tr>
                    <td>
                      {{$item->id}}
                    </td>
                    <td>
                      {{$item->nama}}
                    </td>
                    <td>
                      {{$item->email}}
                    </td>
                    <td>
                      {{$item->nomor_telepon}}
                    </td>
                    <td>
                        {{$item->badan_usaha}}
                      </td>
                    <td class="td-actions text-right">
                      <a type="button" rel="tooltip" class="btn btn-success btn-simple" href="{{route('edit-mitra', $item->id)}}">
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