<?php 

namespace App\Exports;
use App\Models\TfActividades;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class TfactividadesListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(TfActividades::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Codi Actividad',
			'Desc Actividad'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->codi_actividad,
			$record->desc_actividad
        ];
    }
}
