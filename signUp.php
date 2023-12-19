<?php
if(isset($_POST['submit'])){
include 'db.php';
$name = htmlspecialchars($_POST["user"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["pass"]);

$sql = "insert into userlist(id,username,email,passwords) values(NULL,'$name','$email','$password')";
$result = mysqli_query($conn,$sql);
echo "you are succesfully registered ";
header("location:loginForm.php");

}else{
    echo "            You are not registered succesfully";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signUP.css">
</head>
<body>
<div class="container">
      <div class="card">
        <div class="card_title">
          <h1>Create Account</h1>
          <span>Already have an account? <a href="login">Sign In</a></span>
        </div>
        <div class="form">
        <form action="signUp.php" method="post">
          <input type="text" name="user" id="user" placeholder="UserName" />
          <input type="email" name="email" placeholder="Email" id="email" />
          <input type="password" name="pass" placeholder="Password" id="password" />
          <input type="submit" value="Register" name="submit">
          </form>
        </div>
        <div class="card_terms">
            <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="">Terms of Service</a></span>
        </div>
      </div>
    </div>
</body>
</html>
