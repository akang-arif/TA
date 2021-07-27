<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas_Semester extends Model
{
    protected $table = 'kelas_semester';
    // public $timestamps=false;
    protected $fillable = [
        'mapel_id','semester'
    ]; 


    public function kelas_semester()
   {
       return $this->belongsTo('App\kelas_semester', 'mapel_id', 'id');
   }


    
}
