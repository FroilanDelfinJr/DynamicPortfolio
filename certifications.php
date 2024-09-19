<!DOCTYPE html>
<?php 
	session_start();
	include('include/sqlconnection.php'); 
	$sql = "SELECT * FROM mynavbar, menu3";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
?>

<html lang="en">
	<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Certificates</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/navbar.css">
    	<link rel="stylesheet" href="css/tanker.css">
    	<link rel="stylesheet" href="css/clash-display.css">

		<style>
			body {
    			background-color: #A67B5B;
    			margin: 0;
			}

			.container h1 {
    			padding-top: 90px;
    			padding-bottom: 30px;
    			font-family: 'ClashDisplay-Medium';
    			font-size: 40px;
    			color: white;
			}

			.container p {
    			font-family: 'Tanker-Regular';
    			font-size: 20px;
    			text-align: center;
    			color: white;
				margin: 0px;
			}

			.title{
				padding-top: 10px;
			}

			.date{
				padding-bottom: 40px;
			}
		</style>

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
                	<li><a href="index.php" name="home"><?=$data['tab1']?></a></li>
					<li><a href="aboutme.php" name="aboutme"><?=$data['tab2']?></a></li>
                	<li><a href="certifications.php" name="certifications" style="color:black;"><?=$data['tab3']?></a></li>
                	<li><a href="contactme.php" name="contactme"><?=$data['tab4']?></a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
            	</ul>
        	</div>
    	</nav>

    	<div class="container">
        	<h1 class="header-title text-center">Certificates</h1>

        	<div class="row justify-content-center">
				<?php
    				for ($i = 1; $i <= 6; $i++) {
        		?>
						<div class="col-sm-6 col-md-6">
                			<a href="<?=$data['link'.$i]?>">
                    			<img src="img/<?=$data['cert'.$i]?>" class="img-thumbnail" alt="Certificate Image <?=$i?>">
                			</a>
                			<p class="title"><?=$data['name'.$i]?></p>
                			<p class="issuer"><?=$data['issuer'.$i]?></p>
                			<p class="date"><?=$data['date'.$i]?></p>
            			</div>
        		<?php
    				}
    			?>
        	</div>
    	</div>
	</body>
</html>