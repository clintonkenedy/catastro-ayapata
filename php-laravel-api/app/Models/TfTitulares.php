<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfTitulares extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_titulares';
	

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
	protected $fillable = ["id_ficha","id_persona","form_adquisicion","fecha_adquisicion","porc_cotitular","esta_civil","fax","telf","anexo","email","nume_titular","codi_contribuyente","cond_titular"];
	

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
				form_adquisicion LIKE ?  OR 
				esta_civil LIKE ?  OR 
				fax LIKE ?  OR 
				telf LIKE ?  OR 
				anexo LIKE ?  OR 
				email LIKE ?  OR 
				nume_titular LIKE ?  OR 
				codi_contribuyente LIKE ?  OR 
				cond_titular LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"form_adquisicion", 
			"fecha_adquisicion", 
			"porc_cotitular", 
			"esta_civil", 
			"fax", 
			"telf", 
			"anexo", 
			"email", 
			"nume_titular", 
			"codi_contribuyente", 
			"cond_titular" 
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
			"form_adquisicion", 
			"fecha_adquisicion", 
			"porc_cotitular", 
			"esta_civil", 
			"fax", 
			"telf", 
			"anexo", 
			"email", 
			"nume_titular", 
			"codi_contribuyente", 
			"cond_titular" 
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
			"form_adquisicion", 
			"fecha_adquisicion", 
			"porc_cotitular", 
			"esta_civil", 
			"fax", 
			"telf", 
			"anexo", 
			"email", 
			"nume_titular", 
			"codi_contribuyente", 
			"cond_titular" 
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
			"form_adquisicion", 
			"fecha_adquisicion", 
			"porc_cotitular", 
			"esta_civil", 
			"fax", 
			"telf", 
			"anexo", 
			"email", 
			"nume_titular", 
			"codi_contribuyente", 
			"cond_titular" 
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
			"form_adquisicion", 
			"fecha_adquisicion", 
			"porc_cotitular", 
			"esta_civil", 
			"fax", 
			"telf", 
			"anexo", 
			"email", 
			"nume_titular", 
			"codi_contribuyente", 
			"cond_titular" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
