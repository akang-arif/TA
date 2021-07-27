<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'Admin';
    protected $fillable = ['nama','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','no_telp','alamat','avatar','user_id'];



    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    function getAvatar()
    {
    	if (!$this->avatar) 
    	{
    		return asset('images/default.png');
    	}

    	return asset('images/'.$this->avatar);


    }
}
