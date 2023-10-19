<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    //protected $dates = ['ultimo_dia'];
    protected $casts = [ 'ultimo_dia'=>'date'];

    // Campos que se agregaran
    protected $fillable = [
        'titulo', 
        'salario_id', 
        'categoria_id', 
        'empresa', 
        'ultimo_dia', 
        'descripcion', 
        'imagen', 
        'user_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function salario()
    {
        return $this->belongsTo(Salario::class);
    }
}
