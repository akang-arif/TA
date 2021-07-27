<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
use App\Kelas_Semester;

class MapelController extends Controller
{
    public function delete($id)
    {
        $mapel = \App\Mapel::find($id);
        $mapel ->delete();
        return redirect('/mapel') -> with('sukses','Data Berhasil Di Hapus');
    }
    
    public function close()
    {
        return redirect('/mapel') -> with('sukses','Data Tidak Di Ubah');
    }

    public function edit($id)
    {
    	$mapel = \App\Mapel::find($id);
    	return view('akademik/mapel/edit',['mapel' => $mapel]);
    }

    public function mapel()
    {
        $data_mapel = \App\Mapel::all();
        $kelas_semester = \App\Kelas_Semester::all();
        // return $data_mapel->find(6)->kelas_semester;
        return view('akademik/mapel/mapel',[
            'data_mapel' => $data_mapel,
            'kelas_semester' => $kelas_semester
            ]);
    }

    public function create(Request $request)
    {   
        // return $request;
        //insert ke table Siswa
        // $mapel = \App\Mapel::create($request->all());
        Mapel::create([
            'kode'=> $request->kode,
            'nama' => $request->nama,
            'keterangan'=> $request->keterangan    
        ]);
        $id_mapel = \App\Mapel::latest()->first();

        $i = 0;
        while($i < COUNT($request->semester)){
            Kelas_Semester::create([
                'semester' => $request->semester[$i],
                'mapel_id' => $id_mapel->id
                
            ]);
            $i++;
        }
            
    	return redirect('mapel')->with('sukses','Data Berhasil Di Masukan');
    }

    public function update(Request $request,$id)
    {
    	$mapel = \App\Mapel::find($id);
    	$mapel -> update($request->all());
    	return redirect('/mapel')->with('sukses','Data Berhasil Di Ubah');
    }
      
}
