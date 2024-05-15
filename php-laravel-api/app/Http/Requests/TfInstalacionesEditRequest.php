<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfInstalacionesEditRequest extends FormRequest
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
            
				"id_instalacion" => "filled|string",
				"id_ficha" => "filled",
				"codi_instalacion" => "filled",
				"codi_obra" => "filled|numeric",
				"fecha" => "nullable|date",
				"mep" => "nullable|string",
				"ecs" => "nullable|string",
				"ecc" => "nullable|string",
				"dime_largo" => "nullable|numeric",
				"dime_ancho" => "nullable|numeric",
				"dime_alto" => "nullable|numeric",
				"prod_total" => "nullable|numeric",
				"uni_med" => "nullable|string",
				"uca" => "nullable|string",
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
