@extends('layouts.app')
@section('content')
@foreach ($cars as $car)
<ul>
    <li>{{ $car->marca }}</li>
    <li>{{ $car->anno }}</li>
    <li>{{ $car->prezzo }}</li>
    <li>{{ $car->descrizione }}</li>
</ul>
@endforeach 
@endsection
