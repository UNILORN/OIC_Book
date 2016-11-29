<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validates extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
              'price_sort_from' => 'required|unique:posts|max:10',
              'price_sort_to' => 'required|unique:posts|max:10',
              'cotegory' => 'required|unique:posts|max:10',
              'price' => 'required|unique:posts|max:10',
              'sort' => 'required|unique:posts|max:10',
              'sort_order' => 'required|unique:posts|max:10',
              'price_sort_from' => 'required|unique:posts|max:10',
              'price_sort_to' => 'required|unique:posts|max:10'
        ];
    }
}
