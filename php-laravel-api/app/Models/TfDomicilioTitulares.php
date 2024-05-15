<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfDomicilioTitulares extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_domicilio_titulares';
	

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
	protected $fillable = ["id_ficha","id_persona","codi_via","tipo_via","nomb_via","nume_muni","nomb_edificacion","nume_interior","codi_hab_urba","nomb_hab_urba","sector","mzna","lote","sublote","codi_dep","codi_pro","codi_dis"];
	

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
				codi_via LIKE ?  OR 
				tipo_via LIKE ?  OR 
				nomb_via LIKE ?  OR 
				nume_muni LIKE ?  OR 
				nomb_edificacion LIKE ?  OR 
				nume_interior LIKE ?  OR 
				codi_hab_urba LIKE ?  OR 
				nomb_hab_urba LIKE ?  OR 
				sector LIKE ?  OR 
				mzna LIKE ?  OR 
				lote LIKE ?  OR 
				sublote LIKE ?  OR 
				codi_dep LIKE ?  OR 
				codi_pro LIKE ?  OR 
				codi_dis LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"codi_via", 
			"tipo_via", 
			"nomb_via", 
			"nume_muni", 
			"nomb_edificacion", 
			"nume_interior", 
			"codi_hab_urba", 
			"nomb_hab_urba", 
			"sector", 
			"mzna", 
			"lote", 
			"sublote", 
			"codi_dep", 
			"codi_pro", 
			"codi_dis" 
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
			"codi_via", 
			"tipo_via", 
			"nomb_via", 
			"nume_muni", 
			"nomb_edificacion", 
			"nume_interior", 
			"codi_hab_urba", 
			"nomb_hab_urba", 
			"sector", 
			"mzna", 
			"lote", 
			"sublote", 
			"codi_dep", 
			"codi_pro", 
			"codi_dis" 
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
			"codi_via", 
			"tipo_via", 
			"nomb_via", 
			"nume_muni", 
			"nomb_edificacion", 
			"nume_interior", 
			"codi_hab_urba", 
			"nomb_hab_urba", 
			"sector", 
			"mzna", 
			"lote", 
			"sublote", 
			"codi_dep", 
			"codi_pro", 
			"codi_dis" 
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
			"codi_via", 
			"tipo_via", 
			"nomb_via", 
			"nume_muni", 
			"nomb_edificacion", 
			"nume_interior", 
			"codi_hab_urba", 
			"nomb_hab_urba", 
			"sector", 
			"mzna", 
			"lote", 
			"sublote", 
			"codi_dep", 
			"codi_pro", 
			"codi_dis" 
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
			"codi_via", 
			"tipo_via", 
			"nomb_via", 
			"nume_muni", 
			"nomb_edificacion", 
			"nume_interior", 
			"codi_hab_urba", 
			"nomb_hab_urba", 
			"sector", 
			"mzna", 
			"lote", 
			"sublote", 
			"codi_dep", 
			"codi_pro", 
			"codi_dis" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
