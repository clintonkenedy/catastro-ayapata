<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfPersonasEditRequest extends FormRequest
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
            
				"id_persona" => "filled|string",
				"nume_doc" => "nullable|string",
				"tipo_doc" => "nullable|string",
				"tipo_persona" => "nullable|string",
				"nombres" => "nullable|string",
				"ape_paterno" => "nullable|string",
				"ape_materno" => "nullable|string",
				"tipo_persona_juridica" => "nullable|string",
				"tipo_funcion" => "nullable|string",
				"razon_social" => "nullable|string",
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
