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


    /**
     * The roles that belong to the Modul
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function moduls()
    {
        return $this->belongsToMany(Modul::class, 'moduls_has_cursos', 'cursos_id', 'moduls_id')->withPivot('curs_academic_id');
    }

}
