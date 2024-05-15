<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfVias extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_vias';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_via';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_via","nomb_via","tipo_via","codi_via","id_ubi_geo","fecha_via"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_via LIKE ?  OR 
				nomb_via LIKE ?  OR 
				tipo_via LIKE ?  OR 
				codi_via LIKE ?  OR 
				id_ubi_geo LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"id_via", 
			"nomb_via", 
			"tipo_via", 
			"codi_via", 
			"id_ubi_geo", 
			"fecha_via" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_via", 
			"nomb_via", 
			"tipo_via", 
			"codi_via", 
			"id_ubi_geo", 
			"fecha_via" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_via", 
			"nomb_via", 
			"tipo_via", 
			"codi_via", 
			"id_ubi_geo", 
			"fecha_via" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_via", 
			"nomb_via", 
			"tipo_via", 
			"codi_via", 
			"id_ubi_geo", 
			"fecha_via" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_via", 
			"nomb_via", 
			"tipo_via", 
			"codi_via", 
			"id_ubi_geo", 
			"fecha_via" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
