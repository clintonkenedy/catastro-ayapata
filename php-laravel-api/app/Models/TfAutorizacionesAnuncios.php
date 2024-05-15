<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfAutorizacionesAnuncios extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_autorizaciones_anuncios';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_anuncio';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_anuncio","id_ficha","codi_anuncio","codi_autoriza","nume_lados","area_autorizada","area_verificada","nume_expediente","nume_licencia","fecha_expedicion","fecha_vencimiento"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_anuncio LIKE ?  OR 
				id_ficha LIKE ?  OR 
				codi_anuncio LIKE ?  OR 
				nume_expediente LIKE ?  OR 
				nume_licencia LIKE ? 
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
			"id_anuncio", 
			"id_ficha", 
			"codi_anuncio", 
			"codi_autoriza", 
			"nume_lados", 
			"area_autorizada", 
			"area_verificada", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_anuncio", 
			"id_ficha", 
			"codi_anuncio", 
			"codi_autoriza", 
			"nume_lados", 
			"area_autorizada", 
			"area_verificada", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_anuncio", 
			"id_ficha", 
			"codi_anuncio", 
			"codi_autoriza", 
			"nume_lados", 
			"area_autorizada", 
			"area_verificada", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_anuncio", 
			"id_ficha", 
			"codi_anuncio", 
			"codi_autoriza", 
			"nume_lados", 
			"area_autorizada", 
			"area_verificada", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_anuncio", 
			"id_ficha", 
			"codi_anuncio", 
			"codi_autoriza", 
			"nume_lados", 
			"area_autorizada", 
			"area_verificada", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
