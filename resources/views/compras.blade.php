<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Nueva Compra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .section-title {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 1.5rem;
        }
        .btn-home {
            background-color: #6c757d;
            color: white;
        }
        .btn-home:hover {
            background-color: #5a6268;
            color: white;
        }
        .btn-action {
            margin: 0 2px;
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Registrar Nueva Compra</h4>
                    <a href="/home" class="btn btn-home">Volver a Home</a>
                </div>

                <div class="card-body">
                    <h5 class="section-title">Datos de la Compra</h5>
                    <form action="{{ route('compras.create') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="id_categoria">Seleccionar una categoría</label>
                            <select name="id_categoria" id="id_categoria" class="form-control" required>
                                <option value="" disabled selected>Seleccionar categoría</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->Nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_proveedor">Seleccionar proveedor</label>
                            <select name="id_proveedor" id="id_proveedor" class="form-control" required>
                                <option value="" disabled selected>Seleccione un proveedor</option>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id }}">{{ $proveedor->Nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="total">Total</label>
                                <input type="number" name="total" id="total" class="form-control" step="0.01" min="0" required>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar Compra</button>
                            <a href="/compras" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>

                    @if(session('status'))
                        <div class="alert alert-success mt-3">{{ session('status') }}</div>
                    @endif

                    <h5 class="section-title mt-5">Compras Registradas</h5>
                    <div class="table-responsive">
                        <table class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categoría</th>
                                    <th>Proveedor</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($compras as $compra)
                                    <tr>
                                        <td>{{ $compra->id }}</td>
                                        <td>{{ $compra->categoria->Nombre ?? 'Sin categoría' }}</td>
                                        <td>{{ $compra->proveedor->Nombre ?? 'Sin proveedor' }}</td>
                                        <td>{{ $compra->cantidad }}</td>
                                        <td>${{ number_format($compra->total, 2) }}</td>
                                        <td>{{ $compra->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <a href="{{ route('editar_compra_view', $compra->id) }}" 
                                               class="btn btn-sm btn-outline-primary btn-action">Editar</a>
                                            <form action="{{ route('eliminar_compra', $compra->id) }}" method="GET" 
                                                  style="display: inline;"
                                                  onsubmit="return confirm('¿Está seguro de que desea eliminar esta compra?')">
                                                <button type="submit" class="btn btn-sm btn-outline-danger btn-action">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>