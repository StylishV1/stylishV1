// Funcionalidad para seleccionar la talla
const sizeButtons = document.querySelectorAll('.carrito-size button');
sizeButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        // Eliminar la clase 'selected' de todos los botones
        sizeButtons.forEach(btn => btn.classList.remove('selected'));
        // Agregar la clase 'selected' al botón clickeado
        event.target.classList.add('selected');
    });
});

// Funcionalidad para seleccionar el color
const colorButtons = document.querySelectorAll('.carrito-color button');
colorButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        // Eliminar la clase 'selected' de todos los botones de color
        colorButtons.forEach(btn => btn.classList.remove('selected'));
        // Agregar la clase 'selected' al botón de color clickeado
        event.target.classList.add('selected');
    });
});

// Funcionalidad para seleccionar la cantidad
const counter = document.getElementById('counter');
const increaseButton = document.getElementById('increase');
const decreaseButton = document.getElementById('decrease');

increaseButton.addEventListener('click', () => {
    let currentQuantity = parseInt(counter.textContent);
    counter.textContent = currentQuantity + 1;
});

decreaseButton.addEventListener('click', () => {
    let currentQuantity = parseInt(counter.textContent);
    if (currentQuantity > 1) {
        counter.textContent = currentQuantity - 1;
    }
});

// Funcionalidad para el botón "Añadir al carrito"
const addToCartButton = document.querySelector('.carrito-add-to-cart');
addToCartButton.addEventListener('click', () => {
    const selectedSize = document.querySelector('.carrito-size button.selected');
    const selectedColor = document.querySelector('.carrito-color button.selected');
    const quantity = parseInt(counter.textContent);

    // Verificar si el cliente ha seleccionado todos los detalles
    if (selectedSize && selectedColor) {
        // Mostrar un mensaje de confirmación de que se ha añadido al carrito
        alert(`Producto añadido al carrito: 
        Talla: ${selectedSize.dataset.size} 
        Color: ${selectedColor.dataset.color} 
        Cantidad: ${quantity}`);
    } else {
        // Si falta alguna selección, mostrar un mensaje de advertencia
        alert('Por favor, seleccione todos los detalles del producto (talla, color).');
    }
});