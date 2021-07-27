<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Siswa;
use App\Kelas;
use App\Kelas_Siswa;
use App\Walikelas;

class kelasSiswaController extends Controller
{
    public function kelas_siswa()
    {
        $kelas_siswa = Kelas_Siswa::all();
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        $walikelas = Walikelas::all();
        
        $siswa2 = [];
        $dataSiswa = [];
        $i = 0;
        //Di sini melempar data Siswa yang Sudah masuk dalam kelas
        foreach($kelas_siswa as $item){
            $siswa2[$i] = $item->siswa_id;
            $i++;
        }
        
        //Disini Melempar data siswa yang tidak masuk dalam kelas
        $i = 0;
        foreach($siswa as $item){
            if(!in_array($item->id, $siswa2)){
                $dataSiswa[$i]=$item->id;
                $i++;
            }
        // return $dataSiswa;
        }
        // return $kelas_siswa->first()->siswa;
        return view('akademik/kelas_siswa/index', compact('kelas_siswa','siswa','kelas','jurusan','dataSiswa','walikelas'));
        // return view('akademik/kelas_siswa/index');
        // return view('akademik/kelas_siswa/index',['data_kelas' => $data_kelas]);
    }

    public function delete($id)
    {
        $kelas = Kelas_Siswa::find($id);
        $kelas ->delete();
        return redirect('/kelas_siswa') -> with('sukses','Data Berhasil Di Hapus');
    }
    
    public function close()
    {
        return redirect('/kelas_siswa') -> with('sukses','Data Tidak Di Ubah');
    }

    public function edit($id)
    {
        $kelas = Kelas_Siswa::find($id);
        $kelas3 = Kelas_Siswa::all();
        $jurusan = Jurusan::all();
        $kelas2  = Kelas::all();
        $siswa = Siswa::all();
        $walikelas = Walikelas::all();

        $siswa2 = [];
        $dataSiswa = [];
        $i = 0;
        //Di sini melempar data Siswa yang Sudah masuk dalam kelas
        foreach($kelas3 as $item){
            $siswa2[$i] = $item->siswa_id;
            $i++;
        }
        //Disini Melempar data siswa yang tidak masuk dalam kelas
        $i = 0;
        foreach($siswa as $item){
            if(!in_array($item->id, $siswa2)){
                $dataSiswa[$i]=$item->id;
                $i++;
            }
        }
        
    	return view('akademik/kelas_siswa/edit', compact (
            'kelas','jurusan','kelas2','siswa','dataSiswa','walikelas','kelas3'
        ));
            
    }

    public function create(Request $request)
    {   
        // return $request;
        $kelas = Kelas_Siswa::create($request->all());
        // return $request;
    	return redirect('/kelas_siswa')->with('sukses','Data Berhasil Di Masukan');
    }

    public function update(Request $request,$id)
    {
    	$kelas = Kelas_Siswa::find($id);
    	$kelas -> update($request->all());
    	return redirect('/kelas_siswa')->with('sukses','Data Berhasil Di Ubah');
    }

}
