<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Rol::create(array(
            'id'=>'1',
            'rol' => 'Administrador',
            ));

        \App\Rol::create(array(
            'id'=>'2',
            'rol' => 'CallCenter',
            ));

        \App\Rol::create(array(
            'id'=>'3',
            'rol' => 'Asesor',
            ));


    }
}
