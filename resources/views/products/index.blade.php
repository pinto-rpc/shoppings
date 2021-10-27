<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Productos</h1>
    @empty($products)
    <h1>No hay ningun producto aun registrado</h1>
    @else
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Precio</th>
            <th scope="col">stock</th>
            <th scope="col">status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            <th scope="row">{{ $product->id}}</th>
            <td>{{ $product->title}}</td>
            <td>{{ $product->description}}</td>
            <td>{{ $product->price}}</td>
            <td>{{ $product->stock}}</td>
            <td>{{ $product->status}}</td>
          </tr>  
          @endforeach
        </tbody>
      </table>
      @endempty
</body>
</html>