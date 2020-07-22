@extends('layouts.app', ['activePage' => 'belum-verifikasi', 'titlePage' => __('Belum Terverifikasi')])
{{-- @section('js-modal')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
@endsection --}}


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Wirausaha Terverifikasi</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="input-group mb-3 col-md-6 float-left">
                                <select name="omset_perbulan" class="form-control mr-3">
                                    <option value="">Pilih Omset</option>
                                    @foreach ($omset as $item)
                                    @if ($item->omset_perbulan > 15)
                                    <option value="">Menengah</option>
                                    @endif
                                    @if ($item->omset_perbulan > 1000)
                                    <option value="">Besar</option>
                                    @endif
                                    @if ($item->omset_perbulan < 15) <option value="">Kecil</option>
                                        @endif
                                        @endforeach
                                </select>
                                <input type="text" name="status" class="form-control" placeholder="Cari..."
                                    value="{{request()->omset_perbulan}}">
                                <div class="input-group-append">
                                    <button class="btn btn-white btn-round btn-just-icon" type="submit">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Jenis Usaha
                                    </th>
                                    <th>
                                        Bidang Usaha
                                    </th>
                                    <th>
                                        Skala Usaha
                                    </th>
                                    <th>
                                        Nama PT
                                    </th>
                                    <th>
                                        NPWP
                                    </th>
                                    <th>
                                        Tanggal Pendirian
                                    </th>
                                    <th>
                                        Omset Perbulan
                                    </th>
                                    <th>
                                        Modal Awal
                                    </th>
                                    <th>
                                        Jumlah Kas Saat ini
                                    </th>
                                    <th>
                                        Jumlah Karyawan Tetap
                                    </th>
                                    <th>
                                        Jangkauan Area
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                @php
                                $increment = 1;
                                @endphp
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>
                                            {{$increment}}
                                        </td>
                                        <td>
                                            {{$item->jenis_usaha}}
                                        </td>
                                        <td>
                                            {{$item->bidang_usaha}}
                                        </td>
                                        <td>
                                            {{$item->skala_usaha}}
                                        </td>
                                        @if ($item->existing_pt == 'sudah')
                                        <td>
                                            {{$item->nama_pt}}
                                        </td>
                                        <td>
                                            {{$item->npwp}}
                                        </td>
                                        <td>
                                            {{$item->tanggal_berdiri}}
                                        </td>
                                        @else
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        @endif
                                        <td>
                                            {{$item->omset_perbulan}}
                                        </td>
                                        <td>
                                            {{$item->modal_awal}}
                                        </td>
                                        <td>
                                            {{$item->jumlah_kas}}
                                        </td>
                                        <td>
                                            {{$item->jumlah_karyawan_tetap}}
                                        </td>
                                        <td>
                                            {{$item->jangkauan_area}}
                                        </td>
                                        @if ($item->status == 0)
                                        <td class="td-actions text-right">
                                            <form action="{{route('update-verifikasi', $item->id)}}" method="post">
                                                @csrf
                                                @method('post')
                                                <button type="submit" rel="tooltip" class="btn btn-success btn-simple"
                                                    data>
                                                    <i class="material-icons">edit</i>Verifikasi
                                                </button>
                                            </form>
                                        </td>
                                        @endif
                                    </tr>
                                    @php
                                    $increment = $increment + 1;
                                    @endphp
                                    @empty
                                    <tr>
                                        <td colspan="13" class="text-center text-primary"> <h3>Belum Ada Data </h3></td>
                                    </tr>
                                    @endforelse
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

{