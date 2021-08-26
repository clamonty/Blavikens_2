<?php session_start(); ?>
<?php 
  if($_SESSION['user-status'] != 'admin') {
    header("Location: ../front_page");
  }
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
                    ?>
                    
                    <?php
                        include('../../resources/templates/front/editProductModal.php');
                    ?>
                </tbody>
            </table>


        </div>
    </div>

    <script src="./productList.js"></script>
</body>
</html>