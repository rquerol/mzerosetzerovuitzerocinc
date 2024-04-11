<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curs extends Model
{
    use HasFactory;
    protected $table = 'cursos'; //protected $table = 'my_flights';
   // protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;

    public function cicle(){
        return $this->belongsTo(cicle::class,'cicles_id');
    }

}
