<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfRecapEdificio extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_recap_edificio';
	

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
	protected $fillable = ["id_ficha","edificio","total_porcentaje","total_atc","total_acc","total_aoic","id_recap"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_ficha LIKE ?  OR 
				edificio LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%"
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
			"edificio", 
			"total_porcentaje", 
			"total_atc", 
			"total_acc", 
			"total_aoic", 
			"id_recap" 
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
			"edificio", 
			"total_porcentaje", 
			"total_atc", 
			"total_acc", 
			"total_aoic", 
			"id_recap" 
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
			"edificio", 
			"total_porcentaje", 
			"total_atc", 
			"total_acc", 
			"total_aoic", 
			"id_recap" 
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
			"edificio", 
			"total_porcentaje", 
			"total_atc", 
			"total_acc", 
			"total_aoic", 
			"id_recap" 
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
			"edificio", 
			"total_porcentaje", 
			"total_atc", 
			"total_acc", 
			"total_aoic", 
			"id_recap" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
