@extends('layouts.app')
@php
$page_title = 'treni';    
@endphp
@section('page_content')
@foreach ($data as $item)
<div class="card">
    <div class="card-body">
        <h5 class="card-title">id: {{$item["id"]}}</h5>
        <h5 class="card-title">Azienda: {{$item["Azienda"]}}</h5>
        <h5 class="card-title">Stazione di partrenza: {{$item["Stazione_di_partenza"]}}</h5>
        <h5 class="card-title">Stazione di arrivo: {{$item["Stazione_di_arrivo"]}}</h5>
        <h5 class="card-title">Orario di partenza: {{$item["Orario_di_partenza"]}}</h5>
        <h5 class="card-title">Orario di arrivo: {{$item["Orario_di_arrivo"]}}</h5>
        <h5 class="card-title">Codice Treno: {{$item["Codice_Treno"]}}</h5>
        <h5 class="card-title">Numero Carrozze: {{$item["Numero_Carrozze"]}}</h5>
        @if ($item["In orario"] == 1)
        <h5 class="card-title">In orario: si</h5>
        @else
        <h5 class="card-title">In orario: no</h5>
        @endif
        @if ($item["Cancellato"] == 0)
        <h5 class="card-title">Cancellato: no</h5>
        @else
        <h5 class="card-title">Cancellato: si</h5>
        @endif
    </div>
</div>
@endforeach
@endsection