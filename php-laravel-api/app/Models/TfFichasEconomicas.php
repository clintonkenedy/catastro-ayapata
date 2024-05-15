<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfFichasEconomicas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_fichas_economicas';
	

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
	protected $fillable = ["id_ficha","nomb_comercial","pred_area_autor","viap_area_autor","viap_area_verif","bc_area_autor","bc_area_verif","nume_expediente","nume_licencia","fecha_expedicion","fecha_vencimiento","inic_actividad","cond_declarante","esta_llenado","mantenimiento","docu_presentado","pred_area_verif","observaciones","nume_ficha"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_ficha LIKE ?  OR 
				nomb_comercial LIKE ?  OR 
				nume_expediente LIKE ?  OR 
				nume_licencia LIKE ?  OR 
				cond_declarante LIKE ?  OR 
				esta_llenado LIKE ?  OR 
				mantenimiento LIKE ?  OR 
				docu_presentado LIKE ?  OR 
				observaciones LIKE ?  OR 
				nume_ficha LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"nomb_comercial", 
			"pred_area_autor", 
			"viap_area_autor", 
			"viap_area_verif", 
			"bc_area_autor", 
			"bc_area_verif", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento", 
			"inic_actividad", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"docu_presentado", 
			"pred_area_verif", 
			"observaciones", 
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
			"nomb_comercial", 
			"pred_area_autor", 
			"viap_area_autor", 
			"viap_area_verif", 
			"bc_area_autor", 
			"bc_area_verif", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento", 
			"inic_actividad", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"docu_presentado", 
			"pred_area_verif", 
			"observaciones", 
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
			"nomb_comercial", 
			"pred_area_autor", 
			"viap_area_autor", 
			"viap_area_verif", 
			"bc_area_autor", 
			"bc_area_verif", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento", 
			"inic_actividad", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"docu_presentado", 
			"pred_area_verif", 
			"observaciones", 
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
			"nomb_comercial", 
			"pred_area_autor", 
			"viap_area_autor", 
			"viap_area_verif", 
			"bc_area_autor", 
			"bc_area_verif", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento", 
			"inic_actividad", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"docu_presentado", 
			"pred_area_verif", 
			"observaciones", 
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
			"nomb_comercial", 
			"pred_area_autor", 
			"viap_area_autor", 
			"viap_area_verif", 
			"bc_area_autor", 
			"bc_area_verif", 
			"nume_expediente", 
			"nume_licencia", 
			"fecha_expedicion", 
			"fecha_vencimiento", 
			"inic_actividad", 
			"cond_declarante", 
			"esta_llenado", 
			"mantenimiento", 
			"docu_presentado", 
			"pred_area_verif", 
			"observaciones", 
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
