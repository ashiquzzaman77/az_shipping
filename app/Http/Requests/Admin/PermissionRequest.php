<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
        $permission = $this->route('permission');
        return [
            'group_name' => 'nullable|string|max:255',
            'name' => 'required|string|max:255|unique:permissions,name,' . $permission,
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Permission name is required',
            'name.string' => 'Permission name must be a string',
            'name.max' => 'Permission name must not be greater than 255 characters',
            'name.unique' => 'Permission name already exists',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'group_name' => 'permission Group name',
            'name' => 'permission name',
        ];
    }
}
