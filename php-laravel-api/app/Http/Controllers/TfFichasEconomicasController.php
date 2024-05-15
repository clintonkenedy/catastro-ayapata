<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TfFichasEconomicasAddRequest;
use App\Http\Requests\TfFichasEconomicasEditRequest;
use App\Models\TfFichasEconomicas;
use Illuminate\Http\Request;
use Exception;
class TfFichasEconomicasController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = TfFichasEconomicas::query();
		if($request->search){
			$search = trim($request->search);
			TfFichasEconomicas::search($query, $search);
		}
		$orderby = $request->orderby ?? "tf_fichas_economicas.id_ficha";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, TfFichasEconomicas::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TfFichasEconomicas::query();
		$record = $query->findOrFail($rec_id, TfFichasEconomicas::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(TfFichasEconomicasAddRequest $request){
		$modeldata = $request->validated();
		
		//save TfFichasEconomicas record
		$record = TfFichasEconomicas::create($modeldata);
		$rec_id = $record->id_ficha;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TfFichasEconomicasEditRequest $request, $rec_id = null){
		$query = TfFichasEconomicas::query();
		$record = $query->findOrFail($rec_id, TfFichasEconomicas::editFields());
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
		$query = TfFichasEconomicas::query();
		$query->whereIn("id_ficha", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
