document.addEventListener('DOMContentLoaded', (event) => {
    updateCartCount();
    displayCartItems();
});

function toggleCartPopup() {
    const cartPopup = document.getElementById('cart-popup');
    cartPopup.style.display = cartPopup.style.display === 'flex' ? 'none' : 'flex';
}

function addToCart(productName, productPrice) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let product = cart.find(item => item.name === productName);

    if (product) {
        product.quantity += 1;
    } else {
        cart.push({ name: productName, price: productPrice, quantity: 1 });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    displayCartItems();
}

function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalCount = cart.reduce((total, item) => total + item.quantity, 0);
    document.getElementById('cart-count').innerText = totalCount;
}

function displayCartItems() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartItemsContainer = document.getElementById('cart-items');
    let cartTotalContainer = document.getElementById('cart-total');

    cartItemsContainer.innerHTML = '';
    let totalAmount = 0;

    cart.forEach(item => {
        let itemTotal = item.price * item.quantity;
        totalAmount += itemTotal;
        cartItemsContainer.innerHTML += `
            <div class="cart-item">
                <p>${item.name} - $${item.price} x ${item.quantity} = $${itemTotal.toFixed(2)}</p>
            </div>
        `;
    });

    cartTotalContainer.innerHTML = `<h3>Total: $${totalAmount.toFixed(2)}</h3>`;
}
