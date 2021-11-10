@extends('layouts.master')

@section('content')
<h1>Crear un producto</h1>
<form method="POST" action="{{ route('products.store')}}">
    @csrf
    <div class="form-row">
        <label for="">Titulo</label>
        <input class="form-control" type="text" name="title" required>
    </div>

    <div class="form-row">
        <label for="">Descripcion</label>
        <input class="form-control" type="text" name="description" required>
    </div>

    <div class="form-row">
        <label for="">Precio</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" required>
    </div>

    <div class="form-row">
        <label for="">Stock</label>
        <input class="form-control" type="number" min="0"  name="stock" required>
    </div>

    <div class="form-row">
        <label for="">Estado</label>
        <select class="custom-select" name="status" required>
            <option value="" selected>Seleccione una opcion</option>
            <option value="available">Disponible</option>
            <option value="unavailable">No disponible</option>

        </select>
    </div>

    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">Crear Producto</button>
    </div>

</form>
@endsection