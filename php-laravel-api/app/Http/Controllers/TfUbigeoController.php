<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TfUbigeoAddRequest;
use App\Http\Requests\TfUbigeoEditRequest;
use App\Models\TfUbigeo;
use Illuminate\Http\Request;
use Exception;

class TfUbigeoController extends Controller
{


    /**
     * List table records
     * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
    function index(Request $request, $fieldname = null, $fieldvalue = null)
    {
        $query = TfUbigeo::query();
        if ($request->search) {
            $search = trim($request->search);
            TfUbigeo::search($query, $search);
        }
        $orderby = $request->orderby ?? "tf_ubigeo.id_ubi_geo";
        $ordertype = $request->ordertype ?? "desc";
        $query->orderBy($orderby, $ordertype);
        // $query->where("id_ubi_geo", "=", "050604");

        if ($fieldname) {
            $query->where($fieldname, "like", "%" . $fieldvalue . "%");
            // $query->where($fieldname, '!=', "hola"); //filter by a single field name
            //  $fieldname . " " . $fieldvalue . " query: " . $query->toSql();
        }
        $records = $this->paginate($query, TfUbigeo::listFields());
        return $this->respond($records);
    }


    /**
     * Select table record by ID
     * @param string $rec_id
     * @return \Illuminate\View\View
     */
    function view($rec_id = null)
    {
        $query = TfUbigeo::query();
        $record = $query->findOrFail($rec_id, TfUbigeo::viewFields());
        return $this->respond($record);
    }


    /**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
    function add(TfUbigeoAddRequest $request)
    {
        $modeldata = $request->validated();

        //save TfUbigeo record
        $record = TfUbigeo::create($modeldata);
        $rec_id = $record->id_ubi_geo;
        return $this->respond($record);
    }


    /**
     * Update table record with form data
     * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
    function edit(TfUbigeoEditRequest $request, $rec_id = null)
    {
        $query = TfUbigeo::query();
        $record = $query->findOrFail($rec_id, TfUbigeo::editFields());
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
    function delete(Request $request, $rec_id = null)
    {
        $arr_id = explode(",", $rec_id);
        $query = TfUbigeo::query();
        $query->whereIn("id_ubi_geo", $arr_id);
        $query->delete();
        return $this->respond($arr_id);
    }
}
