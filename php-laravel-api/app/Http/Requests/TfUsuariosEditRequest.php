<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfUsuariosEditRequest extends FormRequest
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
            
				"id_usuario" => "filled|string",
				"codi_usuario" => "filled|numeric",
				"usuario" => "filled|string",
				"clave" => "filled|string",
				"nombres" => "filled|string",
				"ape_paterno" => "filled|string",
				"ape_materno" => "filled|string",
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
