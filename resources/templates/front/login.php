<?php include('../../resources/config.php'); ?>
<?php   
if(isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password1'];
    $userStatus = "invalid";
    $_SESSION['user_name'] = $_POST['email'];
    $xml = simplexml_load_file('../../resources/data/users.xml') or die("Error: Cannot create object");

    foreach($xml->children() as $user) {
      if($user->email == $email && $user->password == $password) {
        if($user->type == "admin") {
          $userStatus = "admin";
          break;
        } else if ($user->type == "base") {
          $userStatus = "base";
          break;
        } else {
          $userStatus = "invalid";
        }
      }
    }

    if($userStatus == "admin") {
      $_SESSION['user-status'] = "admin";
      header("Location: ../back_page");
    } else if ($userStatus == "base") {
      $_SESSION['user-status'] = "base";
      header("Location: ../front_page");
    } else {
      echo "<h1>Invalid user</h1>";
      session_destroy();
    }
  }
?>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ml-auto" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action = "" method="post">
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="UserEmail" class="form-control" placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group pb-0">
            <label for="password1">Password</label>
            <input type="password" class="form-control" id="UserPassword" name="password1" required>
          </div>
          <button type="submit" class="btn btn-secondary mx-auto" name="login" >Login</button>
          <button type="button" class="btn btn-dark">Forgot your password?</button>
        </form>
      </div>
      <div class="modal-body border-top">
        <p>Don't have an account with us yet? You can <a href="./signup.php">sign up here!</a></p>
      </div>
    </div>
  </div>
</div>