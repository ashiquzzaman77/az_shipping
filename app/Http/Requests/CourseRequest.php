<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class CourseRequest extends FormRequest
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
        $courseId = $this->route('course');

        return [

            'instructor_id' => 'nullable',
            'course_section_id' => 'nullable',
            // 'description' => 'nullable|string',
            // 'specification' => 'nullable|string',
            // 'price' => 'required|numeric',
            // 'quantity' => 'required|integer',

            // 'sku' => [
            //     'required',
            //     'string',
            //     Rule::unique('products')->ignore($productId),
            // ],

            // 'manufacturer_code' => [
            //     'nullable',
            //     'string',
            //     Rule::unique('products')->ignore($productId),
            // ],
            // 'product_code' => [
            //     'nullable',
            //     'string',
            //     Rule::unique('products')->ignore($productId),
            // ],

        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $this->recordErrorMessages($validator);
        parent::failedValidation($validator);
    }

    /**
     * Record the error messages displayed to the user.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    protected function recordErrorMessages(Validator $validator)
    {
        $errorMessages = $validator->errors()->all();

        foreach ($errorMessages as $errorMessage) {
            Session::flash('error',$errorMessage);
            // toastr()->error($errorMessage);
        }
    }
}
