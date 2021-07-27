<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'Jurusan';
    protected $fillable = [
        'nama'
    ];

    public function kelas()
    {
        return $this->hasMany('App\Kelas', 'jurusan_id', 'id');
    }

    public function kelas_siswa()
    {
        return $this->hasMany('App\Kelas_Siswa', 'jurusan_id', 'id');
    }
}
