<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfFichasBienesComunesEditRequest extends FormRequest
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
            
				"id_ficha" => "filled",
				"cont_en" => "nullable|string",
				"clasificacion" => "nullable|string",
				"area_titulo" => "nullable|numeric",
				"area_declarada" => "nullable|numeric",
				"area_verificada" => "nullable|numeric",
				"en_colindante" => "nullable|numeric",
				"en_jardin_aislamiento" => "nullable|numeric",
				"en_area_publica" => "nullable|numeric",
				"en_area_intangible" => "nullable|numeric",
				"cond_declarante" => "nullable|string",
				"esta_llenado" => "nullable|string",
				"mantenimiento" => "nullable|string",
				"observaciones" => "nullable|string",
				"codi_uso" => "filled",
				"nume_ficha" => "nullable|string",
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
