@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Bunker <a href="{{Route('bunker.create')}}" class="btn btn-secondary">Nuevo</a>
            </div>
            <ul>
                @foreach($bunker as $bunker)
                    <li><a href="{{Route('bunker.edit', $bunker->id)}}"> {{$bunker->name}} </a> -
                        {{$bunker->user->name}}
                        <form action="{{route('product.destroy', $bunker->id)}}" method="POST">
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
