<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfLotes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_lotes';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_lote';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_lote","id_mzna","codi_lote","id_hab_urba","mzna_dist","lote_dist","sub_lote_dist","estructuracion","zonificacion","cuc","zona_dist"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_lote LIKE ?  OR 
				id_mzna LIKE ?  OR 
				codi_lote LIKE ?  OR 
				id_hab_urba LIKE ?  OR 
				mzna_dist LIKE ?  OR 
				lote_dist LIKE ?  OR 
				sub_lote_dist LIKE ?  OR 
				estructuracion LIKE ?  OR 
				zonificacion LIKE ?  OR 
				cuc LIKE ?  OR 
				zona_dist LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"id_lote", 
			"id_mzna", 
			"codi_lote", 
			"id_hab_urba", 
			"mzna_dist", 
			"lote_dist", 
			"sub_lote_dist", 
			"estructuracion", 
			"zonificacion", 
			"cuc", 
			"zona_dist" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_lote", 
			"id_mzna", 
			"codi_lote", 
			"id_hab_urba", 
			"mzna_dist", 
			"lote_dist", 
			"sub_lote_dist", 
			"estructuracion", 
			"zonificacion", 
			"cuc", 
			"zona_dist" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_lote", 
			"id_mzna", 
			"codi_lote", 
			"id_hab_urba", 
			"mzna_dist", 
			"lote_dist", 
			"sub_lote_dist", 
			"estructuracion", 
			"zonificacion", 
			"cuc", 
			"zona_dist" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_lote", 
			"id_mzna", 
			"codi_lote", 
			"id_hab_urba", 
			"mzna_dist", 
			"lote_dist", 
			"sub_lote_dist", 
			"estructuracion", 
			"zonificacion", 
			"cuc", 
			"zona_dist" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_lote", 
			"id_mzna", 
			"codi_lote", 
			"id_hab_urba", 
			"mzna_dist", 
			"lote_dist", 
			"sub_lote_dist", 
			"estructuracion", 
			"zonificacion", 
			"cuc", 
			"zona_dist" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
