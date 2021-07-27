<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;
use \App\Nilai;
use \App\Kelas_Siswa;
use \App\Kelas;
use \App\Jurusan;
use \App\Mapel;
use \App\Walikelas;
use Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class CetakController extends Controller
{
    

    public function siswa()
    {
        $walikelas = Auth::user()->id;
        
        $query1 = DB::table('walikelas')
            ->where('user_id','like',$walikelas)
            ->get();
        
        $query11 = $query1[0]->id;

        
        $query2 = DB::table('kelas_siswa')
            ->where('walikelas_id','like',$query11)
            ->get();
        // return $query2;
        //memangil data siswa
        for ($i=0; $i < count($query2); $i++) 
        { 
            $siswa1[$i] = $query2[$i]->siswa_id;  
        }

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
        return view('/cetak/siswa',compact(
            'dataSiswa'
        ));
    }



    public function cetak_pdf($id)
    {
        $siswa = siswa::find($id);
        
        $nilai = $siswa->nilai;
        // return $nilai;
    	$pdf = PDF::loadview('cetak_pdf',[
            'siswa' => $siswa,
            'nilai' => $nilai,
        ]);

        // return $pdf;
        return $pdf->stream();
    }

    public function lihatNilai($id)
    {
        $siswa = Siswa::find($id);
        
        $nilai = $siswa->nilai;

        return view('cetak/lihatNilai',compact (
            'nilai'
        ));
    }
}
