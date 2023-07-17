<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApartmentsSpacesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:200',
            'squarefootage' => 'required|numeric',
            'type' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Pole ":attribute" nie może być puste',
            'max' => 'Pole ":attribute" nie może być większe niż :max',
            'numeric' => 'Pole ":attribute" musi być liczbą',
        ];
    }    

    public function attributes(): array
    {
        return [
            'name' => 'Nazwa pomieszczenia',
            'squarefootage' => 'Powierzchnia pomieszczenia',
            'type' => 'Rodzaj pomieszczenia',
        ];
    } 
}
