<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AuthForm extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                "username"    =>    "required|min:3|max:45",
                "password"       =>      "required|min:3|max:500"
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El campo title es requerido!',
            'username.min' => 'El campo title no puede tener menos de 5 carácteres',
            'username.max' => 'El campo title no puede tener más de 45 carácteres',
            'password.required' => 'El campo body es requerido!',
            'password.min' => 'El campo body no puede tener menos de 5 carácteres',
            'password.max' => 'El campo body no puede tener más de 500 carácteres',
        ];
    }
}