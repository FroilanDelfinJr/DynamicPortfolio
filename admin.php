<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>	
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
                width: 90%;
            }

            .tab {
                overflow: auto;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            .tab button:hover {
                background-color: #ddd;
            }

            .tab button.active {
                background-color: #ccc;
            }

            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }

            .table-responsive {
            overflow-x: auto; /* Ensures horizontal scrolling if needed */
            }

            .table th, .table td {
                white-space: nowrap; /* Prevents wrapping for better table visibility */
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="page-header">
                <h1 class="text-center mt-5">Admin Page</h1>
                    <h4 class="text-success text-center">
                        <?php
                        if(isset($_SESSION['status']) && $_SESSION!=''){
                            echo $_SESSION['status'];
                            echo "</br>";
                            echo "</br>";
                            unset ($_SESSION['status']);
                        }
                        ?> 
                    </h4> 
            </div>

            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Navbar')">Navbar</button>
                <button class="tablinks" onclick="openTab(event, 'Menu1')">Menu1</button>
                <button class="tablinks" onclick="openTab(event, 'Menu2')">Menu2</button>
                <button class="tablinks" onclick="openTab(event, 'Menu3')">Menu3</button>
            </div>

            <div id="Navbar" class="tabcontent">
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead>
                            <tr>
                                <th class="text-center">id</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Tab1</th>
                                <th class="text-center">Tab2</th>
                                <th class="text-center">Tab3</th>
                                <th class="text-center">Tab4</th>
                                <th class="text-center">Action</th>    
                            </tr>
                        </thead>

                        <tbody>
                            <?php viewNavbar(); ?>
                        </tbody>

                    </table>
                </div>
            </div>

            <div id="Menu1" class="tabcontent">
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="thead">
                            <tr>
                                <th class="text-center">id</th>
                                <th class="text-center">First</th>
                                <th class="text-center">Second</th>
                                <th class="text-center">Third</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Action</th>    
                            </tr>
                        </thead>

                        <tbody>
                            <?php viewMenu1(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="Menu2" class="tabcontent">
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="thead">
                            <tr>
                                <th class="text-center">id</th>
                                <th class="text-center">Image1</th>
                                <th class="text-center">Title1</th>
                                <th class="text-center">Image2</th>
                                <th class="text-center">Title2</th>
                                <th class="text-center">Image3</th>
                                <th class="text-center">Title3</th>
                                <th class="text-center">Image4</th>
                                <th class="text-center">Title4</th>
                                <th class="text-center">Image5</th>
                                <th class="text-center">Title5</th>
                                <th class="text-center">Image6</th>
                                <th class="text-center">Title6</th>
                                <th class="text-center">Image7</th>
                                <th class="text-center">Title7</th>
                                <th class="text-center">Image8</th>
                                <th class="text-center">Title8</th>
                                <th class="text-center">Image9</th>
                                <th class="text-center">Title9</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php viewMenu2(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="Menu3" class="tabcontent">
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="thead">
                            <tr>
                                <th class="text-center">id</th>
                                <th class="text-center">Cert1</th>
                                <th class="text-center">Name1</th>
                                <th class="text-center">Issuer1</th>
                                <th class="text-center">Date1</th>
                                <th class="text-center">Link1</th>
                                <th class="text-center">Cert2</th>
                                <th class="text-center">Name2</th>
                                <th class="text-center">Issuer2</th>
                                <th class="text-center">Date2</th>
                                <th class="text-center">Link2</th>
                                <th class="text-center">Cert3</th>
                                <th class="text-center">Name3</th>
                                <th class="text-center">Issuer3</th>
                                <th class="text-center">Date3</th>
                                <th class="text-center">Link3</th>
                                <th class="text-center">Cert4</th>
                                <th class="text-center">Name4</th>
                                <th class="text-center">Issuer4</th>
                                <th class="text-center">Date4</th>
                                <th class="text-center">Link4</th>
                                <th class="text-center">Cert5</th>
                                <th class="text-center">Name5</th>
                                <th class="text-center">Issuer5</th>
                                <th class="text-center">Date5</th>
                                <th class="text-center">Link5</th>
                                <th class="text-center">Cert6</th>
                                <th class="text-center">Name6</th>
                                <th class="text-center">Issuer6</th>
                                <th class="text-center">Date6</th>
                                <th class="text-center">Link6</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php viewMenu3(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
            
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
            
                tablinks = document.getElementsByClassName("tablinks");
  
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
  
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelector('.tablinks').click();
            });
        </script>
    </body>
</html>

<?php
    function viewNavbar(){
        include("include/sqlconnection.php");
        $sql = "SELECT * FROM mynavbar ORDER BY mynavbar_id";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo"
                    <tr>
                        <td>$row[mynavbar_id]</td>
                        <td>$row[name]</td>
                        <td>$row[tab1]</td>
                        <td>$row[tab2]</td>
                        <td>$row[tab3]</td>
                        <td>$row[tab4]</td>
                        <td>
                            <button><a href='update_navbar.php?mynavbar_id=$row[mynavbar_id]'>Update</a></button>
                            <button><a href='controller.php?mynavbar_id=$row[mynavbar_id]'>Delete</a></button>
                        </td>
                    </tr>
                ";
            }
        } else {
            echo "<tr>";
                for ($i = 1; $i <= 5; $i++) {
                echo "<td>&nbsp</td>";
                }
            echo "</tr>";
        }

        $conn->close();
    }


    function viewMenu1(){
        include("include/sqlconnection.php");
        $sql = "SELECT * FROM menu1 ORDER BY menu1_id";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo"
                    <tr>
                        <td>$row[menu1_id]</td>
                        <td>$row[first]</td>
                        <td>$row[second]</td>
                        <td>$row[third]</td>
                        <td>
                            <img src='img/$row[image]' width='100' height='auto' alt='$row[image]'>
                        </td>
                        <td>
                            <button><a href='update_menu1.php?menu1_id=$row[menu1_id]'>Update</a></button>
                            <button><a href='controller.php?menu1_id=$row[menu1_id]&menu1_image=$row[image]'>Delete</a></button>
                        </td>
                    </tr>
                ";
            }
        } else {
            echo "
                <tr>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                    <td>&nbsp</td>
                </tr>
            ";
        }
        $conn->close();
    }

    function viewMenu2(){
        include("include/sqlconnection.php");
        $sql = "SELECT * FROM menu2 ORDER BY menu2_id";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>$row[menu2_id]</td>";

                        for ($i = 1; $i <= 9; $i++) {
                            $imgField = 'img' . $i;
                            $titleField = 'title' . $i;

                        echo "
                        <td>
                            <img src='img/{$row[$imgField]}' width='100' height='auto' alt='{$row[$imgField]}'>
                        </td>
                        <td>{$row[$titleField]}</td>";
                        }

                        echo "
                        <td>
                            <button><a href='update_menu2.php?menu2_id=$row[menu2_id]'>Update</a></button>
                            <button><a href='controller.php?menu2_id=$row[menu2_id]'>Delete</a></button>
                        </td>
                    </tr>
                ";
            }
        } else {
            echo "<tr>";
                for ($i = 1; $i <= 18; $i++) {
                echo "<td>&nbsp</td>";
                }
            echo "</tr>";
        }
        $conn->close();
    }

    function viewMenu3(){
        include("include/sqlconnection.php");
        $sql = "SELECT * FROM menu3 ORDER BY menu3_id";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>$row[menu3_id]</td>";
                        for ($i = 1; $i <= 6; $i++) {
                            $certField = 'cert' . $i;
                            $nameField = 'name' . $i;
                            $issuerField = 'issuer' . $i;
                            $dateField = 'date' . $i;
                            $linkField = 'link' . $i;

                        echo "
                        <td>
                            <img src='img/{$row[$certField]}' width='100' height='auto' alt='{$row[$certField]}'>
                        </td>
                        <td>{$row[$nameField]}</td>
                        <td>{$row[$issuerField]}</td>
                        <td>{$row[$dateField]}</td>
                        <td>{$row[$linkField]}</td>";
                        }

                        echo "
                        <td>
                            <button><a href='update_menu3.php?menu3_id=$row[menu3_id]'>Update</a></button>
                            <button><a href='controller.php?menu3_id=$row[menu3_id]&menu3_image=$row[cert1]'>Delete</a></button>
                        </td>
                    </tr>
                ";
            }
        } else {
            echo "<tr>";
                for ($i = 1; $i <= 30; $i++) {
                echo "<td>&nbsp</td>";
                }
            echo "</tr>";
        }
        $conn->close();
    }
?>