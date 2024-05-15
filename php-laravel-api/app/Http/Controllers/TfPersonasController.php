<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TfPersonasAddRequest;
use App\Http\Requests\TfPersonasEditRequest;
use App\Models\TfPersonas;
use Illuminate\Http\Request;
use Exception;
class TfPersonasController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = TfPersonas::query();
		if($request->search){
			$search = trim($request->search);
			TfPersonas::search($query, $search);
		}
		$orderby = $request->orderby ?? "tf_personas.id_persona";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, TfPersonas::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TfPersonas::query();
		$record = $query->findOrFail($rec_id, TfPersonas::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(TfPersonasAddRequest $request){
		$modeldata = $request->validated();
		
		//save TfPersonas record
		$record = TfPersonas::create($modeldata);
		$rec_id = $record->id_persona;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TfPersonasEditRequest $request, $rec_id = null){
		$query = TfPersonas::query();
		$record = $query->findOrFail($rec_id, TfPersonas::editFields());
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
		$query = TfPersonas::query();
		$query->whereIn("id_persona", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
