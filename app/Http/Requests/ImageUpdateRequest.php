<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageUpdateRequest extends FormRequest
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

       $rules= [
            'name'          => 'required',
            'slug'          => 'required|unique:images,slug,' . $this->image,
            'post_id'       => 'required|integer',
        ];

        if($this->get('file'))
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png' ]);

            return $rules;

    }
}
