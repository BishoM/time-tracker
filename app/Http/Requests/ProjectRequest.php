<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class ProjectRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'client_id' => ['required','numeric'],
          'name' => ['required','string'],
          'description' => ['nullable'],
          'budget' => ['nullable','numeric'],
        ];
    }
}
