@extends('app')
@section('title', "Suma")
@section('content')
<form action="" method="POST">

<div class="form-outline">
    <label class="form-label" for="typeNumber">Numero 1</label>
    <input type="number" id="typeNumber" class="form-control" />
  
</div>
<div class="form-outline">
    <label class="form-label" for="typeNumber">Numero 2</label>
    <input type="number" id="typeNumber" class="form-control" />
    
</div>

<button type="button" class="btn btn-warning">Suma</button>
@endsection