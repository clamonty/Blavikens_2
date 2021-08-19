<?php include("../../resources/config.php"); 
      session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script
      src="https://kit.fontawesome.com/68c5ed42bd.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../style.css"/>

    <title>Blaviken's Bacon</title>
  </head>
  <body>
    <!-- HEADER SECTION -->
    <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
      <a href="../front_page/index.php" class="navbar-brand"
        ><img class="logo img-fluid" src="../../img/logo.png" alt="Grocery Logo"
      /></a>
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#collapse_target"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav w-100 d-flex justify-content-around">
          <li class="nav-item">
            <a href="./index.php" class="nav-link text-dark font-weight"
              >Home</a
            >
          </li>
          <li class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle text-dark"
              id="aisle_dropdown"
              data-toggle="dropdown"
              >Aisles</a
            >
            <div class="dropdown-menu">
              <a href="./Fruits And Vegetables/vegetables.php" class="dropdown-item"
                >Fruits and Vegetables</a
              >
              <a href="./Meats/meats.php" class="dropdown-item">Meats</a>
              <a href="./Dairy/dairy.php" class="dropdown-item">Dairy</a>
              <a href="./Grains and Pasta/grains.php" class="dropdown-item">Grains & Pasta</a>
              <a href="./Drinks and Spices/spices.php" class="dropdown-item">Drinks & Spices</a>
              <a href="./Baked Goods/baked.php" class="dropdown-item">Baked Goods</a>
              <a href="./Frozen Foods/frozen.php" class="dropdown-item">Frozen Foods</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="./shoppingcart.php" class="nav-link text-dark"
              ><i class="fas fa-shopping-cart mr-2"></i>Shopping Cart</a
            >
          </li>
          <?php
            if(!isset($_SESSION['user_name'])){
              echo '<li class="nav-item"><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#loginModal"><i class="fas fa-user mr-2"></i>Signup / Login</button></li>';
            } else {
              echo '<li class="nav-item">Welcome ', $_SESSION['user_name'], '!</li>';
              echo "<li class='nav-item'><a href='./logout.php' class='nav-link text-dark'>Logout</a></li>";
            }
          ?>
          <!-- <li class="nav-item"><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#loginModal"><i class="fas fa-user mr-2"></i>Signup / Login</button></li>

          <li class='nav-item'><a href='./logout.php' class='nav-link text-dark'>Logout</a></li> -->
        </ul>
      </div>
    </nav>