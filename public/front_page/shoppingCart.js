const GST_PERCENTAGE = 0.05;
const QST_PERCENTAGE = 0.09975;
let subtotal = 0;

// Fetch and parse food items json
let foodItems = [];
fetch('./foodItems.json').then(foodData => {
  return foodData.json();
}).then((data) => {
  for (let i = 0; i < data.length; i++) {
    foodItems.push(data[i]);
  }
});

const cartRows = document.getElementsByClassName('cart-row');
const cartDeleteButtons = document.getElementsByClassName('cart-delete');
const increaseButtons = document.getElementsByClassName('cart-increase');
const decreaseButtons = document.getElementsByClassName('cart-decrease');

//---------- DELETE ITEM BUTTONS ----------//
for (let i = 0; i < cartDeleteButtons.length; i++) {
  cartDeleteButtons[i].addEventListener('click', (e) => {
    let row = e.target.parentElement.parentElement;
    let itemKey = e.target.dataset.identifier;
    console.log(itemKey);
    row.remove();
    updatePrice();
  });
}

//---------- ITEM QUANTITY BUTTONS ----------//
for (let i = 0; i < increaseButtons.length; i++) {

  increaseButtons[i].addEventListener('click', (e) => {
    let thisInput = e.target.parentElement.previousElementSibling;
    thisInput.value = parseInt(thisInput.value) + 1;
    updatePrice();
  });

  decreaseButtons[i].addEventListener('click', (e) => {
    let thisInput = e.target.parentElement.previousElementSibling;
    let newValue = parseInt(thisInput.value) - 1;
    if (newValue < 0) {
      thisInput.value = 0;
    } else {
      thisInput.value = newValue;
    }
    updatePrice();
  });
}

//---------- PRICE INFORMATION CALCULATION ----------//
const updatePriceInformation = () => {
  let qst = subtotal * QST_PERCENTAGE;
  let gst = subtotal * GST_PERCENTAGE;
  
  document.querySelector('.subtotal-amount').textContent = `$${subtotal.toFixed(2)}`;
  document.querySelector('.qst-amount').textContent = `$${qst.toFixed(2)}`;
  document.querySelector('.gst-amount').textContent = `$${gst.toFixed(2)}`;

  let grandTotal = subtotal + qst + gst;
  document.querySelector('.total-amount').textContent = `$${grandTotal.toFixed(2)}`;

}

//---------- ITEM TOTAL CALCULATION ----------//
const updatePrice = () => {
  const cartRows = document.getElementsByClassName('cart-row');
  let rowTotals = []
  for (let i = 0; i < cartRows.length; i++) {
    let row = cartRows[i];
    
    // Get value of one item
    let price = parseFloat(row.childNodes.item(3).textContent.substring(1));
    
    // Get quantity of item
    let quantity = row.childNodes.item(5).childNodes.item(1).childNodes.item(1).value;
    
    let rowTotal = (quantity * price).toFixed(2);

    // Update row total display
    row.childNodes.item(7).childNodes.item(0).textContent = `$${rowTotal}`;
    rowTotals.push(rowTotal);
  }
  // Sum row totals to update subtotal
  subtotal = rowTotals.reduce((a, b) => a+b, 0);
  updatePriceInformation();
}

// Call once on page load to get starting subtotal
updatePrice();








