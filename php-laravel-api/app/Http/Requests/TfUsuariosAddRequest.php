<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfUsuariosAddRequest extends FormRequest
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
            
				"id_usuario" => "required|string",
				"codi_usuario" => "required|numeric",
				"usuario" => "required|string",
				"clave" => "required|string",
				"nombres" => "required|string",
				"ape_paterno" => "required|string",
				"ape_materno" => "required|string",
				"email" => "nullable|email",
				"fecha_creacion" => "nullable|date",
				"fecha_cese" => "nullable|date",
				"tipo_usuario" => "nullable|string",
				"estado" => "nullable|string",
				"pregunta" => "nullable|string",
				"respuesta" => "nullable|string",
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
