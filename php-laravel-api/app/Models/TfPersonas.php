<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfPersonas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_personas';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_persona';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_persona","nume_doc","tipo_doc","tipo_persona","nombres","ape_paterno","ape_materno","tipo_persona_juridica","tipo_funcion","razon_social"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_persona LIKE ?  OR 
				nume_doc LIKE ?  OR 
				tipo_doc LIKE ?  OR 
				tipo_persona LIKE ?  OR 
				nombres LIKE ?  OR 
				ape_paterno LIKE ?  OR 
				ape_materno LIKE ?  OR 
				tipo_persona_juridica LIKE ?  OR 
				tipo_funcion LIKE ?  OR 
				razon_social LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id_persona", 
			"nume_doc", 
			"tipo_doc", 
			"tipo_persona", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"tipo_persona_juridica", 
			"tipo_funcion", 
			"razon_social" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_persona", 
			"nume_doc", 
			"tipo_doc", 
			"tipo_persona", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"tipo_persona_juridica", 
			"tipo_funcion", 
			"razon_social" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_persona", 
			"nume_doc", 
			"tipo_doc", 
			"tipo_persona", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"tipo_persona_juridica", 
			"tipo_funcion", 
			"razon_social" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_persona", 
			"nume_doc", 
			"tipo_doc", 
			"tipo_persona", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"tipo_persona_juridica", 
			"tipo_funcion", 
			"razon_social" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_persona", 
			"nume_doc", 
			"tipo_doc", 
			"tipo_persona", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"tipo_persona_juridica", 
			"tipo_funcion", 
			"razon_social" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
