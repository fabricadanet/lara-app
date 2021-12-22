<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'price' => ['nullable', 'string', 'max:255'],
            'area' => ['nullable', 'string', 'max:255'],
            'rooms' => ['nullable', 'string', 'max:255'],
            'bathrooms' => ['nullable', 'string', 'max:255'],
            'garage' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string', 'max:255'],
            'marital_status' => ['nullable', 'string', 'max:255'],
            'children' => ['nullable', 'string', 'max:255'],
            'pets' => ['nullable', 'string', 'max:255'],
            'suite' => ['nullable', 'string', 'max:255'],
            'decision maker' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'sale_deadline' => ['nullable', 'string', 'max:255'],
            'financing' => ['nullable', 'string', 'max:255'],
            'construction' => ['nullable', 'string', 'max:255'],
            'property_type' => ['nullable', 'string', 'max:255'],
            'swap_type' => ['nullable', 'string', 'max:255'],
            'sale_type' => ['nullable', 'string', 'max:255'],
            'furniture' => ['nullable', 'string', 'max:255'],
            'parking' => ['nullable', 'string', 'max:255'],
            'work_out' => ['nullable', 'string', 'max:255'],
            'job_type' => ['nullable', 'string', 'max:255'],
            'proximity_beach' => ['nullable', 'string', 'max:255'],
        ];
    }
}
