<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Compra</title>
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
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Editar Compra #{{ $compra->id }}</h4>
                    <div>
                        <a href="{{ route('compras') }}" class="btn btn-secondary mr-2">Volver a Compras</a>
                        <a href="/home" class="btn btn-home">Volver a Home</a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="section-title">Actualizar Datos de la Compra</h5>
                    
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('update_compra', $compra->id) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="id_categoria">Categoría</label>
                            <select name="id_categoria" id="id_categoria" class="form-control" required>
                                <option value="" disabled>Seleccionar categoría</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" 
                                            {{ $compra->id_categoria == $categoria->id ? 'selected' : '' }}>
                                        {{ $categoria->Nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_proveedor">Proveedor</label>
                            <select name="id_proveedor" id="id_proveedor" class="form-control" required>
                                <option value="" disabled>Seleccione un proveedor</option>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{ $proveedor->id }}" 
                                            {{ $compra->id_proveedor == $proveedor->id ? 'selected' : '' }}>
                                        {{ $proveedor->Nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" name="cantidad" id="cantidad" 
                                       class="form-control" min="1" 
                                       value="{{ old('cantidad', $compra->cantidad) }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="total">Total</label>
                                <input type="number" name="total" id="total" 
                                       class="form-control" step="0.01" min="0" 
                                       value="{{ old('total', $compra->total) }}" required>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Actualizar Compra
                            </button>
                            <a href="{{ route('compras') }}" class="btn btn-secondary">
                                Cancelar
                            </a>
                        </div>
                    </form>

                    <!-- Información actual de la compra -->
                    <div class="mt-4">
                        <h6 class="text-muted">Información Actual:</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>ID:</strong> {{ $compra->id }}</p>
                                <p><strong>Fecha de Creación:</strong> {{ $compra->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Última Actualización:</strong> {{ $compra->updated_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>