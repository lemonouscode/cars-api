<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'brand' => 'string|max:255',
            'model' => 'string|max:255',
            'year' => 'integer|max:255',
            'max_speed' => 'integer|min:200',
            'is_automatic' => 'integer',
            'engine' => 'string|max:255',
            'number_of_doors' => 'integer|max:255',
        ];
    }
}