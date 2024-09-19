<!DOCTYPE html>
<?php 
	session_start();
	include('include/sqlconnection.php'); 
	$sql = "SELECT * FROM mynavbar, menu1";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
?>

<html lang="en">
	<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Froilan Delfin Jr.</title>	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/navbar.css">
		<link rel="stylesheet" href="css/mainpage.css">
		<link rel="stylesheet" href="css/tanker.css">
		<link rel="stylesheet" href="css/clash-display.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
            	<div class="navbar-header">
					<a class="navbar-brand" href="index.php" name="title"><?=$data['name']?></a>
            	</div>
            	<ul class="nav navbar-nav">
                	<li><a href="index.php" name="home" style="color:black;"><?=$data['tab1']?></a></li>
					<li><a href="aboutme.php" name="aboutme"><?=$data['tab2']?></a></li>
                	<li><a href="certifications.php" name="certifications"><?=$data['tab3']?></a></li>
                	<li><a href="contactme.php" name="contactme"><?=$data['tab4']?></a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
            	</ul>
        	</div>
    	</nav>
		
		<div class="content">
    		<?php
        		echo "<h2>{$data['first']}</h2>
              	<h1>{$data['second']}</h1>
              	<h2>{$data['third']}</h2>
              	<img src='img/{$data['image']}'>
        		";
    		?>
</div>
   </body>
</html>