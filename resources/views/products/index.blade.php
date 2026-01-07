@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        @include('partials.admin-sidebar')

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Productos</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a class="btn btn-success" href="{{ route('products.create') }}">
                        <span data-feather="plus"></span> Crear Nuevo Producto
                    </a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <!-- Placeholder Image Since we don't have uploads yet -->
                        <div class="card-header bg-light d-flex justify-content-center align-items-center" style="height: 150px;">
                            <span data-feather="image" style="width: 50px; height: 50px; color: #aaa;"></span>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nombre }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->category->nombre ?? 'Sin Categoría' }}</h6>
                            <p class="card-text">
                                <strong>Precio:</strong> ${{ number_format($product->precio, 2) }} <br>
                                <strong>Stock:</strong> {{ $product->stock }} unidades <br>
                                <span class="badge {{ $product->estado == 'activo' ? 'bg-success' : 'bg-danger' }}">
                                    {{ ucfirst($product->estado) }}
                                </span>
                            </p>
                        </div>
                        <div class="card-footer bg-white border-top-0 d-flex justify-content-between">
                             <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-primary btn-sm">Editar</a>
                             
                             <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este producto?')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            @if($products->isEmpty())
                <div class="alert alert-info mt-4">
                    No hay productos registrados.
                </div>
            @endif

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
