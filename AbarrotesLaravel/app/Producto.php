<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

	protected $table = 'productos';

	protected $fillable = ['producto', 'presentacion_id', 'cantidad','unidadMedida_id', 'precio'];   

	protected $hidden = ['created_at', 'update_at'];

	protected $dates = ['deleted_at'];

}
