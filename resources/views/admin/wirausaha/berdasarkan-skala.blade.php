@extends('layouts.app', ['activePage' => 'berdasarkan-skala', 'titlePage' => __('Skala')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Wirausaha Berdasarkan Skala</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{route('export-excell')}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                        <form action="" method="get">
                            <div class="input-group mb-3 col-md-6 float-left">
                                <select name="skala_usaha" class="form-control mr-3">
                                    <option value="">Pilih Skala</option>
                                    <option value="kecil">Kecil</option>
                                    <option value="menengah">Menengah</option>
                                    <option value="panjang">Panjang</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-6 float-left">
                                <select name="bidang_usaha" class="form-control mr-3">
                                    <option value="">Pilih Bidang Usaha</option>
                                    <option value="produksi">Produksi</option>
                                    <option value="distribusi">Distribusi</option>
                                    <option value="pemasaran">Pemasaran</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-6 float-left">
                                <select name="jenis_usaha" class="form-control mr-3">
                                    <option value="">Pilih Jenis Usaha</option>
                                    <option value="barang">Barang</option>
                                    <option value="jasa">Jasa</option>
                                </select>
                                <input type="text" name="status" class="form-control" placeholder="Cari..." value="{{ request()->jenis_usaha, request()->skala_usaha, request()->bidang_usaha }}">
                                <div class="input-group-append">
                                    <button class="btn btn-white btn-round btn-just-icon" type="submit">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                        </form>
                        {{-- <form class="navbar-form">
                            <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                              <i class="material-icons">search</i>
                              <div class="ripple-container"></div>
                            </button>
                            </div>
                          </form> --}}
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
                                        Status Verifikasi
                                    </th>
                                </thead>
                                @php
                                $increment = 1;
                                @endphp
                                <tbody>
                                    @foreach ($data as $item)
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
                                        @if ($item->status == 1)
                                        <td>
                                            Sudah Verifikasi
                                        </td>
                                        @else
                                        <td>
                                            Belum Verifikasi
                                        </td>
                                        @endif
                                    </tr>
                                    @php
                                    $increment = $increment + 1;
                                    @endphp
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