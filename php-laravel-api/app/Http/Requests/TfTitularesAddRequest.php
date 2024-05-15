<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfTitularesAddRequest extends FormRequest
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
            
				"id_ficha" => "required",
				"id_persona" => "required",
				"form_adquisicion" => "nullable|string",
				"fecha_adquisicion" => "nullable|date",
				"porc_cotitular" => "nullable|numeric",
				"esta_civil" => "nullable|string",
				"fax" => "nullable|string",
				"telf" => "nullable|string",
				"anexo" => "nullable|string",
				"email" => "nullable|email",
				"nume_titular" => "nullable|string",
				"codi_contribuyente" => "nullable|string",
				"cond_titular" => "nullable|string",
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
