<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfHistoriaVia extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_historia_via';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_historia_via';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_historia_via","nomb_via_ant","fecha_via","id_via","activo"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				CAST(id_historia_via AS TEXT) LIKE ?  OR 
				nomb_via_ant LIKE ?  OR 
				id_via LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
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
			"id_historia_via", 
			"nomb_via_ant", 
			"fecha_via", 
			"id_via", 
			"activo" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_historia_via", 
			"nomb_via_ant", 
			"fecha_via", 
			"id_via", 
			"activo" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_historia_via", 
			"nomb_via_ant", 
			"fecha_via", 
			"id_via", 
			"activo" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_historia_via", 
			"nomb_via_ant", 
			"fecha_via", 
			"id_via", 
			"activo" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_historia_via", 
			"nomb_via_ant", 
			"fecha_via", 
			"id_via", 
			"activo" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
