<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TfInstitucionAddRequest;
use App\Http\Requests\TfInstitucionEditRequest;
use App\Models\TfInstitucion;
use Illuminate\Http\Request;
use Exception;
class TfInstitucionController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = TfInstitucion::query();
		if($request->search){
			$search = trim($request->search);
			TfInstitucion::search($query, $search);
		}
		$orderby = $request->orderby ?? "tf_institucion.id_institucion";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, TfInstitucion::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = TfInstitucion::query();
		$record = $query->findOrFail($rec_id, TfInstitucion::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(TfInstitucionAddRequest $request){
		$modeldata = $request->validated();
		
		//save TfInstitucion record
		$record = TfInstitucion::create($modeldata);
		$rec_id = $record->id_institucion;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(TfInstitucionEditRequest $request, $rec_id = null){
		$query = TfInstitucion::query();
		$record = $query->findOrFail($rec_id, TfInstitucion::editFields());
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
		$query = TfInstitucion::query();
		$query->whereIn("id_institucion", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
