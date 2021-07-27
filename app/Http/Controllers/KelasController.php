<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walikelas;
use App\Kelas;


class KelasController extends Controller
{
    public function kelas(Request $request)
    {
        
        $kelas = \App\Kelas::all();
        $walikelas = Walikelas::all();
        $jurusan = \App\Jurusan::all();
        // return $jurusan;
        // return $walikelas;

        $wali = [];
        $dataWali = [];
        $i = 0;
        foreach($kelas as $item){
            $wali[$i] = $item->walikelas_id;
            $i++;
        }
        
        $i = 0;
        foreach($walikelas as $item){
            if(!in_array($item->id, $wali)){
                $dataWali[$i]=$item->id;
                $i++;
            }
        }
        // return $dataWali;
        // return $dataWali;

        return view('akademik/kelas/index',[
            'kelas' => $kelas,
            'walikelas' => $walikelas,
            'dataWali' => $dataWali,
            'jurusan' => $jurusan
        ]);

    }

    public function delete($id)
    {
        $kelas = \App\kelas::find($id);
        $kelas ->delete();
        return redirect('/kelas') -> with('sukses','Data Berhasil Di Hapus');
    }
    
    public function close()
    {
        return redirect('/kelas') -> with('sukses','Data Tidak Di Ubah');
    }

    public function edit($id)
    {
        $kelas = \App\kelas::find($id);
        $kelas2 = \App\kelas::all();
        $jurusan = \App\jurusan::all();
        $walikelas = \App\Walikelas::all();

        $wali = [];
        $dataWali = [];
        $i = 0;
        foreach($kelas2 as $item){
            $wali[$i] = $item->walikelas_id;
            $i++;
        }
        
        $i = 0;
        foreach($walikelas as $item){
            if(!in_array($item->id, $wali)){
                $dataWali[$i]=$item->id;
                $i++;
            }
        }

    	return view('akademik/kelas/edit',[
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'walikelas' => $walikelas,
            'dataWali' => $dataWali
            ]);
    }

    public function create(Request $request)
    {   
        // return $request;
        $kelas = \App\Kelas::create($request->all());
    	return redirect('/kelas')->with('sukses','Data Berhasil Di Masukan');
    }

    public function update(Request $request,$id)
    {
    	$kelas = \App\Kelas::find($id);
    	$kelas -> update($request->all());
    	return redirect('/kelas')->with('sukses','Data Berhasil Di Ubah');
    }

    
}
