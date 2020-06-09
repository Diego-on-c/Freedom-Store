@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('bunker.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    Bunker <a href="{{Route('bunker.create')}}" class="btn btn-secondary">Nuevo</a>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <lebel>Nombre</lebel>
                        <input type="text" name="name" class="form-control"/>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Crear" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
