<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfConstruccionesEditRequest extends FormRequest
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
            
				"id_construccion" => "filled|string",
				"id_ficha" => "filled",
				"codi_construccion" => "filled|numeric",
				"nume_piso" => "nullable|string",
				"fecha" => "nullable|date",
				"mep" => "nullable|string",
				"ecs" => "nullable|string",
				"ecc" => "nullable|string",
				"estr_muro_col" => "nullable|string",
				"estr_techo" => "nullable|string",
				"acab_piso" => "nullable|string",
				"acab_puerta_ven" => "nullable|string",
				"acab_revest" => "nullable|string",
				"acab_bano" => "nullable|string",
				"inst_elect_sanita" => "nullable|string",
				"area_declarada" => "nullable|numeric",
				"area_verificada" => "nullable|numeric",
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
