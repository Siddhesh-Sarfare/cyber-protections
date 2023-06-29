<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
                    'description' => 'required',
                ];
                break;

            case 'PATCH':
                return [
                    'title' => 'required',
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
            'title.required' => 'Please enter a Title',
            'description.required' => 'Please enter a Description',
        ];
    }
}
