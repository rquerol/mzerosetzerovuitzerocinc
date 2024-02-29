<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cicle extends Model
{
    use HasFactory;
    protected $table = 'cicles';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    
}
