document.addEventListener('DOMContentLoaded', function() {
    const cartIcon = document.querySelector('.cart-icon');
    const cartCount = document.getElementById('cart-count');
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    let cart = [];

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            addToCart(productId);
        });
    });

    function addToCart(productId) {
        cart.push(productId);
        cartCount.innerText = cart.length;
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const productsContainer = document.getElementById('products');
    const cartIcon = document.getElementById('cart-icon');
    const cartPopup = document.getElementById('cart-popup');
    const cartItemsContainer = document.getElementById('cart-items');
    const cartCount = document.getElementById('cart-count');
    const closePopup = document.querySelector('.close');
    const checkoutButton = document.getElementById('checkout-button');

    fetchProducts();

    function fetchProducts() {
        fetch('fetch_products.php')
            .then(response => response.json())
            .then(data => {
                displayProducts(data);
            })
            .catch(error => console.error('Error fetching products:', error));
    }

    function displayProducts(products) {
        productsContainer.innerHTML = '';
        products.forEach(product => {
            const productElement = document.createElement('div');
            productElement.classList.add('product');
            productElement.innerHTML = `
                <div class="product-image">
                    <img src="${product.image}" alt="${product.name}">
                </div>
                <h4>${product.name}</h4>
                <p>$${product.price}</p>
                <button class="add-to-cart" data-id="${product.id}">Add to Cart</button>
            `;
            productsContainer.appendChild(productElement);
        });
        addCartEventListeners();
    }

    function addCartEventListeners() {
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                addToCart(productId);
            });
        });
    }

    function addToCart(productId) {
        fetch('add_to_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ product_id: productId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                cartCount.innerText = data.total_items;
                displayCartItems(data.cart_items);
            } else {
                alert('Error adding to cart');
            }
        })
        .catch(error => console.error('Error adding to cart:', error));
    }

    function displayCartItems(cartItems) {
        cartItemsContainer.innerHTML = '';
        cartItems.forEach(item => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <p>${item.name} x${item.quantity}</p>
                <p>$${item.price * item.quantity}</p>
            `;
            cartItemsContainer.appendChild(cartItem);
        });
    }

    cartIcon.addEventListener('click', function() {
        cartPopup.style.display = 'block';
    });

    closePopup.addEventListener('click', function() {
        cartPopup.style.display = 'none';
    });

    checkoutButton.addEventListener('click', function() {
        window.location.href = 'checkout.php';
    });

    window.addEventListener('click', function(event) {
        if (event.target === cartPopup) {
            cartPopup.style.display = 'none';
        }
    });
});

const express = require('express');
const stripe = require('stripe')('your_secret_key_here');
const app = express();

app.post('/create-checkout-session', async (req, res) => {
  const session = await stripe.checkout.sessions.create({
    payment_method_types: ['card'],
    line_items: [
      {
        price_data: {
          currency: 'usd',
          product_data: {
            name: 'T-shirt',
          },
          unit_amount: 2000,
        },
        quantity: 1,
      },
    ],
    mode: 'payment',
    success_url: 'https://your-domain.com/success',
    cancel_url: 'https://your-domain.com/cancel',
  });

  res.json({ id: session.id });
});

app.listen(4242, () => console.log('Running on port 4242'));

// scripts.js
document.addEventListener('DOMContentLoaded', () => {
    const quickViewButton = document.querySelector('.quick-view');
    const quickAddButton = document.querySelector('.quick-add');

    quickViewButton.addEventListener('click', () => {
        alert('Quick View clicked!');
    });

    quickAddButton.addEventListener('click', () => {
        alert('Product added to cart!');
    });
});
