<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmailSettingRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
            case 'PUT':
            case 'PATCH': {
                    return [
                        'mail_mailer' => 'required|string|max:50',
                        'mail_host' => 'required|string|max:100',
                        'mail_port' => 'required|integer',
                        'mail_username' => 'required|string|max:100',
                        'mail_password' => 'required|string|max:100',
                        'mail_encryption' => 'required|string|max:10',
                        'mail_from_address' => 'required|email:rfc,dns',
                        // 'mail_from_name' => 'required|string|max:100',
                        'status' => 'required|in:0,1',
                    ];
                }
            case 'DELETE': {
                    return [
                        'id' => 'required|integer|exists:email_settings,id',
                    ];
                }
            default:
                break;
        }
    }
}
