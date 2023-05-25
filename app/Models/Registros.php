<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    use HasFactory;
    protected $table = 'tb_registros';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function carreras()
    {
        return $this->belongsTo(Carrera::class, 'carrera_id');
    }
}
