<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfEdificaciones extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_edificaciones';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_edificacion';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_edificacion","id_lote","codi_edificacion","tipo_edificacion","nomb_edificacion","clasificacion"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_edificacion LIKE ?  OR 
				id_lote LIKE ?  OR 
				codi_edificacion LIKE ?  OR 
				tipo_edificacion LIKE ?  OR 
				nomb_edificacion LIKE ?  OR 
				clasificacion LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"id_edificacion", 
			"id_lote", 
			"codi_edificacion", 
			"tipo_edificacion", 
			"nomb_edificacion", 
			"clasificacion" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_edificacion", 
			"id_lote", 
			"codi_edificacion", 
			"tipo_edificacion", 
			"nomb_edificacion", 
			"clasificacion" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_edificacion", 
			"id_lote", 
			"codi_edificacion", 
			"tipo_edificacion", 
			"nomb_edificacion", 
			"clasificacion" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_edificacion", 
			"id_lote", 
			"codi_edificacion", 
			"tipo_edificacion", 
			"nomb_edificacion", 
			"clasificacion" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_edificacion", 
			"id_lote", 
			"codi_edificacion", 
			"tipo_edificacion", 
			"nomb_edificacion", 
			"clasificacion" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
