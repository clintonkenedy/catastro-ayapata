<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfFichas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_fichas';
	

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
	protected $fillable = ["id_ficha","tipo_ficha","nume_ficha","id_lote","dc","nume_ficha_lote","declarante","fecha_declarante","supervisor","fecha_supervision","tecnico","fecha_levantamiento","verificador","fecha_verificacion","nume_registro","id_uni_cat","id_usuario","fecha_grabado","activo"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_ficha LIKE ?  OR 
				tipo_ficha LIKE ?  OR 
				nume_ficha LIKE ?  OR 
				id_lote LIKE ?  OR 
				dc LIKE ?  OR 
				nume_ficha_lote LIKE ?  OR 
				declarante LIKE ?  OR 
				supervisor LIKE ?  OR 
				tecnico LIKE ?  OR 
				verificador LIKE ?  OR 
				nume_registro LIKE ?  OR 
				id_uni_cat LIKE ?  OR 
				id_usuario LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"tipo_ficha", 
			"nume_ficha", 
			"id_lote", 
			"dc", 
			"nume_ficha_lote", 
			"declarante", 
			"fecha_declarante", 
			"supervisor", 
			"fecha_supervision", 
			"tecnico", 
			"fecha_levantamiento", 
			"verificador", 
			"fecha_verificacion", 
			"nume_registro", 
			"id_uni_cat", 
			"id_usuario", 
			"fecha_grabado", 
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
			"id_ficha", 
			"tipo_ficha", 
			"nume_ficha", 
			"id_lote", 
			"dc", 
			"nume_ficha_lote", 
			"declarante", 
			"fecha_declarante", 
			"supervisor", 
			"fecha_supervision", 
			"tecnico", 
			"fecha_levantamiento", 
			"verificador", 
			"fecha_verificacion", 
			"nume_registro", 
			"id_uni_cat", 
			"id_usuario", 
			"fecha_grabado", 
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
			"id_ficha", 
			"tipo_ficha", 
			"nume_ficha", 
			"id_lote", 
			"dc", 
			"nume_ficha_lote", 
			"declarante", 
			"fecha_declarante", 
			"supervisor", 
			"fecha_supervision", 
			"tecnico", 
			"fecha_levantamiento", 
			"verificador", 
			"fecha_verificacion", 
			"nume_registro", 
			"id_uni_cat", 
			"id_usuario", 
			"fecha_grabado", 
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
			"id_ficha", 
			"tipo_ficha", 
			"nume_ficha", 
			"id_lote", 
			"dc", 
			"nume_ficha_lote", 
			"declarante", 
			"fecha_declarante", 
			"supervisor", 
			"fecha_supervision", 
			"tecnico", 
			"fecha_levantamiento", 
			"verificador", 
			"fecha_verificacion", 
			"nume_registro", 
			"id_uni_cat", 
			"id_usuario", 
			"fecha_grabado", 
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
			"id_ficha", 
			"tipo_ficha", 
			"nume_ficha", 
			"id_lote", 
			"dc", 
			"nume_ficha_lote", 
			"declarante", 
			"fecha_declarante", 
			"supervisor", 
			"fecha_supervision", 
			"tecnico", 
			"fecha_levantamiento", 
			"verificador", 
			"fecha_verificacion", 
			"nume_registro", 
			"id_uni_cat", 
			"id_usuario", 
			"fecha_grabado", 
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
