<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'Kelas';
    protected $fillable = [
        'kode_kelas','nama','nama_kelas','walikelas_id','jurusan_id'
    ];

    public function walikelas()
    {
    	return $this->hasOne('App\Walikelas' , 'kelas_id' , 'id');
    }
     public function siswa()
    {
        return $this->hasOne('App\Siswa' , 'kelas_id' , 'id');
    }

  
    public function kelas_siswa()
    {
        return $this->hasMany('App\kelas_siswa', 'kelas_id', 'id');
    }

    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan','jurusan_id','id');
    }

    public function nilai()
    {
        return $this->hasMany('App\Nilai', 'nilai_id', 'id');
    }

    public function kelas_mapel()
    {
        return $this->hasMany('App\kelas_mapel', 'kelas_id', 'id');
    }




    // public function mapel() 
    // { 
    //     return $this->belongsToMany(Mapel::class,'kelas_mapel'); 
    // }
}
