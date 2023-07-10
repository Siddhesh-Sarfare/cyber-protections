<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $method = $this->method();

        switch ($method) {
            case 'GET':
            case 'DELETE':
            case 'PUT':
                return [];
                break;

            case 'POST':
                return [
                    'title' => 'required',
                    'permanent_link' => 'required|unique:blogs',
                    'author' => 'required',
                    'description' => 'required',
                    'blog-image' => 'required|mimes:png,jpg,jpeg|min:1',
                    'keywords' => 'required',
                ];
                break;

            case 'PATCH':
                return [
                    'title' => 'required',
                    'permanent_link' => 'required|' . Rule::unique('blogs')->ignore($this->id),
                    'author' => 'required',
                    'description' => 'required',
                    'blog-image' => 'mimes:png,jpg,jpeg|min:1',
                    'keywords' => 'required',
                ];
                break;

            default:
                break;
        }
    }

    /**
     * Modify the returned validation error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Please enter a Title',
            'permanent_link.required' => 'Please enter a Permanent link',
            'permanent_link.unique' => 'Permanent link is already existed with same input',
            'author.required' => 'Please enter a Author',
            'description.required' => 'Please enter a Description',
            'blog-image.required' => 'Please attach an image ',
            'keywords.required' => 'Add keywords ',
        ];
    }
}
