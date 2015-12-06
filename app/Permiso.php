<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    

	protected $table = 'go_permisos';

	protected $fillable = ['permiso','id_rol'];

	protected $guarded = ['id'];

	public $timestamps = false;



    public function rol()
    {
        return $this->belongsTo('App\Rol','id_rol');
    }
}
