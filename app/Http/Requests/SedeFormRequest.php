<?php

namespace Sidecol\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SedeFormRequest extends FormRequest
{
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
            
            // idtbl_sede
            // nombresede
            // email
            // direccion
            // telefono
            // estado
            // fk_organizacion
            // fk_ciudad

            'nombresede'=>'required|max:45',
            'email'=>'required|max:100',
            'direccion'=>'required|max:200',
            'telefono'=>'required|max:16',
            'estado'=>'required|max:45',

        ];
    }
}
