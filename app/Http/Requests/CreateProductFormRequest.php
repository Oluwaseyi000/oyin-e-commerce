<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductFormRequest extends FormRequest
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
            'name' => ['required'],
            'quantity' => ['required', 'integer'],
            'description' => ['nullable'],
            'status_id' => ['required', 'in:1,0'],
            'image' => ['required', 'mimes:png,jpg,jpeg', 'max:1024'],
            'price' => ['required']
        ];
    }
}
