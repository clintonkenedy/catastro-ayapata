<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfInstalaciones extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_instalaciones';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_instalacion';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_instalacion","id_ficha","codi_instalacion","codi_obra","fecha","mep","ecs","ecc","dime_largo","dime_ancho","dime_alto","prod_total","uni_med","uca"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_instalacion LIKE ?  OR 
				id_ficha LIKE ?  OR 
				codi_instalacion LIKE ?  OR 
				mep LIKE ?  OR 
				ecs LIKE ?  OR 
				ecc LIKE ?  OR 
				uni_med LIKE ?  OR 
				uca LIKE ? 
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
			"id_instalacion", 
			"id_ficha", 
			"codi_instalacion", 
			"codi_obra", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"dime_largo", 
			"dime_ancho", 
			"dime_alto", 
			"prod_total", 
			"uni_med", 
			"uca" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_instalacion", 
			"id_ficha", 
			"codi_instalacion", 
			"codi_obra", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"dime_largo", 
			"dime_ancho", 
			"dime_alto", 
			"prod_total", 
			"uni_med", 
			"uca" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_instalacion", 
			"id_ficha", 
			"codi_instalacion", 
			"codi_obra", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"dime_largo", 
			"dime_ancho", 
			"dime_alto", 
			"prod_total", 
			"uni_med", 
			"uca" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_instalacion", 
			"id_ficha", 
			"codi_instalacion", 
			"codi_obra", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"dime_largo", 
			"dime_ancho", 
			"dime_alto", 
			"prod_total", 
			"uni_med", 
			"uca" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_instalacion", 
			"id_ficha", 
			"codi_instalacion", 
			"codi_obra", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"dime_largo", 
			"dime_ancho", 
			"dime_alto", 
			"prod_total", 
			"uni_med", 
			"uca" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
