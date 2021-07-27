<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas_Mapel extends Model
{
    protected $table = 'Kelas_Mapel';
    protected $fillable = [
        'kelas_id','mapel_id','kode_kelas_mapel'
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id', 'id');
    }

    public function mapel()
    {
        return $this->belongsTo('App\Mapel', 'mapel_id', 'id');
    }




}
