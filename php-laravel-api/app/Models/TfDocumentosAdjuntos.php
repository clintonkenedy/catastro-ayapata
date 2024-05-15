<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfDocumentosAdjuntos extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_documentos_adjuntos';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_doc';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_doc","id_ficha","codi_doc","tipo_doc","nume_doc","area_autorizada","fecha_doc"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_doc LIKE ?  OR 
				id_ficha LIKE ?  OR 
				tipo_doc LIKE ?  OR 
				nume_doc LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%"
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
			"id_doc", 
			"id_ficha", 
			"codi_doc", 
			"tipo_doc", 
			"nume_doc", 
			"area_autorizada", 
			"fecha_doc" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_doc", 
			"id_ficha", 
			"codi_doc", 
			"tipo_doc", 
			"nume_doc", 
			"area_autorizada", 
			"fecha_doc" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_doc", 
			"id_ficha", 
			"codi_doc", 
			"tipo_doc", 
			"nume_doc", 
			"area_autorizada", 
			"fecha_doc" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_doc", 
			"id_ficha", 
			"codi_doc", 
			"tipo_doc", 
			"nume_doc", 
			"area_autorizada", 
			"fecha_doc" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_doc", 
			"id_ficha", 
			"codi_doc", 
			"tipo_doc", 
			"nume_doc", 
			"area_autorizada", 
			"fecha_doc" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
