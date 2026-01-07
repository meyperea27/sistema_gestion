@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Categorías</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Crear Nueva Categoría</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th width="280px">Acción</th>
            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->nombre }}</td>
                <td>{{ $category->descripcion }}</td>
                <td>
                    <form action="{{ route('categories.destroy',$category->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Editar</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
