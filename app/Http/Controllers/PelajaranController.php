<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
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
        $pelajaran = Pelajaran::create([
            "pelajaran"=>$request->pelajaran,
            "id_siswa"=>$request->id_siswa,
            "latihan_soal_1"=>$request->latihan_soal_1,
            "latihan_soal_2"=>$request->latihan_soal_2,
            "latihan_soal_3"=>$request->latihan_soal_3,
            "latihan_soal_4"=>$request->latihan_soal_4,
            "ulangan_harian_1"=>$request->ulangan_harian_1,
            "ulangan_harian_2"=>$request->ulangan_harian_2,
            "uts"=>$request->uts,
            "uas"=>$request->uas
        ]);
        return response()->json([
            'status' => 'Success',
            'message' => "Nilai pelajaran berhasil dibuat",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show($pelajaran)
    {
        $pelajaran = Pelajaran::where('pelajaran',$pelajaran)->get();
        return response()->json([
            'status'=> 'Success',
            'data'=> $pelajaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelajaran $pelajaran)
    {
        //
    }
}
