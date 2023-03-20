<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'brand' => 'required|string|max:255|min:2',
            'model' => 'required|string|max:255|min:2',
            'year' => 'required|integer|max:255',
            'max_speed' => 'required|integer|between:20,300',
            'is_automatic' => 'required|integer',
            'engine' => 'required|string|max:255',
            'number_of_doors' => 'required|integer|between:2,5',
        ];
    }
}