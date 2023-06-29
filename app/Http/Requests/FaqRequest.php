<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
                    'category' => 'required',
                    'question' => 'required',
                    'answer' => 'required',
                ];
                break;

            case 'PATCH':
                return [
                    'category' => 'required',
                    'question' => 'required',
                    'answer' => 'required',
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
            'category.required' => 'Please select a Category',
            'question.required' => 'Please enter a Question',
            'answer.required' => 'Please enter an Answer',
        ];
    }
}
