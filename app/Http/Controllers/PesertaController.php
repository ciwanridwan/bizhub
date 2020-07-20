<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class PesertaController extends Controller
{
    public function logout()
    {
        auth()->guard('peserta')->logout(); //JADI KITA LOGOUT SESSION DARI GUARD PESERTA
        return redirect(route('dashboard-peserta'));
    }

    public function formLogin()
    {
        if (auth()->guard('peserta')->check()) return redirect(route('dashboard-peserta'));
        return view('peserta.login');
    }

    public function login(Request $request)
    {
        //VALIDASI DATA YANG DITERIMA
        $this->validate($request, [
            'email' => 'required|email|exists:pesertas,email',
            'password' => 'required|string'
        ]);

        //CUKUP MENGAMBIL EMAIL DAN PASSWORD SAJA DARI REQUEST
        //KARENA JUGA DISERTAKAN TOKEN
        $auth = $request->only('email', 'password');

        //CHECK UNTUK PROSES OTENTIKASI
        //DARI GUARD PESERTA, KITA ATTEMPT PROSESNYA DARI DATA $AUTH
        if (auth()->guard('peserta')->attempt($auth)) {
            //JIKA BERHASIL MAKA AKAN DIREDIRECT KE DASHBOARD
            // return redirect()->intended(route('dashboard-peserta'));
            return redirect('/dashboard');
        }
        //JIKA GAGAL MAKA REDIRECT KEMBALI BERSERTA NOTIFIKASI
        return redirect()->back()->with(['error' => 'Email / Password Yang Anda Masukkan Salah']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('dashboard-peserta', '');
        return view('peserta.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (
            !$request->nama || !$request->email || !$request->password
        ) {
            Session::put('error', 'All field is required');
        }
        $this->validate($request,
        [
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        if (!auth()->guard('peserta')->check()) {
            $peserta = Peserta::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password,
            ]);
        }
        Session::put('message', 'New profile has been created');
        
        return redirect('/register');
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
    public function edit(Request $request)
    {
        Session::put('edit-peserta', '');
        $data = Peserta::find($request->id);
        return view('peserta.profile.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = array(
            [
                'nama' => $request->nama,
                'email' => $request->email
            ]
            );
        auth()->guard('peserta')->update($data);

        Session::put('message', 'Data berhasil diperbaharui');
        return redirect()->back();
    }

    public function gantiPassword(Request $request)
    {
        auth()->guard('peserta')->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatusPassword(__('Password successfully updated.'));
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
