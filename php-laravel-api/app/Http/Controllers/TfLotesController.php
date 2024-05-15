<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TfLotesAddRequest;
use App\Http\Requests\TfLotesEditRequest;
use App\Models\TfLotes;
use Illuminate\Http\Request;
use Exception;
class TfLotesController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = TfLotes::query();
		if($request->search){
			$search = trim($request->search);
			TfLotes::search($query, $search);
		}
		$orderby = $request->orderby ?? "tf_lotes.id_lote";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, TfLotes::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TfLotes::query();
		$record = $query->findOrFail($rec_id, TfLotes::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(TfLotesAddRequest $request){
		$modeldata = $request->validated();
		
		//save TfLotes record
		$record = TfLotes::create($modeldata);
		$rec_id = $record->id_lote;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TfLotesEditRequest $request, $rec_id = null){
		$query = TfLotes::query();
		$record = $query->findOrFail($rec_id, TfLotes::editFields());
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
		$query = TfLotes::query();
		$query->whereIn("id_lote", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
