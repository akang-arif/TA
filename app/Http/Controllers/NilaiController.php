<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nilai;
use \App\Kelas_Siswa;
use \App\Siswa;
use \App\Kelas;
use \App\Jurusan;
use \App\Mapel;
use \App\Walikelas;
use Auth;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::all();
        
        //menampilkan data Walikelas,kelas
        $walikelas = Auth::user()->id;
        
        $query1 = DB::table('walikelas')
            ->where('user_id','like',$walikelas)
            ->get();
        // return $query1;
        
        $query11 = $query1[0]->id;   
        // return $query11;
        //ke table kelas
        $query3 = DB::table('kelas')
        ->where('walikelas_id','like',$query11)
        ->get();
        // return $query3;

        $query33 = $query3[0]->id;
        // return $query33;

        $query4 = DB::table('kelas_mapel')
        ->where('kelas_id','like',$query33)
        ->get();
        // return $query4;

        for ($i=0; $i < count($query4); $i++) 
        { 
            $mapel1[$i] = $query4[$i]->mapel_id;  
        }
        // return $mapel1;
        $mapel = Mapel::all();

        $dataMapel = [];
        $i = 0;
        foreach($mapel as $item){
            if(in_array($item->id, $mapel1)){
                $dataMapel[$i]=$item;
                $i++;
            }
        }

        
        $jurusan = jurusan::all();

        return view('akademik/nilai/index',compact(
            'dataMapel'
        ));

    }

    public function inputNilai($id)
    {
        $nilai = Nilai::all();
        
        $inputNilai = Mapel::where('id',$id)->first();


        //menampilkan data Walikelas,kelas
        $walikelas = Auth::user()->id;
        
        $query1 = DB::table('walikelas')
            ->where('user_id','like',$walikelas)
            ->get();
        // return $query1;
        
        $query11 = $query1[0]->id;   
        // return $query11;
        //ke table kelas
        $query3 = DB::table('kelas')
        ->where('walikelas_id','like',$query11)
        ->get();
        // return $query3;

        $query33 = $query3[0]->id;
        // return $query33;

        $query4 = DB::table('kelas_mapel')
        ->where('kelas_id','like',$query33)
        ->get();
        // return $query4;

        for ($i=0; $i < count($query4); $i++) 
        { 
            $mapel1[$i] = $query4[$i]->mapel_id;  
        }
        // return $mapel1;
        $mapel = Mapel::all();

        $dataMapel = [];
        $i = 0;
        foreach($mapel as $item){
            if(in_array($item->id, $mapel1)){
                $dataMapel[$i]=$item;
                $i++;
            }
        }
        // return $dataMapel;



        $query2 = DB::table('kelas_siswa')
            ->where('walikelas_id','like',$query11)
            ->get();
        // return $query2;
        //memangil data siswa
        for ($i=0; $i < count($query2); $i++) 
        { 
            $siswa1[$i] = $query2[$i]->siswa_id;  
        }

        //memangil data kelas
        for ($i=0; $i < count($query2); $i++) 
        { 
            $kelas1[$i] = $query2[$i]->kelas_id;  
        }
        // return $kelas1;
        
        $siswa = Siswa::all();
        
        $dataSiswa = [];
        $i = 0;
        foreach($siswa as $item){
            if(in_array($item->id, $siswa1)){
                $dataSiswa[$i]=$item;
                $i++;
            }
        }
        // return $dataSiswa;

        $kelas = Kelas::all();
        $dataKelas = [];
        $i = 0;
        foreach($kelas as $item){
            if(in_array($item->id, $kelas1)){
                $dataKelas[$i]=$item;
                $i++;
            }
        }
        // return $dataKelas;


        $jurusan = jurusan::all();
        // return $dataSiswa[0]->nilai->first()->mapel_id
        // return $inputNilai->id;
        return view('akademik/nilai/input',compact(
            'nilai','siswa','kelas','jurusan','mapel','dataSiswa','dataKelas','inputNilai','id'
        ));
    }

    public function create(Request $request)
    {   
        
        //insert ke table Siswa
        // return $request;
        $i = 0;
        while($i < COUNT($request->siswa_id)){
            if($request->id[$i] == null){
                Nilai::create([
                    'nilai' => $request->nilai[$i],
                    'mapel_id' => $request->mapel_id,
                    'kelas_id' => $request->kelas_id,
                    // 'semester' => $request->semester,
                    'siswa_id' => $request->siswa_id[$i]
                ]);
            }else{
                $nilai=  Nilai::find($request->id[$i]);
                $nilai->nilai = $request->nilai[$i];
                $nilai->save();
            }
            
            $i++;
        }

        // $nilai = \App\Nilai::create($request->all());
        // return $request;
    	return redirect('/inputNilai/'.strval($request->mapel_id))->with('sukses','Data Berhasil Di Masukan');
    }

    public function delete($id)
    {
        $nilai = Nilai::find($id);
        $nilai ->delete();
        return redirect('/nilai1') -> with('sukses','Data Berhasil Di Hapus');
    }
    
    public function close()
    {
        return redirect('/nilai1') -> with('sukses','Data Tidak Di Ubah');
    }

    // public function contoh()
    // {
    //     $kelas = Kelas_Siswa::where('walikelas_id','')->get();
    //     // return view('akademik/nilai/contoh',compact (
    //     //     'kelas'
    //     // ));

    //     return $kelas;
    // }

    
}
