<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class ReferidoForm extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
		"nombres"     =>    "required|min:3|max:45",
		"apellidos"   =>    "required|min:4|max:45",
		"numero_movil"   =>    "required|min:8|max:10",
		"observacion_del_asesor"   =>    "required|min:8|max:200",
		
        ];
    }
}
