// Get individual product name
let productName = document.querySelector('h2').textContent;

// If local storage for this product does not exist, set its default to 1
if (!localStorage[productName]) {
  localStorage[productName] = 1;
}

function updatePrice() {
  let itemCost = parseFloat(document.querySelector('.total-price').dataset.price);
  let priceDiv = document.querySelector('.total-price');
  priceDiv.innerHTML = `$${(localStorage[productName] * itemCost).toFixed(2)}`;
}
updatePrice();

// Change the item quantity to the local storage value
document.querySelector('.item-quantity').value = localStorage[productName];


// Decrease button functionality
document.querySelector('.decrease-btn').addEventListener('click', (e) => {

  // Get the current value
  let count = parseInt(document.querySelector('.item-quantity').value);
  // If value is <= 0, set the localstorage to 0 and return
  if (count <= 0) {
    localStorage[productName] = 0;
    updatePrice();
    return;
  } else {
    // Update the local storage and change the value
    localStorage[productName] = count - 1;
    updatePrice();
    document.querySelector('.item-quantity').value = localStorage[productName];
  }
});

// Increase button functionality
document.querySelector('.increase-btn').addEventListener('click', (e) => {
  // Get the current value
  let count = parseInt(document.querySelector('.item-quantity').value);
  // Increment local storage count by 1
  localStorage[productName] = count + 1;
  updatePrice();
  document.querySelector('.item-quantity').value = localStorage[productName]
});

document.querySelector('.price-each').textContent = ` ($${document.querySelector('.total-price').dataset.price} / unit)`;


