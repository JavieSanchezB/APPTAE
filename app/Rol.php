<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

	protected $table = 'go_roles';

	protected $fillable = ['rol'];

	protected $guarded = ['id'];

	public $timestamps = false;


 public function users()
    {
        return $this->hasMany('App\User','id_rol');
    }

 public function permisos()
    {
        return $this->hasMany('App\Permiso','id_rol');
    }

}
