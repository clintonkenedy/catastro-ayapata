<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfAutorizacionesAnunciosAddRequest extends FormRequest
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
            
				"id_anuncio" => "required|string",
				"id_ficha" => "required",
				"codi_anuncio" => "nullable|string",
				"codi_autoriza" => "nullable|numeric",
				"nume_lados" => "nullable|numeric",
				"area_autorizada" => "nullable|numeric",
				"area_verificada" => "nullable|numeric",
				"nume_expediente" => "nullable|string",
				"nume_licencia" => "nullable|string",
				"fecha_expedicion" => "nullable|date",
				"fecha_vencimiento" => "nullable|date",
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
