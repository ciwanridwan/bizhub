<?php

namespace App\Http\Controllers;
use App\Slider;
use App\Kontak;
use App\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function wirausahaBerdasarkanSkala()
    {
        return view('admin.wirausaha-skala');
    }
    public function wirausahaBelumTerverifikasi()
    {
        return view('admin.wirausaha-belum-verifikasi');
    }
    public function wirausahaTerverifikasi()
    {
        return view('admin.wirausaha-terverifikasi');
    }
    public function slider()
    {
        $slider = Slider::all();
        return view('admin.slider')->with('slider', $slider);
    }

    public function editSlider($id)
    {
        $slider = Slider::find($id);
        return view('admin.edit.slider')->with('slider', $slider);
    }

    public function updateSlider(Request $request)
    {
        $slider = Slider::select($request->id);
        $slider->update([
            'slider1' => $request->slider1,
            'slider2' => $request->slider2,
            'slider3' => $request->slider3,
        ]);

        Session::put('message', "Data Berhasil Di Perbarui");
        return redirect('/admin/slider');
    }

    public function formSlider()
    {

    }

    public function kontakKami()
    {
        $kontak = Kontak::all();
        return view('admin.kontak')->with('kontak', $kontak);
    }

    public function updateKontak(Request $request)
    {
        $kontak = Kontak::select($request->id);
        $kontak->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
        ]);

        return redirect('/admin/kontak-kami');
    }

    public function formKontak()
    {
        
    }

    public function editKontak($id)
    {
        $kontak = Kontak::find($id);
        return view('admin.edit.kontak')->with('kontak', $kontak);

    }

    public function editMitra($id)
    {
        $mitra = Mitra::find($id);
        return view('admin.edit.mitra')->with('mitra', $mitra);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mitraKami()
    {
        $mitra = Mitra::all();
        return view('admin.mitra')->with('mitra', $mitra);
    }

    public function updateMitra(Request $request)
    {
        $mitra = Mitra::select($request->id);
        $mitra->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->badan_usaha
        ]);

        return redirect('/admin/mitra-kami');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMitra()
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
