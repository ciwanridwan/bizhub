<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Kontak;
use App\Kuesioner;
use App\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function wirausahaBerdasarkanSkala()
    {
        Session::put('skala', '');
        $data = Kuesioner::paginate(10);
        if (request()->skala_usaha != '') {
            $data = $data->where('skala_usaha', request()->skala_usaha);
        }
        if (request()->jenis_usaha != '') {
            $data = $data->where('jenis_usaha', request()->jenis_usaha);
        }
        if (request()->bidang_usaha != '') {
            $data = $data->where('bidang_usaha', request()->bidang_usaha);
        }

        return view('admin.wirausaha.berdasarkan-skala')->with('data', $data);
    }
    public function wirausahaBelumTerverifikasi()
    {
        $data = Kuesioner::where('status', 0)->get();
        // $data = Kuesioner::paginate(10);
        $omset = Kuesioner::where('omset_perbulan', '>=', 1)->get();
        // dd($omset);
        if (request()->omset_perbulan != '') {
            $data = $data->where('omset_perbulan', request()->omset_perbulan);
        }
        foreach ($omset as $income) {

            if ($income->omset_perbulan < 15) {
                $little = 'kecil';
            }
            if ($income->omset_perbulan > 15) {
                $middle = 'menengah';
            }
        }
        return view('admin.wirausaha.belum-verifikasi', compact('data', 'omset'));
    }

    public function updateVerifikasi($id)
    {
        $data = Kuesioner::find($id);
        $data->status = 1;
        $data->update();
        return redirect()->back();
    }
    public function wirausahaTerverifikasi()
    {
        Session::put('terverifikasi', '');
        $data = Kuesioner::where('status', 1)->get();
        // $data = Kuesioner::paginate(3);
        if (request()->provinsi != '') {
            $data = $data->where('provinsi', request()->provinsi);
        }
        if (request()->kota != '') {
            $data = $data->where('kota', request()->kota);
        }
        if (request()->kecamatan != '') {
            $data = $data->where('kecamatan', request()->kecamatan);
        }
        return view('admin.wirausaha.terverifikasi')->with('data', $data);
    }
    public function slider()
    {
        Session::put('slider', '');
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
        Session::put('kontak', '');
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
        Session::put('mitra', '');
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
