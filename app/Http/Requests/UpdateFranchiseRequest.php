<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFranchiseRequest extends FormRequest
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
            'name'=>['required', 'max:255', 'string'],
            'description'=> ['nullable', 'max:255', 'string'],
            'logo'=>['nullable','string'],
            'website'=>['nullable', 'string', 'max:255'],
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
