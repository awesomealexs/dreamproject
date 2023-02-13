<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatentRequestForm extends FormRequest
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
            'INN' => ['required', 'numeric', 'min:2'],
            'company_id' => ['required'],
        ];
    }

    protected function prepareForValidation(){

        $this->merge([
            'company_id' => 1
        ]);
    }
}
