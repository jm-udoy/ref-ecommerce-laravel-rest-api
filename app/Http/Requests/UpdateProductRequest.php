<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

            $method = $this->method();

            if($method == 'PUT') {
                return [
                    'name' => ['required'],
                    'category' => ['required'],
                    'description' => ['required'],
                    'price' => ['required'],
                ];
            } else {
                return [
                    'name' => ['sometimes', 'required'],
                    'category' => ['sometimes', 'required'],
                    'description' => ['sometimes', 'required'],
                    'price' => ['sometimes', 'required'],
                ];
            }

    }
}
