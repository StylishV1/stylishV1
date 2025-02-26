<!-- Vista Bolsa -->
<div class="container mt-5">
    <h1>Mi Bolsa</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @foreach($cartItems as $item)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $item->product_name }}</h5>
                <p>Tamaño: {{ $item->size }} | Color: {{ $item->color }}</p>
                <p>Cantidad: {{ $item->quantity }}</p>
                <p>Precio por unidad: ${{ number_format($item->price, 0, ',', '.') }}</p>
                <p>Total: ${{ number_format($item->price * $item->quantity, 0, ',', '.') }}</p>
            </div>
        </div>
    @endforeach

    <div class="text-end">
        <h4>Total Carrito: ${{ number_format($cartItems->sum(function($item) { return $item->price * $item->quantity; }), 0, ',', '.') }}</h4>
    </div>
</div>
