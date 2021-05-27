@extends('layouts.template')

@section('title', 'Productos create')

@section('content')
    <h1>En este formulario se creará el producto</h1>
    
    <form action="{{route('products.store')}}" method="POST">
        
        @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>            
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Precio:<br>
            <input type="number" name="price" value="{{old('price')}}">
        </label>
        
        @error('price')
            <br>            
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoría:<br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
            <br>            
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection