<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return response()->json([
            'status' => 'Success',
            'data' => $siswa,
        ]);
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
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::where('_id',$id)->first();
        $daftar_nilai = [];
        $pelajaran = Pelajaran::where('id_siswa',$id)->get();

        foreach ($pelajaran as $p){
            $nilai = [
                'mapel'=> $p->pelajaran,
                'nilai_mapel'=>(
                    (0.15*((
                        $p->latihan_soal_1+
                        $p->latihan_soal_2+
                        $p->latihan_soal_3+
                        $p->latihan_soal_4)/4))+
                    (0.2*((
                        $p->ulangan_harian_1+
                        $p->ulangan_harian_2)/2))+
                    (0.25*$p->uts)+
                    (0.4*$p->uas)
                )
            ];
            array_push($daftar_nilai, $nilai);
        };

        return response()->json([
            'status'=> 'Success',
            'data'=> [
                'siswa'=>$siswa,
                'nilai'=>$daftar_nilai
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
