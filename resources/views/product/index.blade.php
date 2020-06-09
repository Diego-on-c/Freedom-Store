@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Productos <a href="{{Route('product.create')}}" class="btn btn-secondary">Nuevo</a>
            </div>
            <ul>
                @foreach($products as $product)
                    <li><a href="{{Route('product.edit', $product->id)}}"> {{$product->name}} </a>
                        {{$bunker->user->name}}
                        <form action="{{route('product.destroy', $product->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Eliminar" class="btn btn-xs btn-danger">
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
