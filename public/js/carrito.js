 // Manejo de selección de talla
 document.addEventListener('DOMContentLoaded', () => {
    const sizeButtons = document.querySelectorAll('.size button');
    sizeButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remueve la clase 'selected' de todos los botones de talla
            sizeButtons.forEach(btn => btn.classList.remove('selected'));
            // Agrega la clase 'selected' al botón clickeado
            button.classList.add('selected');
            const selectedSize = button.getAttribute('data-size');
            console.log(`Talla seleccionada: ${selectedSize}`);
        });
    });
});

// Manejo de selección de color
document.querySelectorAll('.color button').forEach(button => {
    button.addEventListener('click', () => {
        // Remueve la clase 'selected' de todos los botones de color
        document.querySelectorAll('.color button').forEach(btn => btn.classList.remove('selected'));
        // Agrega la clase 'selected' al botón clickeado
        button.classList.add('selected');
        const selectedColorBox = document.getElementById('selectedColorBox');
        selectedColorBox.innerText = `Color seleccionado: ${button.getAttribute('data-color')}`;
    });
});

// Manejo del contador de cantidad
let counter = 1;
const counterDisplay = document.getElementById('counter');
document.getElementById('increase').addEventListener('click', () => {
    counter++;
    counterDisplay.textContent = counter;
});
document.getElementById('decrease').addEventListener('click', () => {
    if (counter > 1) {
        counter--;
        counterDisplay.textContent = counter;
    }
});

// Funcionalidad del botón "Añadir al carrito"
document.querySelector('.add-to-cart').addEventListener('click', () => {
    const selectedSize = document.querySelector('.size button.selected');  
    const selectedColor = document.querySelector('.color button.selected');  
    const quantity = parseInt(document.getElementById('counter').textContent);  

    // Verifica si se ha seleccionado una talla y un color
    if (selectedSize && selectedColor) {
        const size = selectedSize.getAttribute('data-size');
        const color = selectedColor.getAttribute('data-color');

        // Crea un objeto para el producto
        const product = {
            size: size,
            color: color,
            quantity: quantity
        };

        // Obtén el carrito del almacenamiento local o crea uno nuevo
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // Añadir el producto al carrito
        cart.push(product);

        // Guarda el carrito actualizado en el almacenamiento local
        localStorage.setItem('cart', JSON.stringify(cart));

        // Muestra el carrito en el DOM (opcional)
        console.log('Producto añadido al carrito:', product);
        alert('Producto añadido al carrito');
    } else {
        alert('Por favor, selecciona una talla y un color antes de añadir al carrito');
    }
});