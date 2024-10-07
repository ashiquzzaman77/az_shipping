<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,svg|max:2048',
            'badge' => 'required|string|max:11',
            'title' => 'required|string|max:60',
            'quote' => 'required|string|max:80',
            'button_name' => 'required|string|max:15',
            'button_link' => 'required|url|max:255',
        ];
    }
}
