<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Quiz_currentPercentage' => [
                'required',
                'integer',
                'min:0',
                'max:100',
                'sumsTo:100,Midterm_currentPercentage,Writing_currentPercentage,Speaking_currentPercentage,Homework_currentPercentage'
            ],
            'Midterm_currentPercentage' => [
                'required',
                'integer',
                'min:0',
                'max:100'
            ],
            'Writing_currentPercentage' => [
                'required',
                'integer',
                'min:0',
                'max:100'
            ],
            'Speaking_currentPercentage' => [
                'required',
                'integer',
                'min:0',
                'max:100'
            ],
            'Homework_currentPercentage' => [
                'required',
                'integer',
                'min:0',
                'max:100'
            ],
        ];
    }
}
