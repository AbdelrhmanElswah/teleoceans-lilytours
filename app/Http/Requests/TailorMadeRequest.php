<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TailorMadeRequest extends FormRequest
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
            'name' =>'required|min:4|max:50|string',
            'email' => 'required|min:4|max:50|email',
            'number' => 'required|min:4|max:15',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'nationality' => 'string',
            'dates_are_flexible' => 'bool',
            'duration' => 'string',
            'adult' =>'string',
            'infants' => 'string',
            'child' =>'string',
            'holiday_type' =>'string',
            'transportation' => 'string',
            'style' =>'string',
            'cities' =>'string',
            'comment' => 'string',
        ];
    }
}
