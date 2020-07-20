<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfilePemilik;
use Illuminate\Support\Facades\Session;
use App\ProfileUsaha;
use App\Kota;
use App\Kecamatan;
use App\Provinsi;

class HalamanPendaftaranController extends Controller
{
    public function getKecamatan()
    {
        $kecamatan = Kecamatan::where('kota_id', request()->kota_id)->get();
        return response()->json(['status' => 'success', 'data' => $kecamatan]);
    }

    public function getKota()
    {
        $kota = Kota::where('provinsi_id', request()->provinsi_id)->get();
        return response()->json(['status' => 'success', 'data' => $kota]);
    }

    public function profileUsaha(Request $request)
    {
        if (
            !$request->nama_usaha || !$request->badan_usaha || !$request->jenis_usaha || !$request->alamat || !$request->kecamatan ||
            !$request->kota || !$request->provinsi || !$request->kodepos || !$request->email || !$request->nomor_kontak || !$request->tahun_berdiri || !$request->deskripsi_usaha 
        ) {
            Session::put('error', 'Semua Field Harus Diisi');
        }
        $this->validate($request, [
            'nama_usaha' => 'required',
            'badan_usaha' => 'required',
            'jenis_usaha' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'nomor_kontak' => 'required',
            'email' => 'required',
            'tahun_berdiri' => 'required',
            'deskripsi_usaha' => 'required',
        ]);

        $profileUsaha = new ProfileUsaha();
        $profileUsaha->nama_usaha = $request->input('nama_usaha');
        $profileUsaha->badan_usaha = $request->input('badan_usaha');
        $profileUsaha->jenis_usaha = $request->input('jenis_usaha');
        $profileUsaha->alamat = $request->input('alamat');
        $profileUsaha->kecamatan = $request->input('kecamatan');
        $profileUsaha->kota = $request->input('kota');
        $profileUsaha->provinsi = $request->input('provinsi');
        $profileUsaha->kodepos = $request->input('kodepos');
        $profileUsaha->nomor_kontak = $request->input('nomor_kontak');
        $profileUsaha->tahun_berdiri = $request->input('tahun_berdiri');
        $profileUsaha->email = $request->input('email');
        $profileUsaha->deskripsi_usaha = $request->input('deskripsi_usaha');
        $profileUsaha->save();
        // dd($profileUsaha);

        Session::put('message', 'Selamat data usaha berhasil di tambah');
        return redirect('/pendaftaran');
    }

    public function profileAkun(Request $request)
    {
        if (
            !$request->nama_lengkap || !$request->alamat || !$request->kecamatan || !$request->kota || !$request->provinsi ||
            !$request->nomor_hp || !$request->nomor_wa || !$request->email || !$request->ktp || !$request->kodepos
        ) {
            Session::put('error', 'All field is required');
        }

        $this->validate($request, [
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'nomor_hp' => 'required',
            'nomor_wa' => 'required',
            'email' => 'required',
            'ktp' => 'required|nullable|max:1999',
        ]);

        if ($request->hasFile('ktp')) {
            $fileNameWithExtension = $request->file('ktp')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('ktp')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '' . $extension;
            $path = $request->file('ktp')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $profileAkun = new ProfilePemilik();
        $profileAkun->nama_lengkap = $request->input('nama_lengkap');
        $profileAkun->alamat = $request->input('alamat');
        $profileAkun->kecamatan = $request->input('kecamatan');
        $profileAkun->kota = $request->input('kota');
        $profileAkun->provinsi = $request->input('provinsi');
        $profileAkun->kodepos = $request->input('kodepos');
        $profileAkun->nomor_hp = $request->input('nomor_hp');
        $profileAkun->nomor_wa = $request->input('nomor_wa');
        $profileAkun->email = $request->input('email');
        $profileAkun->ktp = $fileNameToStore;
        $profileAkun->save();

        Session::put('message', 'Selamat data pemilik berhasil di tambah');
        return redirect('/pendaftaran-profile');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('profile-pemilik', '');
        $provinsi = Provinsi::orderBy('created_at', 'DESC')->get();
        return view('pendaftaran.profile-pemilik')->with('provinsi', $provinsi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put('profile-usaha', '');
        $provinsi = Provinsi::orderBy('created_at', 'DESC')->get();
        return view('pendaftaran.profile-usaha')->with('provinsi', $provinsi);
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
