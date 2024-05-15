<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfUniCat extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_uni_cat';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_uni_cat';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_uni_cat","id_lote","id_edificacion","codi_entrada","codi_piso","codi_unidad","tipo_interior","cuc","cuc_antecedente","codi_hoja_catastral","codi_pred_rentas","nume_interior","unid_acum_rentas","codi_cont_rentas"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_uni_cat LIKE ?  OR 
				id_lote LIKE ?  OR 
				id_edificacion LIKE ?  OR 
				codi_entrada LIKE ?  OR 
				codi_piso LIKE ?  OR 
				codi_unidad LIKE ?  OR 
				tipo_interior LIKE ?  OR 
				cuc LIKE ?  OR 
				cuc_antecedente LIKE ?  OR 
				codi_hoja_catastral LIKE ?  OR 
				codi_pred_rentas LIKE ?  OR 
				nume_interior LIKE ?  OR 
				unid_acum_rentas LIKE ?  OR 
				codi_cont_rentas LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"id_uni_cat", 
			"id_lote", 
			"id_edificacion", 
			"codi_entrada", 
			"codi_piso", 
			"codi_unidad", 
			"tipo_interior", 
			"cuc", 
			"cuc_antecedente", 
			"codi_hoja_catastral", 
			"codi_pred_rentas", 
			"nume_interior", 
			"unid_acum_rentas", 
			"codi_cont_rentas" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_uni_cat", 
			"id_lote", 
			"id_edificacion", 
			"codi_entrada", 
			"codi_piso", 
			"codi_unidad", 
			"tipo_interior", 
			"cuc", 
			"cuc_antecedente", 
			"codi_hoja_catastral", 
			"codi_pred_rentas", 
			"nume_interior", 
			"unid_acum_rentas", 
			"codi_cont_rentas" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_uni_cat", 
			"id_lote", 
			"id_edificacion", 
			"codi_entrada", 
			"codi_piso", 
			"codi_unidad", 
			"tipo_interior", 
			"cuc", 
			"cuc_antecedente", 
			"codi_hoja_catastral", 
			"codi_pred_rentas", 
			"nume_interior", 
			"unid_acum_rentas", 
			"codi_cont_rentas" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_uni_cat", 
			"id_lote", 
			"id_edificacion", 
			"codi_entrada", 
			"codi_piso", 
			"codi_unidad", 
			"tipo_interior", 
			"cuc", 
			"cuc_antecedente", 
			"codi_hoja_catastral", 
			"codi_pred_rentas", 
			"nume_interior", 
			"unid_acum_rentas", 
			"codi_cont_rentas" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_uni_cat", 
			"id_lote", 
			"id_edificacion", 
			"codi_entrada", 
			"codi_piso", 
			"codi_unidad", 
			"tipo_interior", 
			"cuc", 
			"cuc_antecedente", 
			"codi_hoja_catastral", 
			"codi_pred_rentas", 
			"nume_interior", 
			"unid_acum_rentas", 
			"codi_cont_rentas" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
