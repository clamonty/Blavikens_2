<?php session_start();?>
<?php include("../../resources/templates/front/header.php"); ?>
    <!-- Modal -->
<?php include("../../resources/templates/front/login.php"); ?>
<?php include('../../resources/templates/front/hero.php'); ?>

  <div class="daily-selection">
    <div class="container">
      <h1 class="text-center p-5">Today's Healthy Selection</h1>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- slider 1 -->
          <div class="carousel-item active">
            <div class="row ml-auto mr-auto">
              <div class="col-4"><a href="./Fruits And Vegetables/banana.php"><img class="d-block w-100" src="../img/fruit/banana.jpg" alt="banana"></a></div>
              <div class="col-4"><a href="../Fruits And Vegetables/pear.php"><img class="d-block w-100" src="../img/fruit/pear.jpg" alt="pear"></a></div>
              <div class="col-4"><a href="../Fruits And Vegetables/raspberry.php"><img class="d-block w-100" src="../img/fruit/raspberry.jpg" alt="raspberry"></a></div>
            </div>
          </div>
          <!-- slider 2 -->
          <div class="carousel-item">
            <div class="row ml-auto mr-auto">
              <div class="col-4"><a href="../Fruits And Vegetables/corn.php"><img class="d-block w-100" src="../img/veg/corn.jpg" alt="corn"></a></div>
              <div class="col-4"><a href="../Fruits And Vegetables/broccoli.php"><img class="d-block w-100" src="../img/veg/broccoli.jpg" alt="broccoli"></a></div>
              <div class="col-4"><a href="../Fruits And Vegetables/beets.php"><img class="d-block w-100" src="../img/veg/beets.jpg" alt="beets"></a></div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>


  <?php include("../../resources/templates/front/footer.php") ?>
</body>
</html>