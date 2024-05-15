<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfDomicilioTitularesAddRequest extends FormRequest
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
            
				"id_ficha" => "required|string",
				"id_persona" => "required",
				"codi_via" => "nullable|string",
				"tipo_via" => "nullable|string",
				"nomb_via" => "nullable|string",
				"nume_muni" => "nullable|string",
				"nomb_edificacion" => "nullable|string",
				"nume_interior" => "nullable|string",
				"codi_hab_urba" => "nullable|string",
				"nomb_hab_urba" => "nullable|string",
				"sector" => "nullable|string",
				"mzna" => "nullable|string",
				"lote" => "nullable|string",
				"sublote" => "nullable|string",
				"codi_dep" => "nullable|string",
				"codi_pro" => "nullable|string",
				"codi_dis" => "nullable|string",
        ];
    }

	public function messages()
    {
        return [
            //using laravel default validation messages
        ];
    }

	/**
     * If validator fails return the exception in json form
     * @param Validator $validator
     * @return array
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
