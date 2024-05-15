<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TfConductoresAddRequest;
use App\Http\Requests\TfConductoresEditRequest;
use App\Models\TfConductores;
use Illuminate\Http\Request;
use Exception;
class TfConductoresController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = TfConductores::query();
		if($request->search){
			$search = trim($request->search);
			TfConductores::search($query, $search);
		}
		$orderby = $request->orderby ?? "tf_conductores.id_ficha";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, TfConductores::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TfConductores::query();
		$record = $query->findOrFail($rec_id, TfConductores::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(TfConductoresAddRequest $request){
		$modeldata = $request->validated();
		
		//save TfConductores record
		$record = TfConductores::create($modeldata);
		$rec_id = $record->id_ficha;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TfConductoresEditRequest $request, $rec_id = null){
		$query = TfConductores::query();
		$record = $query->findOrFail($rec_id, TfConductores::editFields());
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
		$query = TfConductores::query();
		$query->whereIn("id_ficha", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
