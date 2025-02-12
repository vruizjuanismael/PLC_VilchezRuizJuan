<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cotización</title>
</head>

<body>
    <form action="{{ route('cotizacion.store') }}" method="post">
        @csrf

        <label for="cliente_id">Cliente ID:</label>
        <select name="cliente_id" id="cliente_id" required>
            @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->id }}</option>
            @endforeach
        </select><br><br>

        <label for="fecha_creacion">Fecha de creación:</label>
        <input type="date" name="fecha_creacion" id="fecha_creacion" required><br><br>

        <label for="productos_servicios">Productos/Servicios:</label>
        <input type="text" name="productos_servicios" id="productos_servicios" required><br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required><br><br>

        <label for="precio_unitario">Precio unitario:</label>
        <input type="number" name="precio_unitario" id="precio_unitario" step="0.01" required><br><br>

        <label for="total">Total:</label>
        <input type="number" name="total" id="total" step="0.01" required><br><br>

        <label for="estado">Estado:</label>
        <select name="estado" id="estado" required>
            <option value="pendiente">Pendiente</option>
            <option value="aceptada">Aceptada</option>
            <option value="rechazada">Rechazada</option>
        </select><br><br>

        <label for="notas">Notas:</label>
        <textarea name="notas" id="notas"></textarea><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>

</html>