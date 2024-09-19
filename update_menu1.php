<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Menu1</title>	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/tanker.css">
		<link rel="stylesheet" href="css/clash-display.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
            body {
                background-color: #A67B5B;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .container {
                background-color: #f1f1f1;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 35%;
            }

            .form-group {
                display: flex;
                align-items: center;
            }

            .control-label {
                flex: 0 0 150px;
                margin-bottom: 0; 
            }

            .form-control {
                flex: 1;
                min-width: 300px;
                max-width: 100%;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <h1 class="text-center mt-5">Update Menu1</h1>
            <form class="form-horizontal" method="POST" action="controller.php" enctype="multipart/form-data">
                <?php
                    include("include/sqlconnection.php");
                    $sql= "SELECT * FROM menu1";
                    $result= $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo "
                                <input type='hidden' name='txtid' value='".$row['menu1_id']."'>
                                <div class='form-group'>
                                    <label for='first' class='control-label col-md-4'>First</label>
                                    <div>
                                        <input type='text' class='form-control' name='first' value='".$row['first']."'>
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <label for='second' class='control-label col-md-4'>Second</label>
                                    <div>
                                        <input type='text' class='form-control' name='second' value='".$row['second']."'>
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <label for='third' class='control-label col-md-4'>Third</label>
                                    <div>
                                        <input type='text' class='form-control' name='third' value='".$row['third']."'>
                                    </div>
                                </div>

                                <div class='form-group'>
                                    <label for='name' class='control-label col-md-4'>Input Image</label>
                                    <div>
                                        <input type='file' name='txtimage'>
                                    </div>
                                    <input type='hidden' name='old_image' value='".$row['image']."'>
                                </div>
                                
                                <div class='form-group text-center'>
                                    <div class='col-md-12'>
                                        <button class='btn btn-success' type='submit' name='update_menu1'>Update</button>
                                    </div>
                                </div>
                            ";
                        }
                    }
                ?>
            </form>
        </div>
    </body>
</html>