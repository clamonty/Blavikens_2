<?php session_start(); ?>
<?php 

    if($_SESSION['user-status'] != 'admin') {
        header("Location: ../front_page");
    }
    error_reporting(E_ERROR | E_PARSE);
?>
<?php require_once('../../resources/config.php'); ?>
<?php include("../../resources/templates/back/back_header.php"); ?>
    <!-- Modal -->
<?php include("../../resources/templates/front/signupModal.php"); ?>

    <!-- Inventory-->
    <div class="inventory">
        <div class="container">
            <h1 class="text-center py-4">Product List</h1>

            <!-- Add Product Modal -->
            <?php include("../../resources/templates/front/addProductModal.php"); ?>


            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">Product</th>
                        <th scope="col">Quantity Available</th>
                        <th scope="col">Aisle</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody class='product-item-list'>
                    <?php
                        $products=simplexml_load_file("../../resources/data/products.xml");
                        foreach($products->product AS $product){?>
                            <tr>
                                <th scope="row" class="px-0">
                                    <div class="d-flex align-items-center flex-column">
                                        <p class="align-self-center"><?php echo $product->prod_name;?></p>
                                    </div>
                                </th>
                                <td class="text-center px-0"><?php echo $product->prod_count;?></td>
                                <td class="text-center px-0"><?php echo $product->prod_aisle;?></td>
                                <td class="text-center px-0">$<?php echo $product->prod_price;?></td>
                                <td class="text-center px-0"><button type="button" class="btn btn-outline-dark edit-btn"
                                        data-toggle="modal" data-target="#editModal">Edit</button>
                                        <i class="far fa-trash-alt ml-4 product-delete"></i>
                                </td>
                            </tr>
                        <?php }
                        include('../../resources/templates/front/editProductModal.php');
                    ?>
                </tbody>
            </table>


        </div>
    </div>

    <script src="./productList.js"></script>
</body>
</html>