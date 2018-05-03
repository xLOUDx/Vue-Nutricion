<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class PatientRequest extends FormRequest
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

    public function rules(Request $request)
    {
        return [
            'reference' => '',
            'name' => 'required|max:100',
            'last_name_pat' => 'required|max:100',
            'last_name_mat' => 'required|max:100',
            'email' => 'max:100',
            'run' => 'required|max:100',
            'prevision' => 'required|max:100',
            'address' => 'required|max:100',
            'job' => 'required|max:100',
            'phone' => 'required|max:105',
            'age' => 'required|numeric|max:150',
            'size' => 'required|max:1000|numeric',
            'acept_size' => 'required|max:1000|numeric',
            't2' => 'required|numeric',
            'imc_25' => 'required|numeric',
            'sra' => 'max:1000'. $request->id
        ];
    }
}
