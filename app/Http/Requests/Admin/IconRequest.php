<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class IconRequest extends FormRequest
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
        $iconId = $this->route('icon') ?? null;

        return [
            'name' => ['required', 'string', 'max:30', Rule::unique('icons', 'name')->ignore($iconId)],
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,svg|max:2048',
            'status' => 'required|in:0,1',
        ];
    }
}
