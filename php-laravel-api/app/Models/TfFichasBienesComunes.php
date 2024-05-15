<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfFichasBienesComunes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_fichas_bienes_comunes';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_ficha';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_ficha","cont_en","clasificacion","area_titulo","area_declarada","area_verificada","en_colindante","en_jardin_aislamiento","en_area_publica","en_area_intangible","cond_declarante","esta_llenado","mantenimiento","observaciones","codi_uso","nume_ficha"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_ficha LIKE ?  OR 
				cont_en LIKE ?  OR 
				clasificacion LIKE ?  OR 
				cond_declarante LIKE ?  OR 
				esta_llenado LIKE ?  OR 
				mantenimiento LIKE ?  OR 
				observaciones LIKE ?  OR 
				codi_uso LIKE ?  OR 
				nume_ficha LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"id_ficha", 
			"cont_en", 
			"clasificacion", 
			"area_titulo", 
			"area_declarada", 
			"area_verificada", 
			"en_colindante", 
			"en_jardin_aislamiento", 
			"en_area_publica", 
			"en_area_intangible", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"observaciones", 
			"codi_uso", 
			"nume_ficha" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_ficha", 
			"cont_en", 
			"clasificacion", 
			"area_titulo", 
			"area_declarada", 
			"area_verificada", 
			"en_colindante", 
			"en_jardin_aislamiento", 
			"en_area_publica", 
			"en_area_intangible", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"observaciones", 
			"codi_uso", 
			"nume_ficha" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_ficha", 
			"cont_en", 
			"clasificacion", 
			"area_titulo", 
			"area_declarada", 
			"area_verificada", 
			"en_colindante", 
			"en_jardin_aislamiento", 
			"en_area_publica", 
			"en_area_intangible", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"observaciones", 
			"codi_uso", 
			"nume_ficha" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_ficha", 
			"cont_en", 
			"clasificacion", 
			"area_titulo", 
			"area_declarada", 
			"area_verificada", 
			"en_colindante", 
			"en_jardin_aislamiento", 
			"en_area_publica", 
			"en_area_intangible", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"observaciones", 
			"codi_uso", 
			"nume_ficha" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_ficha", 
			"cont_en", 
			"clasificacion", 
			"area_titulo", 
			"area_declarada", 
			"area_verificada", 
			"en_colindante", 
			"en_jardin_aislamiento", 
			"en_area_publica", 
			"en_area_intangible", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"observaciones", 
			"codi_uso", 
			"nume_ficha" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
