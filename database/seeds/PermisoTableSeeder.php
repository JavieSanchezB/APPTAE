<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PermisoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//Administrador
     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\InicioController@getInicio',
        'id_rol'=>'1',
        ));

     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\UsuarioController@index',
        'id_rol'=>'1',
        ));

      \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\PreguntaController@index',
        'id_rol'=>'1',
        ));

 \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\PreguntaController@create',
        'id_rol'=>'1',
        ));

  \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\PreguntaController@store',
        'id_rol'=>'1',
        ));

    \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\EncuestaController@index',
        'id_rol'=>'1',
        ));

//CallCenter
     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\InicioController@getInicio',
        'id_rol'=>'2',
        ));

     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\ReferidoController@index',
        'id_rol'=>'2',
        ));

     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\ReferidoController@edit',
        'id_rol'=>'2',
        ));


     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\ReferidoController@update',
        'id_rol'=>'2',
        ));


//asesor
     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\InicioController@getInicio',
        'id_rol'=>'3',
        ));


     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\ReferidoController@create',
        'id_rol'=>'3',
        ));

     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\ReferidoController@store',
        'id_rol'=>'3',
        ));

     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\ReferidoController@index',
        'id_rol'=>'3',
        ));

     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\ReferidoController@edit',
        'id_rol'=>'3',
        ));

     \App\Permiso::create(array(
        'permiso' => 'App\Http\Controllers\ReferidoController@update',
        'id_rol'=>'3',
        ));

 }
}
