<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SertificateRequest;
use App\Models\Sertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertificate = Sertifikasi::all();
        return view('backend.pages.sertificates.index')->withSertificates($sertificate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.sertificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SertificateRequest $request)
    {
        try {
            $sertificate = new Sertifikasi();
            $sertificate->company_name = $request->get('company_name');
            $sertificate->id_sertification = $request->get('id_sertification');
            $sertificate->address = $request->get('address');
            $sertificate->standard = $request->get('standard');
            $sertificate->submit = $request->get('submit');
            $sertificate->survailance1 = $request->get('survailance1');
            $sertificate->survailance2 = $request->get('survailance2');
            $sertificate->expire_date = $request->get('expire_date');
            $sertificate->save();
            Session::flash('status', 'Data berhasil ditambahkan');
            return view('backend.pages.sertificates.index');
        } catch (\Throwable $th) {
            return $th;
            Session::flash('status', 'Data gagal ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikasi $sertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertifikasi $sertifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertifikasi $sertifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikasi $sertifikasi)
    {
        //
    }
}
