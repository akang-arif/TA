<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas_Siswa extends Model
{

   protected $table = 'Kelas_Siswa';
   protected $fillable = [
       'kode_kelas_siswa','kelas_id','siswa_id','jurusan_id','walikelas_id'
   ];

   public function walikelas()
   {
         return $this->belongsTo('App\Walikelas'); 
   }

   public function kelas()
   {
         return $this->belongsTo('App\Kelas', 'kelas_id','id'); 
   }

   public function siswa()
   {
         return $this->belongsTo('App\Siswa','siswa_id','id'); 
   }

   public function jurusan()
   {
         return $this->belongsTo('App\Jurusan','jurusan_id','id'); 
   }
   



}
