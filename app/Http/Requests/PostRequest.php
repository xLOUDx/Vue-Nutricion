<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class PostRequest extends FormRequest
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
             'title' => 'required',
             'subtitle' => 'required',
             'body' => 'required',
             'ppt' => ''. $request->id
         ];
     }
}
