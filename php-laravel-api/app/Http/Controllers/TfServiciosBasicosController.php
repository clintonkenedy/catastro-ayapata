<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TfServiciosBasicosAddRequest;
use App\Http\Requests\TfServiciosBasicosEditRequest;
use App\Models\TfServiciosBasicos;
use Illuminate\Http\Request;
use Exception;
class TfServiciosBasicosController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = TfServiciosBasicos::query();
		if($request->search){
			$search = trim($request->search);
			TfServiciosBasicos::search($query, $search);
		}
		$orderby = $request->orderby ?? "tf_servicios_basicos.id_ficha";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, TfServiciosBasicos::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TfServiciosBasicos::query();
		$record = $query->findOrFail($rec_id, TfServiciosBasicos::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(TfServiciosBasicosAddRequest $request){
		$modeldata = $request->validated();
		
		//save TfServiciosBasicos record
		$record = TfServiciosBasicos::create($modeldata);
		$rec_id = $record->id_ficha;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TfServiciosBasicosEditRequest $request, $rec_id = null){
		$query = TfServiciosBasicos::query();
		$record = $query->findOrFail($rec_id, TfServiciosBasicos::editFields());
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
		$query = TfServiciosBasicos::query();
		$query->whereIn("id_ficha", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
