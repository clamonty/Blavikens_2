//---------- ADD PRODUCT MODAL FUNCTIONALITY ----------//

// Create new product row in the product table
const createProduct = (name, aisle, quantity, price) => {
  let newRow = document.createElement("tr");
  const deleteFunction = (e) => {
    e.target.parentElement.parentElement.remove();
  };
  newRow.innerHTML = `
  <tr>
  <th scope="row" class="px-0">
      <div class="d-flex align-items-center flex-column">
          <p class="align-self-center">${name}</p>
      </div>
  </th>
  <td class="text-center px-0">${quantity}</td>
  <td class="text-center px-0">${aisle}</td>
  <td class="text-center px-0">$${price}</td>
  <td class="text-center px-0"><button type="button" class="btn btn-outline-dark"
          data-toggle="modal" data-target="#editModal">Edit</button><i class="far fa-trash-alt ml-4 product-delete"></i>
  </td>
</tr>
  `;
  document.querySelector(".product-item-list").appendChild(newRow);

  // Add delete functionality to the new items delete button
  newRow.childNodes[9].childNodes[1].addEventListener("click", (e) => {
    e.target.parentElement.parentElement.remove();
  });
};

// On form submit, add new product to the page
document.querySelector(".product-form").addEventListener("submit", (e) => {
  // Prevent page reload
  e.preventDefault();

  // Get form values
  let productAisle = document.querySelector("#productAisle").value;
  let productQuantity = parseInt(
    document.querySelector(".add-product-qty").value
  );
  let productPrice = parseFloat(
    document.querySelector(".add-product-price").value
  ).toFixed(2);
  let productName = document.querySelector("#productName").value.trim();
  if (!productName) {
    alert("Cannot create product without a name!");
    return;
  }

  // Create the product with the new form values
  createProduct(productName, productAisle, productQuantity, productPrice);
  // Close the modal
  $("#ProductModal").modal("toggle");
  return false;
});

// Add product increase quantity button
document.querySelector(".cart-increase").addEventListener("click", (e) => {
  let quantity = document.querySelector(".add-product-qty");
  quantity.value = parseInt(quantity.value) + 1;
});

// Add product decrease quantity button
document.querySelector(".cart-decrease").addEventListener("click", (e) => {
  let quantity = document.querySelector(".add-product-qty");
  if (parseInt(quantity.value) - 1 <= 0) {
    quantity.value = 0;
  } else {
    quantity.value = parseInt(quantity.value) - 1;
  }
});

//---------- REMOVE PRODUCT FROM LIST FUNCTIONALITY ----------/

const deleteButtons = [...document.getElementsByClassName("product-delete")];

for (let i = 0; i < deleteButtons.length; i++) {
  deleteButtons[i].addEventListener("click", (e) => {
    let row = e.target.parentElement.parentElement;
    row.remove();
  });
}

//---------- EDIT MODAL FUNCTIONALITY ----------//

// Increase
document.querySelector(".edit-increase").addEventListener("click", (e) => {
  let quantity = document.querySelector("#editProductQuantity");
  quantity.value = parseInt(quantity.value) + 1;
});

// Decrease
document.querySelector(".edit-decrease").addEventListener("click", (e) => {
  let quantity = document.querySelector("#editProductQuantity");
  if (parseInt(quantity.value) - 1 <= 0) {
    quantity.value = 0;
  } else {
    quantity.value = parseInt(quantity.value) - 1;
  }
});


// Submit handler to return form data
document.querySelector('.edit-product-form').addEventListener('submit', (e) => {
  e.preventDefault();
  submitHandler();
});

//---------- EDIT ENTRY FUNCTIONALITY ----------//

// Get all edit buttons
const editButtons = document.getElementsByClassName("edit-btn");

for (let i = 0; i < editButtons.length; i++) {
  // Add onClick listener
  editButtons[i].addEventListener('click', (e) => {
    let thisRow = e.target.parentElement.parentElement;
    let editForm = document.querySelector('.edit-product-form');

    // Submit handler function to get form data and reset form
    let submitHandler = function(e) {
      e.preventDefault();
      let productName = document.querySelector('#editProductName').value;
      let productQuantity = document.querySelector('#editProductQuantity').value;
      let productPrice = document.querySelector('#editProductPrice').value;
      thisRow.childNodes[1].childNodes[1].childNodes[1].textContent = productName;
      thisRow.childNodes[3].textContent = productQuantity;
      thisRow.childNodes[7].textContent = `$${productPrice}`;
      document.querySelector('#editProductName').value = "";
      document.querySelector('#editProductQuantity').value = "1";
      document.querySelector('#editProductPrice').value = "";
      $("#editModal").modal("toggle");
      
      editForm.removeEventListener('submit', submitHandler);
    }
    editForm.addEventListener('submit', submitHandler);
    $('#editModal').on('hidden.bs.modal', function () {
      editForm.removeEventListener('submit', submitHandler);
    });
  });
  
}
