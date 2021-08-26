<?php include("../../resources/templates/front/header.php"); ?>
    <!-- Modal -->
<?php include("../../resources/templates/front/login.php"); ?>
<?php 
  session_start();
  // init cart
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }

  // clear cart
  if(isset($_GET['clear_cart'])) {
    $_SESSION['cart'] = [];
  }
?>
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
          <?php
          foreach($_SESSION['cart'] as $key => $val) {
            $xml = simplexml_load_file('../../resources/data/products.xml');
            $item;
            foreach($xml->children() as $product) {
              if($product->itemNb == $key) {
                $item = $product;
                break;
              }
            }
            $totalPrice = $item->prod_price * $val;
            echo "<tr class='cart-row'>
            <th scope='row' class='px-0'>
              <div class='d-flex align-items-center flex-column'>
                <img src='{$item->prod_img}' alt='' class='cart-img'>
                <p class='align-self-center'>{$item->prod_name}</p>
              </div>
            </th>
            <td class='text-center align-middle px-0 cart-price-single'>\${$item->prod_price}</td>
            <td class='w-25 align-middle '>
              <div class='input-group'>
                <input type='text' class='form-control text-center' value='{$val}'>
                <div class='d-flex flex-column ml-2 justify-content-center'>
                  <i class='fas fa-chevron-up cart-increase'></i>
                  <i class='fas fa-chevron-down cart-decrease'></i>
                </div>
              </div>
            </td>
            <td class='text-center px-0 align-middle cart-price-total'>\${$totalPrice} <i class='far fa-trash-alt ml-4 cart-delete' data-identifier='{$key}'></i></td>
          </tr>";

          }
          ?>
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
    <a href="./index.php" class="continue-shopping btn btn-lg btn-outline-dark px-3 py-2 mb-2">Continue Shopping</a>
    <button type="button" class="checkout-btn btn btn-lg btn-success px-5 py-2">Checkout Now</button>
    <a class='btn btn-lg px-3 py-2 mt-2 btn-outline-danger' href='<?php echo $_SERVER["PHP_SELF"];?>?clear_cart=1'>Clear Cart</a>
  </div>

  <?php include("../../resources/templates/front/footer.php") ?>
    <script src="./shoppingCart.js"></script>
    <script src="./foodItems.json"></script>
  </body>
</html>
