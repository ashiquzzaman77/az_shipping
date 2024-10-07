<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'quote' => 'required|string|max:120',
            'starting_year' => 'required|date_format:Y',
            'end_year' => 'required|date_format:Y|after_or_equal:starting_year',
            'role' => 'required|string|max:120',
            'organization' => 'required|string|max:20',
            'short_description' => 'nullable|string|max:110',
        ];
    }
}
