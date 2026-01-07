@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        @include('partials.admin-sidebar')

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <!-- Informative Cards -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Usuarios</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $userCount }}</h5>
                            <p class="card-text">Usuarios registrados.</p>
                            <a href="{{ route('admin.users.index') }}" class="text-white">Ver detalles</a>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Productos</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $productCount }}</h5>
                            <p class="card-text">Productos activos.</p>
                            <a href="{{ route('products.index') }}" class="text-white">Ver detalles</a>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-header">Categorías</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $categoryCount }}</h5>
                            <p class="card-text">Categorías disponibles.</p>
                             <a href="{{ route('categories.index') }}" class="text-white">Ver detalles</a>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">Estado del Sistema</div>
                        <div class="card-body">
                            <h5 class="card-title">En Línea</h5>
                            <p class="card-text">Funcionando correctamente.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2>Acciones Rápidas</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="list-group">
                        <a href="{{ route('products.create') }}" class="list-group-item list-group-item-action">
                            Crear Nuevo Producto
                        </a>
                        <a href="{{ route('categories.create') }}" class="list-group-item list-group-item-action">
                            Crear Nueva Categoría
                        </a>
                         <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">
                            Administrar Usuarios
                        </a>
                    </div>
                </div>
            </div>
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
