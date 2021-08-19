<?php include("../../resources/templates/front/header.php"); ?>
    <!-- Modal -->
<?php include("../../resources/templates/front/login.php"); ?>

  <!-- SHOPPING CART SECTION -->
  <div class="shopping-cart">
    <div class="container">
      <h1 class="text-center py-4">Your Shopping Cart</h1>
      <table class="table">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr class="cart-row">
            <th scope="row" class="px-0">
              <div class="d-flex align-items-center flex-column">
                <img src="./img/dairy/cheese.jpg" alt="" class="cart-img">
                <p class="align-self-center">Cheese</p>
              </div>
            </th>
            <td class="text-center align-middle px-0 cart-price-single">$20.00</td>
            <td class="w-25 align-middle ">
              <div class="input-group">
                <input type="text" class="form-control text-center cart-count" value="1">
                <div class="d-flex flex-column ml-2 justify-content-center">
                  <i class="fas fa-chevron-up cart-increase"></i>
                  <i class="fas fa-chevron-down cart-decrease"></i>
                </div>
              </div>
            </td>
            <td class="text-center px-0 align-middle cart-price-total">$20.00<i class="far fa-trash-alt ml-4 cart-delete"></i></td>
          </tr>
          <tr class="cart-row">
            <th scope="row" class="px-0">
              <div class="d-flex align-items-center flex-column">
                <img src="./img/dairy/eggs.jpg" alt="" class="cart-img">
                <p class="align-self-center">Eggs</p>
              </div>
            </th>
            <td class="text-center align-middle px-0 cart-price-single">$20.00</td>
            <td class="w-25 align-middle ">
              <div class="input-group">
                <input type="text" class="form-control text-center" value="1">
                <div class="d-flex flex-column ml-2 justify-content-center">
                  <i class="fas fa-chevron-up cart-increase"></i>
                  <i class="fas fa-chevron-down cart-decrease"></i>
                </div>
              </div>
            </td>
            <td class="text-center px-0 align-middle cart-price-total">$20.00<i class="far fa-trash-alt ml-4 cart-delete"></i></td>
          </tr>
          <tr class="cart-row">
            <th scope="row" class="px-0">
              <div class="d-flex align-items-center flex-column">
                <img src="./img/meat/bacon.jpg" alt="" class="cart-img">
                <p class="align-self-center">Bacon</p>
              </div>
            </th>
            <td class="text-center align-middle px-0">$20.00</td>
            <td class="w-25 align-middle ">
              <div class="input-group">
                <input type="number" class="form-control text-center" value="1">
                <div class="d-flex flex-column ml-2 justify-content-center">
                  <i class="fas fa-chevron-up cart-increase"></i>
                  <i class="fas fa-chevron-down cart-decrease"></i>
                </div>
              </div>
            </td>
            <td class="text-center px-0 align-middle">$20.00<i class="far fa-trash-alt ml-4 cart-delete"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="container w-75">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Subtotal - <span class="subtotal-amount">$60.00</span></h5>
        <h6 class="card-subtitle mb-2 text-muted">QST - <span class="qst-amount">$6.00</span></h6>
        <h6 class="card-subtitle mb-2 text-muted">GST - <span class="gst-amount">$3.00</span></h6>
      </div>
      <div class="card-footer">
        <h4 class="card-title font-weight-bold mb-0">Total - <span class="total-amount">$69.00</span></h4>
      </div>
    </div>
  </div>

  <div class="d-flex flex-column w-50 mx-auto text-center mt-5">
    <button type="button" class="continue-shopping btn btn-lg btn-outline-dark px-3 py-2 mb-2">Continue Shopping</button>
    <button type="button" class="checkout-btn btn btn-lg btn-dark px-5 py-2">Checkout Now</button>
    
  </div>

  <?php include("../resources/templates/front/footer.php") ?>
    <script src="./shoppingCart.js"></script>
    <script src="./foodItems.json"></script>
  </body>
</html>
