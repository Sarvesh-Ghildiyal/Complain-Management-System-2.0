<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComplainRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'room_no' => 'required|numeric',
            'title' => 'required|string',
            'requested_by' => 'required|string',
            'reported_by'=>'required|string',
            'body' => 'required|string|max:300',
        ];
    }

    public function messages(): array
    {
        return [
            'room_no'=> 'Room number field is required',
            'title' => 'Title field is required',
            'body.required' => 'Description field is required.',
            // ... other custom messages ...
        ];
    }

}
