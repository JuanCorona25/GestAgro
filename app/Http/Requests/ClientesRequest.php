<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            'nomCte' => 'required',
            'domCte' => 'required',
            'telCte' => 'required',
            'emailCte' => 'required',
            'RFCte' => 'required|max:13'
        ];
    }
}
