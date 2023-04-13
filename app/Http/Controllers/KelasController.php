<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return response()->json([
            'status' => 'Success',
            'data' => $kelas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelas = Kelas::create([
            'kelas'=>$request->kelas,
            'wali_kelas'=> $request->wali_kelas,
        ]);
        return response()->json([
            'status' => 'Success',
            'message' => "kelas berhasil dibuat",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelas = Kelas::where('_id',$id)->first();
        $daftar_siswa = [];
        $siswas = Siswa::where('id_kelas',$id)->get();

        foreach ($siswas as $s){
            $siswa = [
                'siswa'=> $s->nama,
                'umur'=> $s->umur,
            ];
            array_push($daftar_siswa, $siswa);
        };

        return response()->json([
            'status'=> 'Success',
            'data'=> [
                'kelas'=>$kelas,
                'siswa'=>$daftar_siswa
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id)->first();
        $kelas->kelas = $request->kelas;
        $kelas->wali_kelas = $request->wali_kelas;
        $kelas->save();

        return response()->json([
            'status'=> 'Success',
            'message'=>'Data Kelas berhasil di ubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
