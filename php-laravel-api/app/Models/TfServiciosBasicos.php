<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfServiciosBasicos extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_servicios_basicos';
	

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
	protected $fillable = ["id_ficha","luz","agua","telefono","desague","nume_sum_luz","nume_telefono","nume_contrato_agua"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_ficha LIKE ?  OR 
				nume_sum_luz LIKE ?  OR 
				nume_telefono LIKE ?  OR 
				nume_contrato_agua LIKE ? 
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
			"id_ficha", 
			"luz", 
			"agua", 
			"telefono", 
			"desague", 
			"nume_sum_luz", 
			"nume_telefono", 
			"nume_contrato_agua" 
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
			"luz", 
			"agua", 
			"telefono", 
			"desague", 
			"nume_sum_luz", 
			"nume_telefono", 
			"nume_contrato_agua" 
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
			"luz", 
			"agua", 
			"telefono", 
			"desague", 
			"nume_sum_luz", 
			"nume_telefono", 
			"nume_contrato_agua" 
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
			"luz", 
			"agua", 
			"telefono", 
			"desague", 
			"nume_sum_luz", 
			"nume_telefono", 
			"nume_contrato_agua" 
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
			"luz", 
			"agua", 
			"telefono", 
			"desague", 
			"nume_sum_luz", 
			"nume_telefono", 
			"nume_contrato_agua" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
