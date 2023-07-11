<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SEORequest extends FormRequest
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
                    'page' => 'required',
                    'keywords' => 'required',
                    'description' => 'required',
                ];
                break;

            case 'PATCH':
                return [
                    'page' => 'required',
                    'keywords' => 'required',
                    'description' => 'required',
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
            'page.required' => 'Please select a Page',
            'keywords.required' => 'Please enter a Keywords',
            'description.required' => 'Please enter an Description',
        ];
    }
}
