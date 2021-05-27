@extends('layouts.template')

@section('title', 'Productos edit')

@section('content')
    <h1>En este formulario se editará el producto</h1>
    <form action="{{route('products.update', $product)}}" method="POST">
        
        @csrf

        @method('PUT')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name', $product->name)}}">
        </label>
        
        @error('name')
            <br>            
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Precio:<br>
            <input type="number" name="price" value="{{old('price', $product->price)}}">
        </label>
        
        @error('price')
            <br>            
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoría:<br>
            <input type="text" name="category" value="{{old('category', $product->category)}}">
        </label>
        
        @error('category')
            <br>            
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection