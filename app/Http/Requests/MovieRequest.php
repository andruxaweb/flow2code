<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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

             'Title'=>'required|min:1',
             'Gender'=>'required|min:1'

        ];

        }
        public function attributes() {
          return [
             'title' => 'Title',
             'gender' => 'Gender'
          ];
    }
}
