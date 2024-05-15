<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TfHabUrbanaAddRequest;
use App\Http\Requests\TfHabUrbanaEditRequest;
use App\Models\TfHabUrbana;
use Illuminate\Http\Request;
use Exception;
class TfHabUrbanaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = TfHabUrbana::query();
		if($request->search){
			$search = trim($request->search);
			TfHabUrbana::search($query, $search);
		}
		$orderby = $request->orderby ?? "tf_hab_urbana.id_hab_urba";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, TfHabUrbana::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TfHabUrbana::query();
		$record = $query->findOrFail($rec_id, TfHabUrbana::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(TfHabUrbanaAddRequest $request){
		$modeldata = $request->validated();
		
		//save TfHabUrbana record
		$record = TfHabUrbana::create($modeldata);
		$rec_id = $record->id_hab_urba;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TfHabUrbanaEditRequest $request, $rec_id = null){
		$query = TfHabUrbana::query();
		$record = $query->findOrFail($rec_id, TfHabUrbana::editFields());
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
		$query = TfHabUrbana::query();
		$query->whereIn("id_hab_urba", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
