<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SertificateRequest extends FormRequest
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
            'company_name' => 'required',
            'id_sertification' => 'required|numeric|unique:sertifikasis,id_sertification',
            'address'   => 'required|min:5',
            'standard' => 'required',
            'submit' => 'required',
            'survailance1' => 'required',
            'survailance2'  => 'required',
            'expire_date'   => 'required',
        ];
    }
}
