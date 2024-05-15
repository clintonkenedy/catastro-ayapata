<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TfUbigeo extends Model
{


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tf_ubigeo';


    /**
     * The table primary key field
     *
     * @var string
     */
    protected $primaryKey = 'id_ubi_geo';
    public $incrementing = false;


    /**
     * Table fillable fields
     *
     * @var array
     */
    protected $fillable = ["id_ubi_geo", "nomb_ubi_geo", "cuc_desde", "cuc_hasta", "ultimo_cuc"];


    /**
     * Set search query for the model
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $text
     */
    public static function search($query, $text)
    {
        //search table record
        $search_condition = '(
				id_ubi_geo LIKE ?  OR
				nomb_ubi_geo LIKE ?  OR
				cuc_desde LIKE ?  OR
				cuc_hasta LIKE ?  OR
				ultimo_cuc LIKE ?
		)';
        $search_params = [
            "%$text%", "%$text%", "%$text%", "%$text%", "%$text%"
        ];
        //setting search conditions
        $query->whereRaw($search_condition, $search_params);
        //return $query->whereRaw($search_condition, $search_params)->ToSql();
    }


    /**
     * return list page fields of the model.
     *
     * @return array
     */
    public static function listFields()
    {
        return [
            "id_ubi_geo",
            "nomb_ubi_geo",
            "cuc_desde",
            "cuc_hasta",
            "ultimo_cuc"
        ];
    }


    /**
     * return exportList page fields of the model.
     *
     * @return array
     */
    public static function exportListFields()
    {
        return [
            "id_ubi_geo",
            "nomb_ubi_geo",
            "cuc_desde",
            "cuc_hasta",
            "ultimo_cuc"
        ];
    }


    /**
     * return view page fields of the model.
     *
     * @return array
     */
    public static function viewFields()
    {
        return [
            "id_ubi_geo",
            "nomb_ubi_geo",
            "cuc_desde",
            "cuc_hasta",
            "ultimo_cuc"
        ];
    }


    /**
     * return exportView page fields of the model.
     *
     * @return array
     */
    public static function exportViewFields()
    {
        return [
            "id_ubi_geo",
            "nomb_ubi_geo",
            "cuc_desde",
            "cuc_hasta",
            "ultimo_cuc"
        ];
    }


    /**
     * return edit page fields of the model.
     *
     * @return array
     */
    public static function editFields()
    {
        return [
            "id_ubi_geo",
            "nomb_ubi_geo",
            "cuc_desde",
            "cuc_hasta",
            "ultimo_cuc"
        ];
    }


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
