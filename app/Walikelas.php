<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    protected $table = 'Walikelas';
    protected $fillable = ['nama','nip','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','no_telp','alamat','avatar','user_id','kelas_id'];



    function getAvatar()
    {
    	if (!$this->avatar) 
    	{
    		return asset('images/default.png');
    	}

    	return asset('images/'.$this->avatar);


    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function kelas()
    {
    	return $this->belongsTo('App\Kelas', 'kelas_id', 'id');
    }

  

    public function kelas_siswa()
    {
        return $this->hasMany('App\kelas_siswa', 'walikelas_id', 'id');
    }
}
