<?php include('config.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Movie Ticket Booking System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo">
			    <a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>
			<div class="nav-wrap">
				<ul class="group" id="example-one">
				   <li><a href="index.php">Home</a></li>
				   <li><a href="movies_events.php">Movies</a></li>
				   <?php if(isset($_SESSION['user'])){
				   $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        			$user=mysqli_fetch_array($us);?>
				   <li><a href="profile.php">Welcome, <?php echo $user['name'];?></a></li>
				   <li><a href="logout.php">Logout</a></li>
				   <?php } else {?>
				   <li><a href="login.php">Login</a></li>
				   <li><a href="registration.php">Register</a></li>
				   <?php }?>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="block">
		<div class="wrap">
			<?php include('searchbar.php'); ?>
			<div class="clear"></div>
		</div>
	</div>
</div>