<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfCodigosInstalaciones extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_codigos_instalaciones';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'codi_instalacion';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["codi_instalacion","desc_instalacion","material","unidad"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				codi_instalacion LIKE ?  OR 
				desc_instalacion LIKE ?  OR 
				material LIKE ?  OR 
				unidad LIKE ? 
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
			"codi_instalacion", 
			"desc_instalacion", 
			"material", 
			"unidad" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"codi_instalacion", 
			"desc_instalacion", 
			"material", 
			"unidad" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"codi_instalacion", 
			"desc_instalacion", 
			"material", 
			"unidad" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"codi_instalacion", 
			"desc_instalacion", 
			"material", 
			"unidad" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"codi_instalacion", 
			"desc_instalacion", 
			"material", 
			"unidad" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
