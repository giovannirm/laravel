@extends('layouts.template')

@section('title', 'Producto ' . $product->name)

@section('content')
    {{-- <h1>Bienvenido al producto <?php echo $product; ?></h1> --}}
    <a href="{{route('products.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('products.edit', $product)}}">Editar producto</a>
    <h1>Bienvenido al producto {{$product->name}}</h1>
    <p><strong>Precio: </strong>{{$product->price}}</p>
    <p><strong>Categoría: </strong>{{$product->category}}</p>

    <form action="{{route('products.destroy', $product)}}" method="POST">
        @csrf
        
        @method('DELETE')
        
        <button type="submit">Eliminar</button>
    </form>
@endsection