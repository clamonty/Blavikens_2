<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<button type="button" class="btn btn-outline-dark add-product-btn" style="margin-bottom: 2em;" data-toggle="modal"
    data-target="#ProductModal">Add Products</button>
<div id="ProductModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-auto" id="exampleModalLabel">Add a Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">

                <form class="product-form" method="post" action="addProductModal.php">
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="product" id="productName" class="form-control" name="prodName"
                            placeholder="Enter product name">
                    </div>

                    <div class="form-group">
                        <label for="productAisle">Choose an aisle: </label>
                        <select id="productAisle" name="productAisle">
                            <option value="Fruits and Vegetables">Fruits and Vegetables</option>
                            <option value="Meats">Meats</option>
                            <option value="Dairy">Dairy</option>
                            <option value="Grains and Pasta">Grains and Pasta</option>
                            <option value="Drinks and Spices">Drinks and Spices</option>
                            <option value="Baked Goods">Baked Goods</option>
                            <option value="Frozen Foods">Frozen Foods</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Product Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Enter product description"></textarea>
                    </div>
                    <div class="input-group">
                        <label for="productQuantity">Quantity</label>
                        <input type="text" class=" text-center mr-2 add-product-qty" id="productQuantity" value="1" name="prodQuantity">
                        <div class="d-flex flex-column ml-2 justify-content-center">
                            <i class="fas fa-chevron-up cart-increase"></i>
                            <i class="fas fa-chevron-down cart-decrease"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Price</label>
                        <input type="number" id="productPrice" min="0" step="0.01" class="form-control add-product-price"
                            >
                    </div>
                    <div class="modal-footer unique-div-2">
                        <!-- <input id="save" class="btn btn-dark save-details" type="submit" name="save" value="Save"></input> -->
                        <button id="save-product" class="btn btn-dark save-details" type="submit" name="save">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>


        </div>

    </div>
</div>

<?php

if(isset($_POST['save'])){
    $product_name = $_POST['prodName'];
    $product_aisle = $_POST['productAisle'];
    $product_quantity = $_POST['prodQuantity'];
    $product_price = $_POST['productPrice'];
    echo "$product_name; $product_aisle; $product_quantity; $product_price";
    print_r("$product_name; $product_aisle; $product_quantity; $product_price");
}
function php_func(){
    $xml_location = "../../resources/data/products.xml";
    $product_list = simplexml_load_file($xml_location);
    $product = $product_list->addChild("product");
    $product->addChild("prod_name", "test");
    $product_list->asXML($xml_location);
}
?>