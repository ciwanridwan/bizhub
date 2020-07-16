<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanPendaftaranController extends Controller
{
    public function profileUsaha()
    {
        if (
            !$request->nama_usaha || !$request->badan_usaha || !$request->jenis_usaha || !$request->jalan || !$request->kelurahan || !$request->kecamatan ||
            !$request->kota || !$request->provinsi || !$request->kodepos || !$request->email || !$request->nomor_kontak || !$request->tahun_berdiri || !$request->deskripsi_usaha 
        ) {
            Session::put('error', 'All field is required');
        }
        $this->validate($request, [
            'nama_usaha' => 'required',
            'badan_usaha' => 'required',
            'jenis_usaha' => 'required',
            'jalan' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'nomor_kontak' => 'required',
            'email' => 'required',
            'tahun_berdiri' => 'required',
            'deskripsi_usaha' => 'required',
        ]);

        $profileUsaha = new ProfilePemilik();
        $profileUsaha->nama_usaha = $request->input('nama_usaha');
        $profileUsaha->badan_usaha = $request->input('badan_usaha');
        $profileUsaha->jenis_usaha = $request->input('jenis_usaha');
        $profileUsaha->jalan = $request->input('jalan');
        $profileUsaha->kelurahan = $request->input('kelurahan');
        $profileUsaha->kecamatan = $request->input('kecamatan');
        $profileUsaha->kota = $request->input('kota');
        $profileUsaha->provinsi = $request->input('provinsi');
        $profileAkun->kodepos = $request->input('kodepos');
        $profileUsaha->nomor_kontak = $request->input('nomor_kontak');
        $profileUsaha->tahun_berdiri = $request->input('tahun_berdiri');
        $profileUsaha->email = $request->input('email');
        $profileUsaha->deskripsi_usaha = $request->input('deskripsi_usaha');
        $profileUsaha->save();

        Session::put('message', 'Selamat data usaha berhasil di tambah');
        return redirect('/pendaftaran');
    }

    public function profileAkun()
    {
        if (
            !$request->nama_lengkap || !$request->jalan || !$request->kelurahan || !$request->kecamatan || !$request->kota || !$request->provinsi ||
            !$request->nomor_hp || !$request->nomor_wa || !$request->email || !$request->ktp || !$request->kodepos
        ) {
            Session::put('error', 'All field is required');
        }

        $this->validate($request, [
            'nama_lengkap' => 'required',
            'jalan' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'nomor_hp' => 'required',
            'nomor_wa' => 'required',
            'email' => 'required',
            'ktp' => 'required|nullable|max:1999',
        ]);

        $profileAkun = new ProfilePemilik();
        $profileAkun->nama_lengkap = $request->input('nama_lengkap');
        $profileAkun->jalan = $request->input('jalan');
        $profileAkun->kelurahan = $request->input('kelurahan');
        $profileAkun->kecamatan = $request->input('kecamatan');
        $profileAkun->kota = $request->input('kota');
        $profileAkun->provinsi = $request->input('provinsi');
        $profileAkun->kodepos = $request->input('kodepos');
        $profileAkun->nomor_hp = $request->input('nomor_hp');
        $profileAkun->nomor_wa = $request->input('nomor_wa');
        $profileAkun->email = $request->input('email');
        $profileAkun->ktp = $request->input('ktp');
        $profileAkun->save();

        Session::put('message', 'Selamat data pemilik berhasil di tambah');
        return redirect('/pendaftaran');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.pendaftaran');
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
