<?php include ('../../../config.php'); ?>
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
    <link rel="stylesheet" href="../style.css" />
    <script src="../../../public/front_page/productpage.js" defer></script>
    <title>Blaviken's Frozen Pizza</title>
  </head>
  <body>
    <!-- HEADER SECTION -->
    <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
      <h2 class="font-italic pt-1">Admin</h2>
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
            <a href="./orderlist.php" class="nav-link text-dark font-weight-bold"
              ><i class="fas fa-clipboard-list"></i> Order List</a
            >
          </li>
          <li class="nav-item">
            <a href="./productlist.php" class="nav-link text-dark font-weight-bold"
              ><i class="fas fa-chart-bar"></i> Product List</a
            >
          </li>
          <li class="nav-item">
            <a href="./userlist.php" class="nav-link text-dark font-weight-bold"
              ><i class="fas fa-chart-bar"></i> User List</a
            >
          </li>
          <li class='nav-item'><a href='./logout.php' class='nav-link text-dark'>Logout</a></li>
        </ul>
      </div>
    </nav>