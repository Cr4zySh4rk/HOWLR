<?php
require 'db/config.php';
if(!empty($_SESSION["id"])){
  header("Location: landing.php");
}
if(isset($_POST["signup"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email has already been registered!'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user (name,username,email,password) VALUES ('$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful.'); </script>";
    }
    else{
      echo
      "<script> alert('Passwords don't match!'); </script>";
    }
  }
}
?>
<?php
require 'db/config.php';
if(!empty($_SESSION["id"])){
  header("Location: landing.php");
}
if(isset($_POST["login"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: landing.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login & Signup</title>
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login as user</div>
        <div class="title signup">&nbsp;&nbsp;Signup as user</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Sign up</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="" class="login" method="post">
            <div class="field">
              <input type="text" name="usernameemail" placeholder="Username or Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="login" value="Login" id="myButton">
            </div>
            <div class="signup-link">New member? <a href="">Sign up</a></div>
          </form>
          <form action="" class="signup" method="post" autocomplete="off">
            <div class="field">
              <input type="text" name="name" placeholder="Name" required value="">
            </div>
            <div class="field">
              <input type="text" name="username" placeholder="Username" required value="">
            </div>
            <div class="field">
              <input type="email" name="email" placeholder="Email Address" required value="">
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required value="">
            </div>
            <div class="field">
              <input type="password" name="confirmpassword" placeholder="Confirm password" required value="">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="signup" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

  </body>
</html>
