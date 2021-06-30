<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"test_db");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
</head>
<body>
<style>
		body{
			margin: 0;
			padding: 0;
			background: url(cccc.jpg);
            background-size: cover;
			background-attachment: fixed;
			font-family: 'Poppins', sans-serif;
		}
		.boxer{
			width: 320px;
			height: 400px;
			
			color: white;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 30px 30px;
		}
		h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			color: red;
		}
		.boxer p {
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: white;
			font-size: 16px;	
		}
		.boxer input[type="email"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: white;
			font-size: 16px;	
		}
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #000000;
			color: #fff;
			font-size: 18px;
			border border-radius: 20px;
		}
		a{
			color: yellow;
			font-size: 29px;
		}
		#btn{
			font-family: sans-serif;
			font-size: 20px;
			font-weight: bolder;
			color: white;
			border-radius: 20px;
			background: none;
			padding: 10px;
			width: 40%;
		}
		#btn:hover{
			opacity: .7;
			background-color: #fe7f2d;
		}
</style>

<div class="boxer">
				<center><h1>Sign Up</h1></center>
				<form action="#" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required= ""/>
					<input class="text email" type="email" name="email" placeholder="Email" required=""/>
					<input class = "text" type="password" id="password" name="password" placeholder = "Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<input class = "text w3lpass" type="password" id="password1" name="password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
	
					<center><button id="btn" class = "submit" type="submit" value="Sign Up" name = "submit">Sign Up</button></center>
				</form>	
				<p><center><a href="login.php"> Login Now!</a></center></p>
			
<?php

if(isset($_POST['submit'])){
	

$n1=$_POST['username'];
$n2=$_POST['password'];
$n3=$_POST['email'];

$stmt="INSERT INTO users (username,password,email)VALUES('$n1','$n2','$n3')";

if(mysqli_query($link,$stmt)){
	header("Location: login.php");
}
else{
	echo "fail";
}
}
?>

</body>
</html>