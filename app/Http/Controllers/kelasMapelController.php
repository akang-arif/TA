<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kelas;
use \App\Mapel;
use \App\Kelas_Mapel;

class kelasMapelController extends Controller
{
    public function index()
    {
        // $kelas = Kelas_Mapel::where('kelas_id','like',2)->get();
        // // return $kelas;
        // $kelas1 = $kelas[0]->kelas_id;
        // // return $kelas1;
        // $dataKelas = Kelas::where('id','like',$kelas1)->get();
        // return $dataKelas;

        // $dataKelas = [];
        // $i =0;

        $kelas = Kelas::get();
        $mapel = Mapel::all();
        $kelas_mapel = Kelas_Mapel::all();

        
        // return $kelas_mapel->first()->kelas;
        return view('akademik.kelas_mapel.index', compact (
            'kelas_mapel','kelas','mapel'
        ));
    }

    public function create(Request $request)
    {   
        $kelas = Kelas_Mapel::create($request->all());
        // return $request;
    	return redirect('/kelas_mapel')->with('sukses','Data Berhasil Di Masukan');
    }

    public function edit($id)
    {
        $kelas_mapel = Kelas_Mapel::find($id);
        $kelas = Kelas::all();
        $mapel = Mapel::all();
    	return view('akademik.kelas_mapel.edit', compact(
            'kelas_mapel','kelas','mapel'
        ));
    }

    public function update(Request $request,$id)
    {
    	$kelas_mapel = Kelas_Mapel::find($id);
        $kelas_mapel -> update($request->all());
        // return $request;
    	return redirect('/kelas_mapel')->with('sukses','Data Berhasil Di Ubah');
    }

    public function delete($id)
    {
        $kelas_mapel = Kelas_Mapel::find($id);
        $kelas_mapel ->delete();
        return redirect('/kelas_mapel') -> with('sukses','Data Berhasil Di Hapus');
    }
    
    public function close()
    {
        return redirect('/kelas_mapel') -> with('sukses','Data Tidak Di Ubah');
    }



}
