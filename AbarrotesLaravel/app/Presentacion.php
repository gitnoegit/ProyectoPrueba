<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Presentacion extends Model
{
    use SoftDeletes;

	protected $table = 'presentaciones';

	protected $fillable = ['presentacion'];

	protected $hidden = ['created_at', 'update_at'];

	protected $dates = ['deleted_at'];
}
