@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
         
<h3>Insersión de Productos</h3>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Producto">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
    </div>
    <div class="mb-3">
        <label for="tipo_producto" class="form-label">Categoria del producto</label>
        <input type="text" class="form-control" id="stock" name="stock" placeholder="tipo_producto">
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Cargue un archivo</label>
        <input type="file" class="form-control-file" id="foto" name="foto">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection