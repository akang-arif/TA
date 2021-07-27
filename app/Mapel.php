<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['kode','nama','semester','keterangan'];


   public function siswa()
   {
   	  return $this->belongsToMany(Siswa::class)->withPivot(['nilai']);
   }

   public function Nilai()
   {
       return $this->hasMany('App\Nilai', 'nilai_id', 'id');
   }

   public function kelas_mapel()
   {
       return $this->hasMany('App\kelas_mapel', 'mapel_id', 'id');
   }

   public function kelas_semester()
   {
       return $this->hasMany('App\kelas_semester', 'mapel_id', 'id');
   }

//    public function kelas()
//     {
//     	return $this->belongsToMany(Kelas::class, 'kelas_mapel');
//     }

}
