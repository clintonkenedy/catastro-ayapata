<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfSectores extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_sectores';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_sector';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_sector","id_ubi_geo","codi_sector","nomb_sector"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_sector LIKE ?  OR 
				id_ubi_geo LIKE ?  OR 
				codi_sector LIKE ?  OR 
				nomb_sector LIKE ? 
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
			"id_sector", 
			"id_ubi_geo", 
			"codi_sector", 
			"nomb_sector" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_sector", 
			"id_ubi_geo", 
			"codi_sector", 
			"nomb_sector" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_sector", 
			"id_ubi_geo", 
			"codi_sector", 
			"nomb_sector" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_sector", 
			"id_ubi_geo", 
			"codi_sector", 
			"nomb_sector" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_sector", 
			"id_ubi_geo", 
			"codi_sector", 
			"nomb_sector" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
