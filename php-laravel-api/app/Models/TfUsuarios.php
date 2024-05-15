<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfUsuarios extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_usuarios';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_usuario';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_usuario","codi_usuario","usuario","clave","nombres","ape_paterno","ape_materno","email","fecha_creacion","fecha_cese","tipo_usuario","estado","pregunta","respuesta"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_usuario LIKE ?  OR 
				usuario LIKE ?  OR 
				nombres LIKE ?  OR 
				ape_paterno LIKE ?  OR 
				ape_materno LIKE ?  OR 
				email LIKE ?  OR 
				tipo_usuario LIKE ?  OR 
				estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"id_usuario", 
			"usuario", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"email", 
			"fecha_creacion", 
			"fecha_cese", 
			"tipo_usuario", 
			"estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_usuario", 
			"usuario", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"email", 
			"fecha_creacion", 
			"fecha_cese", 
			"tipo_usuario", 
			"estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_usuario", 
			"codi_usuario", 
			"usuario", 
			"clave", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"email", 
			"fecha_creacion", 
			"fecha_cese", 
			"tipo_usuario", 
			"estado", 
			"pregunta", 
			"respuesta" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_usuario", 
			"codi_usuario", 
			"usuario", 
			"clave", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"email", 
			"fecha_creacion", 
			"fecha_cese", 
			"tipo_usuario", 
			"estado", 
			"pregunta", 
			"respuesta" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_usuario", 
			"codi_usuario", 
			"usuario", 
			"clave", 
			"nombres", 
			"ape_paterno", 
			"ape_materno", 
			"email", 
			"fecha_creacion", 
			"fecha_cese", 
			"tipo_usuario", 
			"estado", 
			"pregunta", 
			"respuesta" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
