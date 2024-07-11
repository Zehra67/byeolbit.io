const express = require('express');
const stripe = require('stripe')('sk_test_51PZZUIDetnrDuZe5j45U2JIQTnlHbPJG4GON8cI8vABq01us1WDhxlx8zvDhgVjyU18UKBhiZnDmexleW4cwToCN00mXoFmkQ4');
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

const stripe = Stripe('pk_test_51PZZUIDetnrDuZe5N84F2OYyNPfcyrIUQ2SewtXmQ6d18B7RIMQ63aivKHWOuA8rAQPncXQcYZXPlc6B8oo6HTmi00rVtjoe6o');
const elements = stripe.elements();
const cardElement = elements.create('card');
cardElement.mount('#card-element');

const form = document.getElementById('payment-form');
form.addEventListener('submit', async (event) => {
  event.preventDefault();
  const { error, paymentMethod } = await stripe.createPaymentMethod({
    type: 'card',
    card: cardElement,
  });

  if (error) {
    const errorElement = document.getElementById('card-errors');
    errorElement.textContent = error.message;
  } else {
    // Send paymentMethod.id to your server for processing
    fetch('/create-payment-intent', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ paymentMethodId: paymentMethod.id }),
    }).then(response => {
      return response.json();
    }).then(paymentIntentResponse => {
      if (paymentIntentResponse.error) {
        const errorElement = document.getElementById('card-errors');
        errorElement.textContent = paymentIntentResponse.error.message;
      } else {
        // Handle successful payment
        console.log('Payment successful:', paymentIntentResponse);
      }
    });
  }
});
