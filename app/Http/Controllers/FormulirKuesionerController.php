<?php

namespace App\Http\Controllers;

use App\PertanyaanKuesioner;
use App\PertanyaanProfilePemilik;
use App\PertanyaanProfileUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class FormulirKuesionerController extends Controller
{
    public function updateFormulirKuesioner(Request $request)
    {
        $kuesioner = PertanyaanKuesioner::first();
        // dd($kuesioner);
        $kuesioner->pertanyaan_pertama = $request->input('pertanyaan_pertama');
        $kuesioner->pertanyaan_kedua = $request->input('pertanyaan_kedua');
        $kuesioner->pertanyaan_ketiga = $request->input('pertanyaan_ketiga');
        $kuesioner->pertanyaan_keempat = $request->input('pertanyaan_keempat');
        $kuesioner->pertanyaan_kelima = $request->input('pertanyaan_kelima');
        $kuesioner->pertanyaan_keenam = $request->input('pertanyaan_keenam');
        $kuesioner->pertanyaan_ketujuh = $request->input('pertanyaan_ketujuh');
        $kuesioner->pertanyaan_kedelapan = $request->input('pertanyaan_kedelapan');
        $kuesioner->pertanyaan_kesembilan = $request->input('pertanyaan_kesembilan');
        $kuesioner->pertanyaan_kesepuluh = $request->input('pertanyaan_kesepuluh');
        $kuesioner->pertanyaan_kesebelas = $request->input('pertanyaan_kesebelas');
        $kuesioner->pertanyaan_keduabelas = $request->input('pertanyaan_keduabelas');
        $kuesioner->pertanyaan_ketigabelas = $request->input('pertanyaan_ketigabelas');
        $kuesioner->pertanyaan_keempatbelas = $request->input('pertanyaan_keempatbelas');
        $kuesioner->pertanyaan_kelimabelas = $request->input('pertanyaan_kelimabelas');
        $kuesioner->update();

        Session::put('message', 'Data Berhasil Diperbaharui');
        return redirect('admin/formulir/edit/kuesioner');    
    }

    public function editFormulirKuesioner(Request $request)
    {
        $kuesioner = PertanyaanKuesioner::all();
        // $kuesioner = array();
        return view('admin.formulir.kuesioner')->with('kuesioner', $kuesioner);
    }
    
    public function editFormulirProfilePemilik(Request $request)
    {
        $pemilik = PertanyaanProfilePemilik::all();
        return view('admin.formulir.profile-pemilik')->with('pemilik', $pemilik);
    }

    public function updateFormulirProfilePemilik(Request $request)
    {
        $pemilik = PertanyaanProfilePemilik::first();
        // dd($pemilik);
        $pemilik->pertanyaan_pertama = $request->input('pertanyaan_pertama');
        $pemilik->pertanyaan_kedua = $request->input('pertanyaan_kedua');
        $pemilik->pertanyaan_ketiga = $request->input('pertanyaan_ketiga');
        $pemilik->pertanyaan_keempat = $request->input('pertanyaan_keempat');
        $pemilik->pertanyaan_kelima = $request->input('pertanyaan_kelima');
        $pemilik->pertanyaan_keenam = $request->input('pertanyaan_keenam');
        $pemilik->pertanyaan_ketujuh = $request->input('pertanyaan_ketujuh');
        $pemilik->pertanyaan_kedelapan = $request->input('pertanyaan_kedelapan');
        $pemilik->pertanyaan_kesembilan = $request->input('pertanyaan_kesembilan');
        $pemilik->pertanyaan_kesepuluh = $request->input('pertanyaan_kesepuluh');
        $pemilik->update();

        Session::put('message', 'Data Berhasil Diperbaharui');
        return redirect('admin/formulir/edit/profile-pemilik');    
    }

    public function updateFormulirProfileUsaha(Request $request)
    {
        $usaha = PertanyaanProfileusaha::first();
        // dd($usaha);
        $usaha->pertanyaan_pertama = $request->input('pertanyaan_pertama');
        $usaha->pertanyaan_kedua = $request->input('pertanyaan_kedua');
        $usaha->pertanyaan_ketiga = $request->input('pertanyaan_ketiga');
        $usaha->pertanyaan_keempat = $request->input('pertanyaan_keempat');
        $usaha->pertanyaan_kelima = $request->input('pertanyaan_kelima');
        $usaha->pertanyaan_keenam = $request->input('pertanyaan_keenam');
        $usaha->pertanyaan_ketujuh = $request->input('pertanyaan_ketujuh');
        $usaha->pertanyaan_kedelapan = $request->input('pertanyaan_kedelapan');
        $usaha->pertanyaan_kesembilan = $request->input('pertanyaan_kesembilan');
        $usaha->pertanyaan_kesepuluh = $request->input('pertanyaan_kesepuluh');
        $usaha->update();

        Session::put('message', 'Data Berhasil Diperbaharui');
        return redirect('admin/formulir/edit/profile-usaha');    
    }    

    public function editFormulirProfileUsaha(Request $request)
    {
        $usaha = PertanyaanProfileUsaha::all();
        return view('admin.formulir.profile-usaha')->with('usaha', $usaha);
    }
    
    public function profilePemilik()
    {
        return view('admin.formulir.profile-pemilik');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profileUsaha()
    {
        return view('admin.formulir.profile-usaha');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createKuesioner()
    {
        return view('admin.formulir.kuesioner');
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
