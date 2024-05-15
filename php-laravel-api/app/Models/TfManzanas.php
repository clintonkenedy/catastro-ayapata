<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfManzanas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_manzanas';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_mzna';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_mzna","id_sector","codi_mzna","nume_mzna"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_mzna LIKE ?  OR 
				id_sector LIKE ?  OR 
				codi_mzna LIKE ?  OR 
				nume_mzna LIKE ? 
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
			"id_mzna", 
			"id_sector", 
			"codi_mzna", 
			"nume_mzna" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_mzna", 
			"id_sector", 
			"codi_mzna", 
			"nume_mzna" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_mzna", 
			"id_sector", 
			"codi_mzna", 
			"nume_mzna" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_mzna", 
			"id_sector", 
			"codi_mzna", 
			"nume_mzna" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_mzna", 
			"id_sector", 
			"codi_mzna", 
			"nume_mzna" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
