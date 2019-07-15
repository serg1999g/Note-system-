<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createTaskRequest extends FormRequest
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
            'title' => 'required|max:20',
            'description' => 'required',
//            'image-.*'=>'array:nullable|image',
            'image-1'=>'nullable|image',
            'image-2'=>'nullable|image',
            'image-3'=>'nullable|image',
            'image-4'=>'nullable|image',
            'image-5'=>'nullable|image',
        ];
    }
}
