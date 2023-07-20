<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApartmentsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:200',
            'number' => 'required|max:20',
            'squarefootage' => 'required|numeric',
            'rooms' => 'required|integer',
            'price' => 'numeric',
            'storey' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Pole ":attribute" nie może być puste',
            'integer' => 'Pole ":attribute" musi być liczbą całkowitą',
            'max' => 'Pole ":attribute" nie może być większe niż :max',
            'numeric' => 'Pole ":attribute" musi być liczbą',
        ];
    }    

    public function attributes(): array
    {
        return [
            'name' => 'Nazwa lokalu',
            'number' => 'Numer lokalu',
            'squarefootage' => 'Powierzchnia lokalu',
            'rooms' => 'Liczba pokoi',
            'price' => 'Cena lokalu',
            'storey' => 'Piętro',
        ];
    }  
}
