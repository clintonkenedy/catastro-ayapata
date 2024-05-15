<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class TfLinderos extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tf_linderos';
	

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
	protected $fillable = ["id_ficha","fren_campo","fren_titulo","fren_colinda_campo","fren_colinda_titulo","dere_campo","dere_titulo","dere_colinda_campo","dere_colinda_titulo","izqu_campo","izqu_titulo","izqu_colinda_campo","izqu_colinda_titulo","fond_titulo","fond_campo","fond_colinda_campo","fond_colinda_titulo"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id_ficha LIKE ?  OR 
				fren_campo LIKE ?  OR 
				fren_titulo LIKE ?  OR 
				fren_colinda_campo LIKE ?  OR 
				fren_colinda_titulo LIKE ?  OR 
				dere_campo LIKE ?  OR 
				dere_titulo LIKE ?  OR 
				dere_colinda_campo LIKE ?  OR 
				dere_colinda_titulo LIKE ?  OR 
				izqu_campo LIKE ?  OR 
				izqu_titulo LIKE ?  OR 
				izqu_colinda_campo LIKE ?  OR 
				izqu_colinda_titulo LIKE ?  OR 
				fond_titulo LIKE ?  OR 
				fond_campo LIKE ?  OR 
				fond_colinda_campo LIKE ?  OR 
				fond_colinda_titulo LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"fren_campo", 
			"fren_titulo", 
			"fren_colinda_campo", 
			"fren_colinda_titulo", 
			"dere_campo", 
			"dere_titulo", 
			"dere_colinda_campo", 
			"dere_colinda_titulo", 
			"izqu_campo", 
			"izqu_titulo", 
			"izqu_colinda_campo", 
			"izqu_colinda_titulo", 
			"fond_titulo", 
			"fond_campo", 
			"fond_colinda_campo", 
			"fond_colinda_titulo" 
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
			"fren_campo", 
			"fren_titulo", 
			"fren_colinda_campo", 
			"fren_colinda_titulo", 
			"dere_campo", 
			"dere_titulo", 
			"dere_colinda_campo", 
			"dere_colinda_titulo", 
			"izqu_campo", 
			"izqu_titulo", 
			"izqu_colinda_campo", 
			"izqu_colinda_titulo", 
			"fond_titulo", 
			"fond_campo", 
			"fond_colinda_campo", 
			"fond_colinda_titulo" 
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
			"fren_campo", 
			"fren_titulo", 
			"fren_colinda_campo", 
			"fren_colinda_titulo", 
			"dere_campo", 
			"dere_titulo", 
			"dere_colinda_campo", 
			"dere_colinda_titulo", 
			"izqu_campo", 
			"izqu_titulo", 
			"izqu_colinda_campo", 
			"izqu_colinda_titulo", 
			"fond_titulo", 
			"fond_campo", 
			"fond_colinda_campo", 
			"fond_colinda_titulo" 
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
			"fren_campo", 
			"fren_titulo", 
			"fren_colinda_campo", 
			"fren_colinda_titulo", 
			"dere_campo", 
			"dere_titulo", 
			"dere_colinda_campo", 
			"dere_colinda_titulo", 
			"izqu_campo", 
			"izqu_titulo", 
			"izqu_colinda_campo", 
			"izqu_colinda_titulo", 
			"fond_titulo", 
			"fond_campo", 
			"fond_colinda_campo", 
			"fond_colinda_titulo" 
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
			"fren_campo", 
			"fren_titulo", 
			"fren_colinda_campo", 
			"fren_colinda_titulo", 
			"dere_campo", 
			"dere_titulo", 
			"dere_colinda_campo", 
			"dere_colinda_titulo", 
			"izqu_campo", 
			"izqu_titulo", 
			"izqu_colinda_campo", 
			"izqu_colinda_titulo", 
			"fond_titulo", 
			"fond_campo", 
			"fond_colinda_campo", 
			"fond_colinda_titulo" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
