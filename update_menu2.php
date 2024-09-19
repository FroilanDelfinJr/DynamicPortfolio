<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Menu2</title>	
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
                align-items: flex-start;
                height: 100vh;
                margin: 0;
            }

            .container {
                background-color: #f1f1f1;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 35%;
                margin-top: 20px;
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
            <h1 class="text-center mt-5">Update Menu2</h1>
            <form class="form-horizontal" method="POST" action="controller.php" enctype="multipart/form-data">
                <?php
                    include("include/sqlconnection.php");
                    $sql= "SELECT * FROM menu2";
                    $result= $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo "
                                <input type='hidden' name='txtid' value='" . $row['menu2_id'] . "'>
                            ";

                            $fields = [
                                ['img' => 'img1', 'title' => 'title1'],
                                ['img' => 'img2', 'title' => 'title2'],
                                ['img' => 'img3', 'title' => 'title3'],
                                ['img' => 'img4', 'title' => 'title4'],
                                ['img' => 'img5', 'title' => 'title5'],
                                ['img' => 'img6', 'title' => 'title6'],
                                ['img' => 'img7', 'title' => 'title7'],
                                ['img' => 'img8', 'title' => 'title8'],
                                ['img' => 'img9', 'title' => 'title9']

                            ];

                            foreach ($fields as $field) {
                                $imgField = $field['img'];
                                $titleField = $field['title'];

                            echo "
                                <div class='form-group'>
                                    <label for='$imgField' class='control-label col-md-4'>Input $imgField</label>
                                    <div>
                                        <input type='file' name='txt$imgField'>
                                    </div>
                                    <input type='hidden' name='old_$imgField' value='" . $row[$imgField] . "'>
                                </div>

                                <div class='form-group'>
                                    <label for='$titleField' class='control-label col-md-4'>Enter $titleField</label>
                                    <div>
                                        <input type='text' class='form-control' name='$titleField' value='" . $row[$titleField] . "'>
                                    </div>
                                </div>
                            ";
                            }

                            echo "
                                <div class='form-group text-center'>
                                    <div class='col-md-12'>
                                        <button class='btn btn-success' type='submit' name='update_menu2'>Update</button>
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