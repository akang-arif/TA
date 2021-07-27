<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'Nilai';
    protected $fillable = [
        'nilai','mapel_id','kelas_id','siswa_id','semester'
    ];


    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'siswa_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id', 'id');
    }

    public function mapel()
    {
        return $this->belongsTo('App\Mapel', 'mapel_id', 'id');
    }


}
