<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona tu Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Selecciona tu Producto</h1>
        <form action="{{ route('addToCart') }}" method="POST">
            @csrf
            <input type="hidden" name="product_name" value="Camiseta casual">
            <input type="hidden" name="price" value="70000">

            <div class="mb-3">
                <label for="size" class="form-label">Talla</label>
                <select id="size" name="size" class="form-select" required>
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <select id="color" name="color" class="form-select" required>
                    <option value="green">Verde</option>
                    <option value="white">Blanco</option>
                    <option value="gray">Gris</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Cantidad</label>
                <input type="number" id="quantity" name="quantity" class="form-control" min="1" value="1" required>
            </div>

            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
        </form>
    </div>
</body>
</html>
