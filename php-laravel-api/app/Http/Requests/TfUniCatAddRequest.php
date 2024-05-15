<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfUniCatAddRequest extends FormRequest
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
            
				"id_uni_cat" => "required|string",
				"id_lote" => "nullable|string",
				"id_edificacion" => "nullable",
				"codi_entrada" => "nullable|string",
				"codi_piso" => "nullable|string",
				"codi_unidad" => "nullable|string",
				"tipo_interior" => "nullable|string",
				"cuc" => "nullable|string",
				"cuc_antecedente" => "nullable|string",
				"codi_hoja_catastral" => "nullable|string",
				"codi_pred_rentas" => "nullable|string",
				"nume_interior" => "nullable|string",
				"unid_acum_rentas" => "nullable|string",
				"codi_cont_rentas" => "nullable|string",
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
