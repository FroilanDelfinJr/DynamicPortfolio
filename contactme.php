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
        <title>Contact Me</title>	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/navbar.css">
		<link rel="stylesheet" href="css/contactme.css">
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
                	<li><a href="index.php" name="home"><?=$data['tab1']?></a></li>
					<li><a href="aboutme.php" name="aboutme"><?=$data['tab2']?></a></li>
                	<li><a href="certifications.php" name="certifications"><?=$data['tab3']?></a></li>
                	<li><a href="contactme.php" name="contactme" style="color:black;"><?=$data['tab4']?></a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
            	</ul>
        	</div>
    	</nav>

        <div class="container-fluid">
            <div class="row-fluid" >
                <div class="col-md-offset-4 col-md-4" id="box">
                    <h2>Contact Me!</h2>
                    <hr>
                    
                    <form class="form-horizontal" action=" " method="" id="contact_form">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="first_name" placeholder="Name" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input name="phone" placeholder="Phone Number" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <textarea class="form-control" name="comment" placeholder="Message" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-warning pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </body>
</html>