<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Session;

class NewsTrendRequest extends FormRequest
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
    public function rules()
    {
        return [
            'course_id' => 'nullable',
            'featured' => 'nullable|in:0,1',
            'type' => 'required|in:news,trends',
            'badge' => 'nullable|string|max:50',
            'title' => 'nullable|string|max:255',
            'header' => 'nullable|string',
            'short_des' => 'nullable|string',
            'long_des' => 'nullable|string',
            'author' => 'nullable|string',
            'address' => 'nullable|string',
            'tags' => 'nullable|json',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'additional_url' => 'nullable|url',
            'footer' => 'nullable|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'course_id.json' => 'The Course id field must be a valid JSON string.',
            'featured.in' => 'The featured field must be either 0 or 1.',
            'type.required' => 'The type field must be required.',
            'type.in' => 'The type field must be either news or trends.',
            'badge.max' => 'The badge field may not be greater than 50 characters.',
            'title.max' => 'The title field may not be greater than 255 characters.',
            'header.string' => 'The header field must be a string.',
            'short_des.string' => 'The short description field must be a string.',
            'long_des.string' => 'The long description field must be a string.',
            'author.string' => 'The author field must be a string.',
            'address.string' => 'The address field must be a string.',
            'tags.json' => 'The tags field must be a valid JSON string.',

            'banner_image.string' => 'The banner image field must be a string.',
            'thumbnail_image.string' => 'The thumbnail image field must be a string.',

            'banner_image.image'        => 'The file must be an image.',
            'image.mimes'        => 'The image must be a file of type:jpeg, png, jpg, gif.',
            'image.max'          => 'The image may not be greater than 2048 kilobytes.',
            'thumbnail_image.image'         => 'The file must be an image.',
            'logo.mimes'         => 'The logo must be a file of type:jpeg, png, jpg, gif.',
            'logo.max'           => 'The logo may not be greater than 2048 kilobytes.',

            'additional_url.url' => 'The additional URL field must be a valid URL.',
            'footer.string' => 'The footer field must be a string.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'course_id' => 'Category ID',

            'featured' => 'Featured',
            'type' => 'Type',
            'badge' => 'Badge',
            'title' => 'Title',
            'header' => 'Header',
            'short_des' => 'Short Description',
            'long_des' => 'Long Description',
            'author' => 'Author',
            'address' => 'Address',
            'tags' => 'Tags',
            'banner_image' => 'Banner Image',
            'thumbnail_image' => 'Thumbnail Image',
            'additional_url' => 'Additional URL',
            'footer' => 'Footer',
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
