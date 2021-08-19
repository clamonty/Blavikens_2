<?php include("../../resources/templates/front/header.php"); ?>
    <!-- Modal -->
<?php include("../../resources/templates/front/login.php"); ?>
<?php
  if(isset($_POST['register_user'])) {

  }

?>
  <div class="section signup-form">
    <p class="h1 text-center py-5">Sign up now for exclusive rewards!</p>
    <form class="container" action="registration.php" method="post"> 
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="SignupFirstName" placeholder="Username" name="username" required>
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="SignupEmail" placeholder="Email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password1">Password</label>
        <input type="password" class="form-control" id="SignupPassword1" placeholder="Password" name="password1" required>
      </div>
      <div class="form-group">
        <label for="password2">Re-Enter Password</label>
        <input type="password" class="form-control" id="SignupPassword2" placeholder="Password" name="password2" required>
      </div>
      <button type="submit" name="register_user" class="btn btn-lg btn-secondary">Sign me up!</button>
    </form>
  </div>
  <?php include("../resources/templates/front/footer.php") ?>
  <script>
  </script>
  </body>
</html>
