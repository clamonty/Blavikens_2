<?php require_once('../../../resources/config.php'); ?>

<?php include("../../../resources/templates/front/productHeader.php"); ?>
    <!-- Modal -->
<?php include("../../../resources/templates/front/productLogin.php"); ?>
    <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item"><a class="text-dark" href="../index.php">Home</a></li>
      <li class="breadcrumb-item active">Fruits & Vegetables</li>
    </ol>
    
    <!-- AISLE SECTION -->
    <div class="container d-flex flex-wrap justify-content-center">
      <?php display_aisle("Fruits and Vegetables"); ?>
    </div>

    <?php include("../../../resources/templates/front/footer.php") ?>
  </body>
</html>
