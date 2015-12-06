<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \App\Area::create(array(
            'id'=>'1',
            'area' => 'Stock',
            ));

        \App\Area::create(array(
            'id'=>'2',
            'area' => 'Entrenamiento Básico',
            ));

        \App\Area::create(array(
            'id'=>'3',
            'area' => 'Entrenamiento Optimo',
            ));

    }
}
