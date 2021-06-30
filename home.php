
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	body{
			margin: 0;
			padding: 0;
			background: url(aaaa.png);
			background-size: cover;
			background-attachment: fixed;
			font-family: 'Poppins', sans-serif
			background-repeat: no-repeat;		
		}
    	h1{
            margin: 0 auto;
            color: white;
            text-align: center;
        }
       
       	h3 a{
       		color: cyan;
       	}
       	.btn {
			font-family: sans-serif;
			font-size: 20px;
			font-weight: bolder;
			color: white;
			border-radius: 20px;
			background: none;
			padding: 10px;
			width: 10%;
       	}
       	.btn:hover{
       		opacity: .7;
			background-color: #293241;
       	}
       	h2 a{
       		color: #89c2d9;;
       	}
		</style>
	<title>HOME</title>
	
</head>
<body>
	 <br><br><br><br><br>
		<br><br><br>
		<br><br><br><br><br>
		<br><br><br>
	
     <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
	<h3><center><a href="display.php" >View Activity</a> </center></h3>
   <h2><center><button class="btn">  <a href="logout.php"><label>Logout</label></a> </button></center><br/></h2>
	

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            