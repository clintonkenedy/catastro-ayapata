<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfUbigeos extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_ubigeos';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'codi_dep';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["codi_dep","codi_pro","codi_dis","descri"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				codi_dep LIKE ?  OR 
				codi_pro LIKE ?  OR 
				codi_dis LIKE ?  OR 
				descri LIKE ? 
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
			"codi_dep", 
			"codi_pro", 
			"codi_dis", 
			"descri" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"codi_dep", 
			"codi_pro", 
			"codi_dis", 
			"descri" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"codi_dep", 
			"codi_pro", 
			"codi_dis", 
			"descri" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"codi_dep", 
			"codi_pro", 
			"codi_dis", 
			"descri" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"codi_dep", 
			"codi_pro", 
			"codi_dis", 
			"descri" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
