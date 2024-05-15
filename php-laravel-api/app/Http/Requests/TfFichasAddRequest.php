<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfFichasAddRequest extends FormRequest
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
				"tipo_ficha" => "nullable|string",
				"nume_ficha" => "nullable|string",
				"id_lote" => "nullable|string",
				"dc" => "nullable|string",
				"nume_ficha_lote" => "nullable|string",
				"declarante" => "nullable|string",
				"fecha_declarante" => "nullable|date",
				"supervisor" => "nullable|string",
				"fecha_supervision" => "nullable|date",
				"tecnico" => "nullable|string",
				"fecha_levantamiento" => "nullable|date",
				"verificador" => "nullable|string",
				"fecha_verificacion" => "nullable|date",
				"nume_registro" => "nullable|string",
				"id_uni_cat" => "nullable",
				"id_usuario" => "nullable",
				"fecha_grabado" => "nullable|date",
				"activo" => "nullable|numeric",
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
