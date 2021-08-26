<?php include("../../../resources/templates/front/productHeader.php"); ?>
<?php include("../../../resources/templates/front/productLogin.php"); ?>
    <!-- Breadcrumb for item -->
    <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item">
        <a class="text-dark" href="./index.php">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a class="text-dark" href="./baked.php">Baked Goods</a>
      </li>
      <li class="breadcrumb-item active">Strawberry Cake</li>
    </ol>

    <!-- ITEM DESCRIPTION -->
    <?php display_product('Strawberry Short Cake', 'baked'); ?>
    <?php add_product_buttons('Strawberry Short Cake');?>


    <?php include("../../../resources/templates/front/productFooter.php") ?>
  </body>
</html>
