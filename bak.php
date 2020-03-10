<?php
 session_start(); 

	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		$action = '';
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
			$action = '<li><a href="#" id="link">My Products</a></li>';
		}
		else {
				$link = "profileView.php";
			$action = '<li><a href="#" id="link">My Products</a></li>';

		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AgroCulture</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<style>
		.dropdown-menu{
			background: rgba(0,0,0,.4);
		}
		a#link:hover{
			background-color: rgba(0,0,0);
			color: white;
		}

		</style>
	</head>

			<header id="header">
				<h1><a href="index.php">AgroCulture</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="market.php"><span class="glyphicon glyphicon-grain"> Market</a></li>
						<li><a href="blogView.php"><span class="glyphicon glyphicon-comment"> Farmer-Tips</a></li>
						<li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
						<li style="line-height: 1em;">
						<?php
						if (!empty($_SESSION['id'])&&isset($_SESSION['id'])) {
							?>
							
							<div class="dropdown">
								<a href="#" data-target="#" class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<?php echo  "<span class='".$logo."'></span> ".$loginProfile; ?><span class="caret"></span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="color:black">
									<?php echo $action?>
										<li><a href="#" id="link">Orders</a></li>
										<li><a href="profile.php" id="link">My profile</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="Login/logout.php" id="link" >Logout</a></li>
									</ul>
							</div>
							
							
							
							<?php

						} else
						{
							?>
							<li>
								<button class="btn btn-sm" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
							</li>
							<li>
								<button class="btn btn-sm" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER</button>
							
							</li>
							
							
							<?php
						}
						
						
						?>
					
							
						</li>
					</ul>
				</nav>
			</header>

	</body>
</html>
