<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfRecapBbcc extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_recap_bbcc';
	

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
	protected $fillable = ["id_ficha","edifica","entrada","piso","unidad","porcentaje","atc","acc","aoic","nume_registro"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_ficha LIKE ?  OR 
				edifica LIKE ?  OR 
				entrada LIKE ?  OR 
				piso LIKE ?  OR 
				unidad LIKE ? 
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
			"edifica", 
			"entrada", 
			"piso", 
			"unidad", 
			"porcentaje", 
			"atc", 
			"acc", 
			"aoic", 
			"nume_registro" 
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
			"edifica", 
			"entrada", 
			"piso", 
			"unidad", 
			"porcentaje", 
			"atc", 
			"acc", 
			"aoic", 
			"nume_registro" 
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
			"edifica", 
			"entrada", 
			"piso", 
			"unidad", 
			"porcentaje", 
			"atc", 
			"acc", 
			"aoic", 
			"nume_registro" 
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
			"edifica", 
			"entrada", 
			"piso", 
			"unidad", 
			"porcentaje", 
			"atc", 
			"acc", 
			"aoic", 
			"nume_registro" 
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
			"edifica", 
			"entrada", 
			"piso", 
			"unidad", 
			"porcentaje", 
			"atc", 
			"acc", 
			"aoic", 
			"nume_registro" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
