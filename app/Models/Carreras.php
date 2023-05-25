<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    use HasFactory;
    protected $table = 'tb_carreras';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function registros(){
        return $this->hasMany(Registros::class, 'carrera_id');
    }
    
}
