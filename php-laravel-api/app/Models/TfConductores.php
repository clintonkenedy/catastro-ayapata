<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfConductores extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_conductores';
	

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
	protected $fillable = ["id_ficha","id_persona","fax","telefono","anexo","email","cond_conductor","nume_ruc"];
	

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
				fax LIKE ?  OR 
				telefono LIKE ?  OR 
				anexo LIKE ?  OR 
				email LIKE ?  OR 
				cond_conductor LIKE ?  OR 
				nume_ruc LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"fax", 
			"telefono", 
			"anexo", 
			"email", 
			"cond_conductor", 
			"nume_ruc" 
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
			"fax", 
			"telefono", 
			"anexo", 
			"email", 
			"cond_conductor", 
			"nume_ruc" 
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
			"fax", 
			"telefono", 
			"anexo", 
			"email", 
			"cond_conductor", 
			"nume_ruc" 
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
			"fax", 
			"telefono", 
			"anexo", 
			"email", 
			"cond_conductor", 
			"nume_ruc" 
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
			"fax", 
			"telefono", 
			"anexo", 
			"email", 
			"cond_conductor", 
			"nume_ruc" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
