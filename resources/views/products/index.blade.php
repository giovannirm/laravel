@extends('layouts.template')

@section('title', 'Productos')

@section('content')
    <h1>Bienveniedo a la página de productos</h1>
    <a href="{{route('products.create')}}">Crear producto</a>
    <ul>
        @foreach ($products as $product)
        <li>
            <a href="{{route('products.show', $product)}}">{{$product->name}}</a>            
        </li>
        @endforeach        
    </ul>

    {{$products->links()}}
@endsection