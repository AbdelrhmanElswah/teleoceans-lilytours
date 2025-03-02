<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
            'sub_category_id' => 'required|numeric|exists:sub_categories,id',
            'name' => 'required|min:2|max:255|string',
            'price' => 'required|string',
            'type' => 'max:100',
            'duration' => 'max:100',
            'track' => 'max:100',
            'run_dates' => 'max:100',
        ];
    }
}
