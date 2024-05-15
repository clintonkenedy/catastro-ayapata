<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfPuertas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_puertas';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_puerta';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_puerta","id_lote","codi_puerta","tipo_puerta","nume_muni","cond_nume","id_via","nume_certificacion"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_puerta LIKE ?  OR 
				id_lote LIKE ?  OR 
				codi_puerta LIKE ?  OR 
				tipo_puerta LIKE ?  OR 
				nume_muni LIKE ?  OR 
				cond_nume LIKE ?  OR 
				id_via LIKE ?  OR 
				nume_certificacion LIKE ? 
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
			"id_puerta", 
			"id_lote", 
			"codi_puerta", 
			"tipo_puerta", 
			"nume_muni", 
			"cond_nume", 
			"id_via", 
			"nume_certificacion" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_puerta", 
			"id_lote", 
			"codi_puerta", 
			"tipo_puerta", 
			"nume_muni", 
			"cond_nume", 
			"id_via", 
			"nume_certificacion" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_puerta", 
			"id_lote", 
			"codi_puerta", 
			"tipo_puerta", 
			"nume_muni", 
			"cond_nume", 
			"id_via", 
			"nume_certificacion" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_puerta", 
			"id_lote", 
			"codi_puerta", 
			"tipo_puerta", 
			"nume_muni", 
			"cond_nume", 
			"id_via", 
			"nume_certificacion" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_puerta", 
			"id_lote", 
			"codi_puerta", 
			"tipo_puerta", 
			"nume_muni", 
			"cond_nume", 
			"id_via", 
			"nume_certificacion" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
