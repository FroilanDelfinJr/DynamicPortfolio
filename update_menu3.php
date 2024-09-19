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
            <h1 class="text-center mt-5">Update Menu3</h1>
            <form class="form-horizontal" method="POST" action="controller.php" enctype="multipart/form-data">
    <?php
        include("include/sqlconnection.php");
        $sql = "SELECT * FROM menu3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<input type='hidden' name='txtid' value='" . $row['menu3_id'] . "'>";

                $fields = [
                    ['cert' => 'cert1', 'name' => 'name1', 'issuer' => 'issuer1', 'date' => 'date1', 'link' => 'link1'],
                    ['cert' => 'cert2', 'name' => 'name2', 'issuer' => 'issuer2', 'date' => 'date2', 'link' => 'link2'],
                    ['cert' => 'cert3', 'name' => 'name3', 'issuer' => 'issuer3', 'date' => 'date3', 'link' => 'link3'],
                    ['cert' => 'cert4', 'name' => 'name4', 'issuer' => 'issuer4', 'date' => 'date4', 'link' => 'link4'],
                    ['cert' => 'cert5', 'name' => 'name5', 'issuer' => 'issuer5', 'date' => 'date5', 'link' => 'link5'],
                    ['cert' => 'cert6', 'name' => 'name6', 'issuer' => 'issuer6', 'date' => 'date6', 'link' => 'link6']
                ];

                foreach ($fields as $field) {
                    $certField = $field['cert'];
                    $nameField = $field['name'];
                    $issuerField = $field['issuer'];
                    $dateField = $field['date'];
                    $linkField = $field['link'];

                    echo "
                    <div class='form-group'>
                        <label for='$certField' class='control-label col-md-4'>Input $certField</label>
                        <div>
                            <input type='file' name='txt$certField'>
                        </div>
                        <input type='hidden' name='old_$certField' value='" . $row[$certField] . "'>
                    </div>

                    <div class='form-group'>
                        <label for='$nameField' class='control-label col-md-4'>Enter $nameField</label>
                        <div>
                            <input type='text' class='form-control' name='$nameField' value='" . $row[$nameField] . "'>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='$issuerField' class='control-label col-md-4'>Enter $issuerField</label>
                        <div>
                            <input type='text' class='form-control' name='$issuerField' value='" . $row[$issuerField] . "'>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='$dateField' class='control-label col-md-4'>Enter $dateField</label>
                        <div>
                            <input type='text' class='form-control' name='$dateField' value='" . $row[$dateField] . "'>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='$linkField' class='control-label col-md-4'>Enter $linkField</label>
                        <div>
                            <input type='text' class='form-control' name='$linkField' value='" . $row[$linkField] . "'>
                        </div>
                    </div>
                    ";
                }

                echo "
                <div class='form-group text-center'>
                    <div class='col-md-12'>
                        <button class='btn btn-success' type='submit' name='update_menu3'>Update</button>
                    </div>
                </div>";
            }
        }
    ?>
</form>
        </div>
    </body>
</html>