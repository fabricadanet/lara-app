<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFranchiseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required', 'max:255', 'string'],
            'description'=> ['required', 'max:255', 'string'],
            'logo'=>['nullable'],
            'website'=>['nullable', 'url'],
            'email'=>['nullable', 'email'],
            'phone'=>['nullable', 'string'],
            'whatsapp'=>['nullable','string'],
            'facebook'=>['nullable','string'],
            'twitter'=>['nullable','string'],
            'instagram'=>['nullable','string'],
            'youtube'=>['nullable','string'],
            'linkedin'=>['nullable','string'],
            'telegram'=>['nullable','string'],
            'street'=>['nullable', 'string'],
            'city'=>['nullable', 'string'],
            'state'=>['nullable', 'string'],
            'country'=>['nullable', 'string'],
            'complement'=>['nullable', 'string'],
            'number'=>['nullable', 'string'],
            'district'=>['nullable', 'string'],
            'zip_code'=>['nullable', 'string'],


        ];
    }
}
