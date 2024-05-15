<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfTablas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_tablas';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_tabla';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_tabla","desc_tabla","ultimo_codigo"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_tabla LIKE ?  OR 
				desc_tabla LIKE ?  OR 
				ultimo_codigo LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
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
			"id_tabla", 
			"desc_tabla", 
			"ultimo_codigo" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_tabla", 
			"desc_tabla", 
			"ultimo_codigo" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_tabla", 
			"desc_tabla", 
			"ultimo_codigo" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_tabla", 
			"desc_tabla", 
			"ultimo_codigo" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_tabla", 
			"desc_tabla", 
			"ultimo_codigo" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
