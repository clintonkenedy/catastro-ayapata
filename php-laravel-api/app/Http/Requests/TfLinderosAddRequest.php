<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfLinderosAddRequest extends FormRequest
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
				"fren_campo" => "nullable|string",
				"fren_titulo" => "nullable|string",
				"fren_colinda_campo" => "nullable|string",
				"fren_colinda_titulo" => "nullable|string",
				"dere_campo" => "nullable|string",
				"dere_titulo" => "nullable|string",
				"dere_colinda_campo" => "nullable|string",
				"dere_colinda_titulo" => "nullable|string",
				"izqu_campo" => "nullable|string",
				"izqu_titulo" => "nullable|string",
				"izqu_colinda_campo" => "nullable|string",
				"izqu_colinda_titulo" => "nullable|string",
				"fond_titulo" => "nullable|string",
				"fond_campo" => "nullable|string",
				"fond_colinda_campo" => "nullable|string",
				"fond_colinda_titulo" => "nullable|string",
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
