<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unidadmedida extends Model
{
    use SoftDeletes;

	protected $table = 'unidadmedidas';

	protected $fillable = ['unidadMedida'];

	protected $hidden = ['created_at', 'update_at'];

	protected $dates = ['deleted_at'];
}
