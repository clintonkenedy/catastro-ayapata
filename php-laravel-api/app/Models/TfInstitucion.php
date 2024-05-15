<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfInstitucion extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_institucion';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_institucion';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id_institucion","desc_institucion","dire_institucion","email","autoridad","cargo","fecha_registro","nume_ip","nomb_host"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_institucion LIKE ?  OR 
				desc_institucion LIKE ?  OR 
				dire_institucion LIKE ?  OR 
				email LIKE ?  OR 
				autoridad LIKE ?  OR 
				cargo LIKE ?  OR 
				nume_ip LIKE ?  OR 
				nomb_host LIKE ? 
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
			"id_institucion", 
			"desc_institucion", 
			"dire_institucion", 
			"email", 
			"autoridad", 
			"cargo", 
			"fecha_registro", 
			"nume_ip", 
			"nomb_host" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id_institucion", 
			"desc_institucion", 
			"dire_institucion", 
			"email", 
			"autoridad", 
			"cargo", 
			"fecha_registro", 
			"nume_ip", 
			"nomb_host" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id_institucion", 
			"desc_institucion", 
			"dire_institucion", 
			"email", 
			"autoridad", 
			"cargo", 
			"fecha_registro", 
			"nume_ip", 
			"nomb_host" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id_institucion", 
			"desc_institucion", 
			"dire_institucion", 
			"email", 
			"autoridad", 
			"cargo", 
			"fecha_registro", 
			"nume_ip", 
			"nomb_host" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_institucion", 
			"desc_institucion", 
			"dire_institucion", 
			"email", 
			"autoridad", 
			"cargo", 
			"fecha_registro", 
			"nume_ip", 
			"nomb_host" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
