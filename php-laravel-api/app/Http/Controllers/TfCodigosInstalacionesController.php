<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TfCodigosInstalacionesAddRequest;
use App\Http\Requests\TfCodigosInstalacionesEditRequest;
use App\Models\TfCodigosInstalaciones;
use Illuminate\Http\Request;
use Exception;
class TfCodigosInstalacionesController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = TfCodigosInstalaciones::query();
		if($request->search){
			$search = trim($request->search);
			TfCodigosInstalaciones::search($query, $search);
		}
		$orderby = $request->orderby ?? "tf_codigos_instalaciones.codi_instalacion";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, TfCodigosInstalaciones::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TfCodigosInstalaciones::query();
		$record = $query->findOrFail($rec_id, TfCodigosInstalaciones::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(TfCodigosInstalacionesAddRequest $request){
		$modeldata = $request->validated();
		
		//save TfCodigosInstalaciones record
		$record = TfCodigosInstalaciones::create($modeldata);
		$rec_id = $record->codi_instalacion;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TfCodigosInstalacionesEditRequest $request, $rec_id = null){
		$query = TfCodigosInstalaciones::query();
		$record = $query->findOrFail($rec_id, TfCodigosInstalaciones::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $request->validated();
			$record->update($modeldata);
		}
		return $this->respond($record);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = TfCodigosInstalaciones::query();
		$query->whereIn("codi_instalacion", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
