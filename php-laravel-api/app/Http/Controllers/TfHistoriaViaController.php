<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TfHistoriaViaAddRequest;
use App\Http\Requests\TfHistoriaViaEditRequest;
use App\Models\TfHistoriaVia;
use Illuminate\Http\Request;
use Exception;
class TfHistoriaViaController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = TfHistoriaVia::query();
		if($request->search){
			$search = trim($request->search);
			TfHistoriaVia::search($query, $search);
		}
		$orderby = $request->orderby ?? "tf_historia_via.id_historia_via";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, TfHistoriaVia::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TfHistoriaVia::query();
		$record = $query->findOrFail($rec_id, TfHistoriaVia::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(TfHistoriaViaAddRequest $request){
		$modeldata = $request->validated();
		
		//save TfHistoriaVia record
		$record = TfHistoriaVia::create($modeldata);
		$rec_id = $record->id_historia_via;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TfHistoriaViaEditRequest $request, $rec_id = null){
		$query = TfHistoriaVia::query();
		$record = $query->findOrFail($rec_id, TfHistoriaVia::editFields());
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
		$query = TfHistoriaVia::query();
		$query->whereIn("id_historia_via", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
