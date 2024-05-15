<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Components Data Contoller
 * Use for getting values from the database for page components
 * Support raw query builder
 * @category Controller
 */
class Components_dataController extends Controller{
	
	/**
     * id_ficha_option_list Model Action
     * @return array
     */
	function id_ficha_option_list(Request $request){
		$sqltext = "SELECT id_ficha as value, id_ficha as label FROM tf_fichas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * codi_actividad_option_list Model Action
     * @return array
     */
	function codi_actividad_option_list(Request $request){
		$sqltext = "SELECT codi_actividad as value, codi_actividad as label FROM tf_actividades";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_persona_option_list Model Action
     * @return array
     */
	function id_persona_option_list(Request $request){
		$sqltext = "SELECT id_persona as value, id_persona as label FROM tf_personas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_lote_option_list Model Action
     * @return array
     */
	function id_lote_option_list(Request $request){
		$sqltext = "SELECT id_lote as value, id_lote as label FROM tf_lotes";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_ficha_option_list_2 Model Action
     * @return array
     */
	function id_ficha_option_list_2(Request $request){
		$sqltext = "SELECT id_ficha as value, id_ficha as label FROM tf_titulares";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_uni_cat_option_list Model Action
     * @return array
     */
	function id_uni_cat_option_list(Request $request){
		$sqltext = "SELECT id_uni_cat as value, id_uni_cat as label FROM tf_uni_cat";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_usuario_option_list Model Action
     * @return array
     */
	function id_usuario_option_list(Request $request){
		$sqltext = "SELECT id_usuario as value, id_usuario as label FROM tf_usuarios";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * codi_uso_option_list Model Action
     * @return array
     */
	function codi_uso_option_list(Request $request){
		$sqltext = "SELECT codi_uso as value, codi_uso as label FROM tf_usos_bc";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * codi_uso_option_list_2 Model Action
     * @return array
     */
	function codi_uso_option_list_2(Request $request){
		$sqltext = "SELECT codi_uso as value, codi_uso as label FROM tf_usos";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_ubi_geo_option_list Model Action
     * @return array
     */
	function id_ubi_geo_option_list(Request $request){
		$sqltext = "SELECT id_ubi_geo as value, id_ubi_geo as label FROM tf_ubigeo";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_via_option_list Model Action
     * @return array
     */
	function id_via_option_list(Request $request){
		$sqltext = "SELECT id_via as value, id_via as label FROM tf_vias";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_puerta_option_list Model Action
     * @return array
     */
	function id_puerta_option_list(Request $request){
		$sqltext = "SELECT id_puerta as value, id_puerta as label FROM tf_puertas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * codi_instalacion_option_list Model Action
     * @return array
     */
	function codi_instalacion_option_list(Request $request){
		$sqltext = "SELECT codi_instalacion as value, codi_instalacion as label FROM tf_codigos_instalaciones";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_mzna_option_list Model Action
     * @return array
     */
	function id_mzna_option_list(Request $request){
		$sqltext = "SELECT id_mzna as value, id_mzna as label FROM tf_manzanas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_sector_option_list Model Action
     * @return array
     */
	function id_sector_option_list(Request $request){
		$sqltext = "SELECT id_sector as value, id_sector as label FROM tf_sectores";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_notaria_option_list Model Action
     * @return array
     */
	function id_notaria_option_list(Request $request){
		$sqltext = "SELECT id_notaria as value, id_notaria as label FROM tf_notarias";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_tabla_option_list Model Action
     * @return array
     */
	function id_tabla_option_list(Request $request){
		$sqltext = "SELECT id_tabla as value, id_tabla as label FROM tf_tablas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_edificacion_option_list Model Action
     * @return array
     */
	function id_edificacion_option_list(Request $request){
		$sqltext = "SELECT id_edificacion as value, id_edificacion as label FROM tf_edificaciones";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * id_hab_urba_option_list Model Action
     * @return array
     */
	function id_hab_urba_option_list(Request $request){
		$sqltext = "SELECT id_hab_urba as value, id_hab_urba as label FROM tf_hab_urbana";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	/**
     * getcount_tfactividades Model Action
     * @return Value
     */
	function getcount_tfactividades(Request $request){
		$sqltext = "SELECT COUNT(*) AS num FROM tf_actividades";
		$query_params = [];
		$val = DB::select($sqltext, $query_params);
		return $val[0]->num;
	}
}
