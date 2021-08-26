<?php include("../../resources/templates/front/header.php"); ?>
<!-- Modal -->
<?php include("../../resources/templates/front/login.php"); ?>
<?php
// $xml = simplexml_load_file('../../resources/data/users.xml') or die("Error: Cannot create object");
// $id = count($xml->children()) + 1;
// $type = "base";
// // $username = $_POST['username'];
// // $firstname = $_POST['firstname'];
// // $lastname = $_POST['lastname'];
// // $email = $_POST['email'];
// // $telephone = $_POST['telephone'];
// // $password = $_POST['password'];
// // $newUser = $xml->addChild('user');
// $username = 'steve';
// $firstname = 'steve';
// $lastname = 'joe';
// $email = 'steve@joe.com';
// $telephone = '9999999999';
// $password = 'abc123';
// $newUser = $xml->addChild('user');
// $newUser->addChild('id', $id);
// $newUser->addChild('type', $type);
// $newUser->addChild('username', $username);
// $newUser->addChild('lastname', $lastname);
// $newUser->addChild('firstname', $firstname);
// $newUser->addChild('email', $email);
// $newUser->addChild('telephone', $telephone);
// $newUser->addChild('password', $password);
// echo '<pre>';
// echo $xml->users_list;
// echo '</pre>';
// file_put_contents('../../resources/data/users.xml', $xml->asXML());
if (isset($_POST['add_user'])) {
  $originalXML = simplexml_load_file('../../resources/data/users.xml');
  $xml = new SimpleXMLElement('<user></user>');
  $xml->addChild('id', (count($originalXML->children()) + 1));
  $xml->addChild('type', 'base');
  $xml->addChild('username', $_POST['username']);
  $xml->addChild('lastname', $_POST['lastname']);
  $xml->addChild('firstname', $_POST['firstname']);
  $xml->addChild('password', $_POST['password1']);
  $xml->addChild('telephone', $_POST['telephone']);
  $xml->addChild('email', $_POST['email']);
  $originalXML->addChild('user', $xml);
  $originalXML->asXML('../../resources/data/users.xml');
  header('Location: ./index.php');
  die;
}




?>
<div class="section signup-form">
  <p class="h1 text-center py-5">Sign up now for exclusive rewards!</p>
  <form class="container" action="" method="post">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" required>
      </div>
      <div class="form-group col-md-6">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" required>
      </div>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
    </div>
    <div class="form-group">
      <label for="telephone">Telephone</label>
      <input type="tel" class="form-control" id="telephone" name="telephone" required>
    </div>
    <div class="form-group">
      <label for="password1">Password</label>
      <input type="password" class="form-control" id="password1" placeholder="Password" name="password1" required>
    </div>
    <div class="form-group">
      <label for="password2">Re-Enter Password</label>
      <input type="password" class="form-control" id="password2" placeholder="Password" name="password2" required>
    </div>
    <div class="pb-3" id="message"></div>
    <input id="add_user" name="add_user" disabled type="submit" class="btn btn-lg btn-secondary" value="Sign me up!">

  </form>

</div>
<?php include("../resources/templates/front/footer.php") ?>
<script src="signup.js"></script>
</body>

</html>