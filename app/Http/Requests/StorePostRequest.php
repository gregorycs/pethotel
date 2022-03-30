<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        return [
            'customer.first_name' => 'required',
            'customer.last_name' => 'required',
            'customer.document' => 'required|max:10',
            'customer.email' => 'required|email',
            'customer.phone' => 'max:10',
            'customer.mobile_phone' => 'required|max:10',
            'pet.name' => 'required',
            'pet.breed' => 'required',
            'pet.age' => 'required|numeric',
            'reservation.entry_date' => 'required|date',
            'reservation.release_date' => 'required|date',
            'reservation.mobility' => 'required',
            'reservation.observation' => 'required',
        ];
    }
}
