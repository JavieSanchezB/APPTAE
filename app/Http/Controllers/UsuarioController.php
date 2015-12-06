<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioForm;
use Illuminate\Contracts\Auth\Guard;
use Auth;

class UsuarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $users = \DB::table((new \App\User)->getTable())->select('id','username', 'password');

        $tabla=new \App\library\DataTables;
        $tabla->unset_add();
        $tabla->unset_delete();
        $tabla->add_action('ttt','referido.edit');

        $t= $tabla->tabla($users,'usuario');

        return view("list")->with('tabla', $t);
    }


    public function getSincronizar()
    {

        $asesores = \App\Estructura::All();
     foreach ($asesores as $asesor) {

         if($asesor->user){

         }else{
             $user = new \App\User;

             $user->username = $asesor->asesor_cedula;
             $user->password = $asesor->asesor_cedula;
             $user->id_rol = 3;


             $user->save();
         }



     }
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
