<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfSunarp extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_sunarp';
	

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
	protected $fillable = ["id_ficha","tipo_partida","nume_partida","fojas","asiento","fech_inscripcion","codi_decla_fabrica","asie_fabrica","fecha_fabrica"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_ficha LIKE ?  OR 
				tipo_partida LIKE ?  OR 
				nume_partida LIKE ?  OR 
				fojas LIKE ?  OR 
				asiento LIKE ?  OR 
				codi_decla_fabrica LIKE ?  OR 
				asie_fabrica LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"tipo_partida", 
			"nume_partida", 
			"fojas", 
			"asiento", 
			"fech_inscripcion", 
			"codi_decla_fabrica", 
			"asie_fabrica", 
			"fecha_fabrica" 
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
			"tipo_partida", 
			"nume_partida", 
			"fojas", 
			"asiento", 
			"fech_inscripcion", 
			"codi_decla_fabrica", 
			"asie_fabrica", 
			"fecha_fabrica" 
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
			"tipo_partida", 
			"nume_partida", 
			"fojas", 
			"asiento", 
			"fech_inscripcion", 
			"codi_decla_fabrica", 
			"asie_fabrica", 
			"fecha_fabrica" 
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
			"tipo_partida", 
			"nume_partida", 
			"fojas", 
			"asiento", 
			"fech_inscripcion", 
			"codi_decla_fabrica", 
			"asie_fabrica", 
			"fecha_fabrica" 
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
			"tipo_partida", 
			"nume_partida", 
			"fojas", 
			"asiento", 
			"fech_inscripcion", 
			"codi_decla_fabrica", 
			"asie_fabrica", 
			"fecha_fabrica" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
