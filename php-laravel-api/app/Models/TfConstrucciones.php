<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfConstrucciones extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_construcciones';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_construccion';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_construccion","id_ficha","codi_construccion","nume_piso","fecha","mep","ecs","ecc","estr_muro_col","estr_techo","acab_piso","acab_puerta_ven","acab_revest","acab_bano","inst_elect_sanita","area_declarada","area_verificada","uca"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_construccion LIKE ?  OR 
				id_ficha LIKE ?  OR 
				nume_piso LIKE ?  OR 
				mep LIKE ?  OR 
				ecs LIKE ?  OR 
				ecc LIKE ?  OR 
				estr_muro_col LIKE ?  OR 
				estr_techo LIKE ?  OR 
				acab_piso LIKE ?  OR 
				acab_puerta_ven LIKE ?  OR 
				acab_revest LIKE ?  OR 
				acab_bano LIKE ?  OR 
				inst_elect_sanita LIKE ?  OR 
				uca LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"id_construccion", 
			"id_ficha", 
			"codi_construccion", 
			"nume_piso", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"estr_muro_col", 
			"estr_techo", 
			"acab_piso", 
			"acab_puerta_ven", 
			"acab_revest", 
			"acab_bano", 
			"inst_elect_sanita", 
			"area_declarada", 
			"area_verificada", 
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
			"id_construccion", 
			"id_ficha", 
			"codi_construccion", 
			"nume_piso", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"estr_muro_col", 
			"estr_techo", 
			"acab_piso", 
			"acab_puerta_ven", 
			"acab_revest", 
			"acab_bano", 
			"inst_elect_sanita", 
			"area_declarada", 
			"area_verificada", 
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
			"id_construccion", 
			"id_ficha", 
			"codi_construccion", 
			"nume_piso", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"estr_muro_col", 
			"estr_techo", 
			"acab_piso", 
			"acab_puerta_ven", 
			"acab_revest", 
			"acab_bano", 
			"inst_elect_sanita", 
			"area_declarada", 
			"area_verificada", 
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
			"id_construccion", 
			"id_ficha", 
			"codi_construccion", 
			"nume_piso", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"estr_muro_col", 
			"estr_techo", 
			"acab_piso", 
			"acab_puerta_ven", 
			"acab_revest", 
			"acab_bano", 
			"inst_elect_sanita", 
			"area_declarada", 
			"area_verificada", 
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
			"id_construccion", 
			"id_ficha", 
			"codi_construccion", 
			"nume_piso", 
			"fecha", 
			"mep", 
			"ecs", 
			"ecc", 
			"estr_muro_col", 
			"estr_techo", 
			"acab_piso", 
			"acab_puerta_ven", 
			"acab_revest", 
			"acab_bano", 
			"inst_elect_sanita", 
			"area_declarada", 
			"area_verificada", 
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
