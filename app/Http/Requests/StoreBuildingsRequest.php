<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBuildingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:200',
            'storeys' => 'required|integer|max:99',
            'description' => 'max:255'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Pole ":attribute" nie może być puste',
            'integer' => 'Pole ":attribute" musi być liczbą',
            'max' => 'Pole ":attribute" nie może być większe niż :max',
        ];
    }    

    public function attributes(): array
    {
        return [
            'name' => 'Nazwa budynku',
            'storeys' => 'Liczba pięter',
            'description' => 'Opis'
        ];
    }    
}
