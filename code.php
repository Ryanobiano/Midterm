<html>
	<head>
				<style>
		body{
			margin: 0;
			padding: 0;
			background: url(uno.jpg);
			background-size: auto;
			background-position: center;
			font-family: 'Poppins', sans-serif;
		}
		.boxer{
			width: 320px;
			height: 400px;
			color: dimgray;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			border-radius: 20px;
			padding: 30px 30px;
		}
		h2{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
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
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #52b788;
			color: #fff;
			font-size: 18px;
			border border-radius: 20px;
		}
</style>
		<title>
			
			</title>
		</head>
	<body>
		<form action="codex.php" method="post">
			<div class="boxer">
		
		<center><p><h2>Enter your Username</h2></p></center>
		<br><br><br>
			
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
          <?php }?>
			<input type="submit" value="Send">
		</form>
	<?php 
?> </div>
		</body>
	</html>

