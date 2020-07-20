@extends('layouts.app', ['activePage' => 'terverifikasi', 'titlePage' => __('Verifikasi')])
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
                        @php
                            $provinsi = DB::table('provinsis')->get();
                            // dd($provinsi);
                            $kota = DB::table('kotas')->get();
                            $kecamatan = DB::table('kecamatans')->get();
                        @endphp
                        <form action="" method="get">
                            <div class="input-group mb-3 col-md-6 float-left">
                                <select name="provinsi" class="form-control mr-3">
                                    @foreach ($provinsi as $item)
                                    <option value="">Pilih Provinsi</option>
                                    <option value="">{{$item->name}}</option>
                                    @endforeach
                                    
                                </select>
                                <select name="kota/kabupaten" class="form-control mr-3">
                                    @foreach ($kota as $item)
                                    <option value="">Pilih Kota/Kabupaten</option>
                                    <option value="">{{$item->name}}</option>    
                                    @endforeach
                                </select>
                                <select name="kecamatan" class="form-control mr-3">
                                    @foreach ($kecamatan as $item)
                                    <option value="">Pilih Kecamatan</option>
                                    <option value="">{{$item->name}}</option>    
                                    @endforeach
                                </select>
                                <input type="text" name="status" class="form-control" placeholder="Cari..." value="">
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

