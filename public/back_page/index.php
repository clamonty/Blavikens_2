<?php session_start(); ?>
<?php include('../../resources/templates/back/back_header.php'); ?>
<?php 
  if($_SESSION['user-status'] != 'admin') {
    header("Location: ../front_page");
  }
?>

    
  </body>
</html>
