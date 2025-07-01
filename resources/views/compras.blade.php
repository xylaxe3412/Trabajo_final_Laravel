<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Nueva Compra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Registrar Nueva Compra</h4>
                </div>

                <div class="card-body">
                <form action="{{ route('compras.create') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="id_categoria" class="block text-gray-700 font-semibold">Seleccionar una categoría</label>
                        <select name="id_categoria" id="id_categoria" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                            <option value="" disabled selected>Seleccionar categoría</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->Nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="id_proveedor" class="block text-gray-700 font-semibold">Seleccionar cliente</label>
                        <select name="id_proveedor" id="id_proveedor" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                            <option value="" disabled selected>Seleccione un cliente</option>
                            @foreach ($proveedores as $proveedor)
                                <option value="{{ $proveedor->id }}">{{ $proveedor->Nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="total">Total</label>
                        <input type="number" name="total" id="total" class="form-control" step="0.01" min="0" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar Compra</button>
                        <a href="/compras" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>

                </div>
                @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <h4 class="mt-5">Compras Registradas</h4>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Categoría</th>
                            <th>Cliente</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($compras as $compra)
                            <tr>
                                <td>{{ $compra->id }}</td>
                                <td>{{ $compra->producto->Nombre ?? 'Sin producto' }}</td>
                                <td>{{ $compra->categoria->nombre ?? 'Sin categoría' }}</td>
                                <td>{{ $compra->proveedor->Nombre ?? 'Sin cliente' }}</td>
                                <td>{{ $compra->cantidad }}</td>
                                <td>${{ number_format($compra->total, 2) }}</td>
                                <td>{{ $compra->created_at->format('Y-m-d H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</body>
</html>
