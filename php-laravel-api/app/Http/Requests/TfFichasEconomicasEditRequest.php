<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfFichasEconomicasEditRequest extends FormRequest
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
				"nomb_comercial" => "nullable|string",
				"pred_area_autor" => "nullable|numeric",
				"viap_area_autor" => "nullable|numeric",
				"viap_area_verif" => "nullable|numeric",
				"bc_area_autor" => "nullable|numeric",
				"bc_area_verif" => "nullable|numeric",
				"nume_expediente" => "nullable|string",
				"nume_licencia" => "nullable|string",
				"fecha_expedicion" => "nullable|date",
				"fecha_vencimiento" => "nullable|date",
				"inic_actividad" => "nullable|date",
				"cond_declarante" => "nullable|string",
				"esta_llenado" => "nullable|string",
				"mantenimiento" => "nullable|string",
				"docu_presentado" => "nullable|string",
				"pred_area_verif" => "nullable|numeric",
				"observaciones" => "nullable|string",
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
