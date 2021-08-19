<?php include("../../../resources/templates/front/productHeader.php"); ?>
<?php include("../../../resources/templates/front/productLogin.php"); ?>
    <!-- Breadcrumb for item -->
    <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item">
        <a class="text-dark" href="./index.php">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a class="text-dark" href="./frozen.php">Frozen Foods</a>
      </li>
      <li class="breadcrumb-item active">Frozen Pizza</li>
    </ol>

    <!-- ITEM DESCRIPTION -->
    <div class="section row d-flex justify-content-center">
      <div class="col-md-4 item-img">
        <img src="./img/frozen/frozenPizza.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-md-6 item-description">
        <h2 class="mb-4 text-center">Frozen Pizza</h2>
        <h3 class="mb-3 text-center">
          <span class="font-weight-bold total-price" data-price="12.99">Test</span>
          <span class="price-each small"></span>
        </h3>
        <div id="accordion" class="mb-5 w-75 mx-auto">
          <div class="card">
            <div class="card-header px-0" id="headingOne">
              <h5 class="mb-0">
                <button
                  class="btn btn-link text-dark"
                  data-toggle="collapse"
                  data-target="#collapseOne"
                >
                  More Description
                </button>
              </h5>
            </div>
            <div
              id="collapseOne"
              class="collapse"
              data-parent="#accordion"
            >
              <div class="card-body px-3">Stuffed Crust Goodness</div>
            </div>
          </div>
        </div>

        <div class="input-group mb-3 item-count w-50 mx-auto">
          <div class="input-group-prepend">
            <button class="btn btn-outline-secondary decrease-btn" type="button">
              <i class="fas fa-minus"></i>
            </button>
          </div>
          <input type="text" class="form-control text-center item-quantity" placeholder="0"/>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary increase-btn" type="button">
              <i class="fas fa-plus"></i>
            </button>
          </div>
        </div>

        <button type="button" class="btn btn-dark text-center w-50 mx-auto d-block"
          ><i class="fas fa-shopping-cart"></i> Add to cart</button
        >
      </div>
    </div>

    <?php include("../resources/templates/front/footer.php") ?>
  </body>
</html>
