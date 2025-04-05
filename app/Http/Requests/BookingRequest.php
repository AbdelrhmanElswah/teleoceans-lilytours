<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
                'program_id' => 'required|exists:programs,id',
                'name' => 'required|min:4|max:50|string',
                'email' => 'required|email|min:6|max:120',
                'number' => 'required|min:6|max:20',
                'adult' => 'required|integer|min:1',
                'child' => 'nullable|integer|min:0',
                'date' => 'required|date',
                'message' => 'nullable|string|min:6|max:200',
                'promo_code' => 'nullable|string|max:20',
                'addons' => 'nullable|string|min:1|max:200',
            ];
        
        
    }
}
