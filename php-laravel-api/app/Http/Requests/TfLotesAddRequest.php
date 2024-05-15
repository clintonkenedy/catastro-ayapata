<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class TfLotesAddRequest extends FormRequest
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
            
				"id_lote" => "required|string",
				"id_mzna" => "nullable",
				"codi_lote" => "nullable|string",
				"id_hab_urba" => "nullable|string",
				"mzna_dist" => "nullable|string",
				"lote_dist" => "nullable|string",
				"sub_lote_dist" => "nullable|string",
				"estructuracion" => "nullable|string",
				"zonificacion" => "nullable|string",
				"cuc" => "nullable|string",
				"zona_dist" => "nullable|string",
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
