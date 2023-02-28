<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Request;
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
            'company_id' => ['required', 'numeric'],
            'trade_mark' => ['string', 'nullable'],
            'client_name' => ['string', 'nullable'],
            'legal_address' => ['string', 'nullable'],
            'ceo_name' => ['string', 'nullable'],
            'date_of_application' => ['date', 'nullable'],
            'application_number' => ['string', 'nullable'],
            'descriptiveness_text' => ['string', 'nullable'],
            'falsity_text' => ['string', 'nullable'],
            'perspective_forecast' => ['numeric', 'nullable'],
        ];
    }

    protected function prepareForValidation(){

        $this->merge([
            'company_id' => 1
        ]);
    }
}
