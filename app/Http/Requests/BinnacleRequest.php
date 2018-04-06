<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class BinnacleRequest extends FormRequest
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
          'weight' => 'required|max:1000',
          'imc' => 'required|max:1000',
          'anxiety' => 'required|max:1000',
          'exercise' => 'required|max:1000',
          'digestion' => 'required|max:1000',
          'liquids' => 'required|max:1000',
          'size_t2' => 'required|max:1000',
          'desired_weight' => 'required|max:1000',
          'mg_normal' => 'required|max:1000',
          'kg_km' => 'required|max:1000',
          'projection_treatment' => 'required',
          'se' => 'required|max:1000|numeric',
          'tri' => 'required|max:1000|numeric',
          'bi' => 'required|max:1000|numeric',
          'si' => 'required|max:1000|numeric',
          'total' => 'required|max:1000',
          'mg' => 'required|max:1000',
          'waist' => 'required|max:1000',
          'hip' => 'required|max:1000',
          'thigh' => 'required|max:1000',
          'braq' => 'required|max:1000',
          'wrist' => 'required|max:1000'. $request->id
        ];
    }
}
