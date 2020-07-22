<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Kuesioner;
use App\PertanyaanKuesioner;
use phpDocumentor\Reflection\Types\Nullable;

class MenuWirausahaController extends Controller
{
    public function riwayatLaporan()
    {
        Session::put('riwayat-laporan', '');
    }
    public function konsultasi()
    {
        Session::put('konsultasi', '');
    }
    public function videoWirausaha()
    {
        Session::put('video', '');
        return view('menu.video-wirausaha');
    }
    public function aksesPasar()
    {
        Session::put('akses-pasar', '');
        return view('menu.akses-pasar');
    }
    public function aksesModal()
    {
        Session::put('akses-modal', '');
        return view('menu.akses-modal');
    }
    public function profile()
    {
        Session::put('peserta-profile', '');
        return view('peserta.profile.edit');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function isiLaporan()
    {
        $kuesioner = PertanyaanKuesioner::all();
        Session::put('isi-laporan', '');
        return view('peserta.isi-laporan')->with('kuesioner', $kuesioner);
    }

    public function storeKuesioner(Request $request)
    {
        if (
            !$request->jenis_usaha || !$request->bidang_usaha || !$request->skala_usaha || !$request->existing_pt ||  !$request->omset_perbulan || !$request->modal_awal || !$request->jumlah_kas || !$request->jumlah_karyawan_tetap || !$request->jumlah_karyawan_lengkap || !$request->kondisi_usaha || !$request->penjelasan_kondisi || !$request->jangkauan_area
        ) {
            Session::put('error', 'Semua field Harus Diisi');
        }

        $this->validate($request, [
            'jenis_usaha' => 'required',
            'bidang_usaha' => 'required',
            'skala_usaha' => 'required',
            'existing_pt' => 'required',
            'nama_pt' => 'nullable|required_if:existing_pt,sudah|string|max:255',
            'npwp' => 'nullable|required_if:existing_pt,sudah|numeric',
            'tanggal_berdiri' => 'nullable|required_if:existing_pt,sudah|date',
            'omset_perbulan' => 'required|numeric',
            'modal_awal' => 'required|numeric',
            'jumlah_kas' => 'required|numeric',
            'jumlah_karyawan_tetap' => 'required|numeric',
            'jumlah_karyawan_lengkap' => 'required|numeric',
            'kondisi_usaha' => 'required',
            'penjelasan_kondisi' => 'required|string|max:255',
            'jangkauan_area' => 'required'
        ]);

        $kuesioner = new Kuesioner();
        $kuesioner->jenis_usaha = $request->input('jenis_usaha');
        $kuesioner->bidang_usaha = $request->input('bidang_usaha');
        $kuesioner->skala_usaha = $request->input('skala_usaha');
        $kuesioner->existing_pt = $request->input('existing_pt');
        $kuesioner->nama_pt = $request->input('nama_pt');
        $kuesioner->npwp = $request->input('npwp');
        $kuesioner->tanggal_berdiri = $request->input('tanggal_berdiri');
        $kuesioner->omset_perbulan = $request->input('omset_perbulan');
        $kuesioner->modal_awal = $request->input('modal_awal');
        $kuesioner->jumlah_kas = $request->input('jumlah_kas');
        $kuesioner->jumlah_karyawan_tetap = $request->input('jumlah_karyawan_tetap');
        $kuesioner->jumlah_karyawan_lengkap = $request->input('jumlah_karyawan_lengkap');
        $kuesioner->kondisi_usaha = $request->input('kondisi_usaha');
        $kuesioner->penjelasan_kondisi = $request->input('penjelasan_kondisi');
        $kuesioner->jangkauan_area = $request->input('jangkauan_area');
        $kuesioner->save();

        Session::put('message', 'kuesioner anda telah terisi');
        return redirect('/isi-kuesioner');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
