@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        @include('partials.admin-sidebar')

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Editar Producto</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a class="btn btn-secondary" href="{{ route('products.index') }}"> Volver</a>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ups!</strong> Hubo algunos problemas con su entrada.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.update',$product->id) }}" method="POST">
                @csrf
                @method('PUT')

                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-3">
                            <strong>Nombre:</strong>
                            <input type="text" name="nombre" value="{{ $product->nombre }}" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-3">
                            <strong>Precio:</strong>
                            <input type="text" name="precio" value="{{ $product->precio }}" class="form-control" placeholder="Precio">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-3">
                            <strong>Stock:</strong>
                            <input type="number" name="stock" value="{{ $product->stock }}" class="form-control" placeholder="Stock">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-3">
                            <strong>Estado:</strong>
                            <select class="form-control" name="estado">
                                <option value="activo" {{ $product->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                                <option value="inactivo" {{ $product->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group mb-3">
                            <strong>Categoría:</strong>
                            <select class="form-control" name="category_id">
                                <option value="">Seleccione Categoría</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>

            </form>
        </main>
    </div>
</div>

@push('scripts')
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace()
</script>
@endpush
@endsection
