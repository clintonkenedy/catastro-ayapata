<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfNotarias extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_notarias';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_notaria';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_notaria","codi_notaria","nomb_notaria","id_ubi_geo"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_notaria LIKE ?  OR 
				nomb_notaria LIKE ?  OR 
				id_ubi_geo LIKE ? 
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
			"id_notaria", 
			"codi_notaria", 
			"nomb_notaria", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_notaria", 
			"codi_notaria", 
			"nomb_notaria", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_notaria", 
			"codi_notaria", 
			"nomb_notaria", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_notaria", 
			"codi_notaria", 
			"nomb_notaria", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_notaria", 
			"codi_notaria", 
			"nomb_notaria", 
			"id_ubi_geo" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
