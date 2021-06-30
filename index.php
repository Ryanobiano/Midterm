<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<style>
		body{
			background-image: url(bbbb.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		.boxer{
			width: 320px;
			height: 400px;
			color: #004444;
			top: 45%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			border-radius: 20px;
			padding: 30px 30px;
		}
		.boxer h2 {
			margin: 0;
			padding: 0;
			font-weight: bold;
			color: red;
			font-size: 35px;
			text-align: center;
		}
		.boxer p {
			position: absolute;
			top: 80px;
			margin: 0;
			padding: 0;
			font-weight: bold;
			color: white;			
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
			text-align: center;	
		}
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #52b788;
			color: #fff;
			font-size: 18px;
			border border-radius: 20px;
		}
		.ca{
			color: cyan;
		}
</style>
</head>
<body>

     <form action="login.php" method="post">
     	<div class="boxer">
            <center></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<h2>LOGIN</h2>
		<br>
		<br>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<input type="password" name="password" placeholder="Password"><br>
            
        <input type="submit" value="Login">
<a href="logout.php" class="ca"></a><br/><br>
			<a href="changpass.php" class="ca">Forgot Password</a>&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="signup.php" class="ca">Create Account</a><br><br>
     	    
          
     </form>
</body>
</html>