<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOffertypesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Pole ":attribute" nie może być puste',
            'max' => 'Pole ":attribute" nie może być większe niż :max',
        ];
    }    

    public function attributes(): array
    {
        return [
            'name' => 'Nazwa typu oferty',
        ];
    }  
}
