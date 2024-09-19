<!DOCTYPE html>
<?php 
	session_start();
	include('include/sqlconnection.php'); 
	$sql = "SELECT * FROM mynavbar, menu2";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
?>

<html lang="en">
	<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Me</title>	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/aboutme.css">
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
					<li><a href="aboutme.php" name="aboutme" style="color:black;"><?=$data['tab2']?></a></li>
                	<li><a href="certifications.php" name="certifications"><?=$data['tab3']?></a></li>
                	<li><a href="contactme.php" name="contactme"><?=$data['tab4']?></a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
            	</ul>
        	</div>
    	</nav>

        <div class="container">
			<h1 class="header-title text-center">About Me</h1>

			<div class="row justify-content-center">
                    <p>Let me begin by introducing myself. I am Froilan E. Delfin Jr., 22 years old from Holy Spirit, Quezon City. I am a 4th year College student from New Era University and currently taking a course of Bachelor of Science in Computer Science. This year, I've been diving deep into programming, especially Java. It's been exciting learning how to write code and solve problems using Java. Besides Java, I've been getting into data management and SQL. Learning about databases has been interesting it's all about organizing and working with information effectively. And then there's web development! I've been experimenting with HTML and CSS, learning how to structure web pages and style them to make them visually appealing. I've also been exploring tools like Bootstrap and PHP, which help in creating cool and responsive websites. Looking forward, I'm super eager to learn more! The tech world is always changing, and I'm excited to keep up with it. Every new skill I pick up feels like unlocking a new door of possibilities. As I move forward in college, I can't wait to see where these skills take me and how I can contribute to the world of technology.</p>
            	</div>
       		</div>
		</div>

        <div class="container">
			<h1 class="header-title text-center">Skills</h1>
            
            <div class="row justify-content-center">
    			<?php
    				for ($i = 1; $i <= 9; $i++) {
        		?>
        		
				<div class="col-sm-6 col-md-4">
            		<img src="img/<?=$data['img'.$i]?>" class="img-thumbnail" alt="Portfolio Image <?=$i?>">
            		<p class="imglabel"><?=$data['title'.$i]?></p>
        		</div>
        		<?php
    			}
    			?>
			</div>
        </div>
    </body>
</html>