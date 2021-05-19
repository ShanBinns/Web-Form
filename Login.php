<?php

  $failure = false;

  if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == 'user1' && $_POST['password'] == 'open') {
      header('location:Feedback_Form.php');
      return;
    } else {
      $failure = 'Incorrect username or password';
    }
  }

?>

<style>
<?php include 'CSS/Login.css'; ?>
</style>

<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <h1>Hi Customer, please log in</h1>
      <?php
        //To display error message
        if($failure !== false){
          echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
        }
      ?>

      <form method="POST">
        <div class="imgcontainer">
          <img src="img/login.png" alt="Avatar" class="avatar" width="400" height="200">
        </div>

        <label for="username"> <strong>Username</strong></label> <br>
        <input type="text" name="username" placeholder = "username = user1" required><br>

        <label for="password"> <strong>Password</strong></label> <br>
        <input type="password" name="password"  placeholder = "password = open" required><br>

        <button type="submit" name="login" value="Login">Login</button>
        <button class="cancelbtn" type="cancel" name="cancel" value="cancel">Cancel</button>

        <label>
        <br>  <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      </form>
    </div>
  </body>
</html>
