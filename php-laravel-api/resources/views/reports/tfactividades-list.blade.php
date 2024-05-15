
@extends('layouts.report')
@section('content')
<div id="report-title"><h1>Tf Actividades</h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Codi Actividad</th>
            <th>Desc Actividad</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->codi_actividad }}</td>
            <td>{{ $record->desc_actividad }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
