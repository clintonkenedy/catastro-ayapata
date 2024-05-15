<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfExoneracionesTitular extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_exoneraciones_titular';
	

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
	protected $fillable = ["id_ficha","id_persona","condicion","nume_resolucion","nume_boleta_pension","fecha_inicio","fecha_vencimiento"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_ficha LIKE ?  OR 
				id_persona LIKE ?  OR 
				condicion LIKE ?  OR 
				nume_resolucion LIKE ?  OR 
				nume_boleta_pension LIKE ? 
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
			"id_ficha", 
			"id_persona", 
			"condicion", 
			"nume_resolucion", 
			"nume_boleta_pension", 
			"fecha_inicio", 
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
			"id_ficha", 
			"id_persona", 
			"condicion", 
			"nume_resolucion", 
			"nume_boleta_pension", 
			"fecha_inicio", 
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
			"id_ficha", 
			"id_persona", 
			"condicion", 
			"nume_resolucion", 
			"nume_boleta_pension", 
			"fecha_inicio", 
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
			"id_ficha", 
			"id_persona", 
			"condicion", 
			"nume_resolucion", 
			"nume_boleta_pension", 
			"fecha_inicio", 
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
			"id_ficha", 
			"id_persona", 
			"condicion", 
			"nume_resolucion", 
			"nume_boleta_pension", 
			"fecha_inicio", 
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
