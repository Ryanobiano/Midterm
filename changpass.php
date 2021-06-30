<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<style>
		body{
			margin: 0;
			padding: 0;
			background: url(code.jpg);
			background-size: cover;
			background-attachment: fixed;
			font-family: 'Poppins', sans-serif;
		}
		.boxer{
			width: 320px;
			height: 450px;
			color: #004444;
			top: 50%;
			left: 20%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			border-radius: 20px;
			padding: 30px 30px;
		}
		h2{
			margin: 0;
			padding: 0;
			color: red;
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
		.ca{
			color: cyan;
		}
		.error{
			color: white;
		}
</style>
</head>
<body>
	<div class="boxer">
     <form action="foxcheck.php" method="post">
     	<center><p><h2>FORGOT PASSWORD</h2></p></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


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


     	
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

        
          <input type="password" 
                 name="re_password" 
                 placeholder=" Confirm Password"><br>
<a href="index.php" class="ca">Already have an account?</a><br><br>
     	<input type="submit" value="Update Password">
          
     </form>
</body>
</html>