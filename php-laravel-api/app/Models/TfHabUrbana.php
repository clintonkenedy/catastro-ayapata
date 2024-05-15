<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfHabUrbana extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_hab_urbana';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_hab_urba';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_hab_urba","grup_urba","tipo_hab_urba","nomb_hab_urba","codi_hab_urba","id_ubi_geo"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_hab_urba LIKE ?  OR 
				grup_urba LIKE ?  OR 
				tipo_hab_urba LIKE ?  OR 
				nomb_hab_urba LIKE ?  OR 
				codi_hab_urba LIKE ?  OR 
				id_ubi_geo LIKE ? 
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
			"id_hab_urba", 
			"grup_urba", 
			"tipo_hab_urba", 
			"nomb_hab_urba", 
			"codi_hab_urba", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_hab_urba", 
			"grup_urba", 
			"tipo_hab_urba", 
			"nomb_hab_urba", 
			"codi_hab_urba", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_hab_urba", 
			"grup_urba", 
			"tipo_hab_urba", 
			"nomb_hab_urba", 
			"codi_hab_urba", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_hab_urba", 
			"grup_urba", 
			"tipo_hab_urba", 
			"nomb_hab_urba", 
			"codi_hab_urba", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_hab_urba", 
			"grup_urba", 
			"tipo_hab_urba", 
			"nomb_hab_urba", 
			"codi_hab_urba", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
