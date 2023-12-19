
<?php
include "db.php";
session_start();
if(isset($_POST['submit'])){
$username = $_POST['name'];
$password = $_POST['pass'];

$user_search = "select * from userlist where username='$username'";

$query=mysqli_query($conn,$user_search);
$user_count = mysqli_num_rows($query);
if($user_count){
$row = mysqli_fetch_assoc($query);
if($password ==$row['passwords']){
	echo "            login Sucessfully";

	header('location:faltuCodeonlinestudy.php');
	$_SESSION['userName']=$username;

}
else{
	echo "           password is incorrect";
}
}
else{
	echo "          Invalid Username";
}
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="loginForm.css">
</head>
<body>
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="#"><img src="" alt="">Return home</a></div>
				<div class="contact">
					<form action="loginForm.php" method="post">
						<h3>SIGN IN</h3>
						<input type="text" placeholder="USERNAME" name="name">
						<input type="text" placeholder="PASSWORD" name="pass">
					    <span>Don't have account? Register.</span>
						<button class="register"> <a href="signUp.php" style=" text-decoration: none; color:white;"> REGISTER </a> </button>
						<button type="submit" class="submit" name="submit">LET'S GO</button>
						
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>faltuCoder</h2>
					<h5>A EDTECH & MENTORSHIP COMPANY</h5>
				</div>
				<div class="right-inductor"><img src="" alt=""></div>
			</div>
		</div>
	</section>
</body>
</html>