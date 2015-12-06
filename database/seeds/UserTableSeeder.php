<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//Hash::make('admin1')
        \App\User::create(array(
            'id'=>'1',
            'username' => '333333',
            'password' => '333333',
            'id_rol'=>3,
            ));

         \App\User::create(array(
            'id'=>'2',
            'username' => '222222',
            'password' => '222222',
            'id_rol'=>2,
            ));

          \App\User::create(array(
            'id'=>'3',
            'username' => '111111',
            'password' => '111111',
            'id_rol'=>1,
            ));


    }
}
