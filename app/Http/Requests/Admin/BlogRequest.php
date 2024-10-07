<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'admin_id' => 'required|exists:admins,id',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|exists:tags,id',
            'card_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:1024|dimensions:min_width=100,min_height=200', // max 1MB
            'badge' => 'required|max:11',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:1024|dimensions:min_width=100,min_height=200', // max 1MB
            'title' => 'required|max:40',
            'summary' => 'required|max:255',
            'description' => 'required',
            'published_at' => 'required|date',
            'views' => 'integer|min:0',
            'likes' => 'integer|min:0',
            'comments' => 'integer|min:0',
            'meta_title' => 'nullable|max:60',
            'meta_keywords' => 'nullable|max:100',
            'meta_description' => 'nullable|max:160',
            'meta_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:1024|dimensions:min_width=100,min_height=200', // max 1MB
            'url' => 'nullable|url|max:255',
            'status' => 'required|in:0,1',
        ];
    }
}
