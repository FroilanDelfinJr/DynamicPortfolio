<?php
session_start();
include("include/sqlconnection.php");

if(isset($_POST['update_navbar'])){
    $id = $_POST['txtid'];
    $newName = $_POST['name'];
    $newTab1 = $_POST['tab1'];
    $newTab2 = $_POST['tab2'];
    $newTab3 = $_POST['tab3'];
    $newTab4 = $_POST['tab4'];

    $sql="UPDATE mynavbar SET name='$newName', tab1='$newTab1', tab2='$newTab2', tab3='$newTab3', tab4='$newTab4' WHERE mynavbar_id='$id'";

    if($conn->query($sql) === TRUE){
        $_SESSION['status'] = "Record Deleted Successfully";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Deletion Failed: " . $conn->error;
        header('location:admin.php');
    }

    $conn->close();
}


if(isset($_POST['update_menu1'])){
    $id = $_POST['txtid'];
    $newFirst = $_POST['first'];
    $newSecond = $_POST['second'];
    $newThird = $_POST['third'];
    $newImage = $_FILES['txtimage']['name'];
    $oldImage = $_POST['old_image'];

    if($newImage != ''){
        $update_image = $newImage;
    } else{
        $update_image = $oldImage;
    }

    echo"$update_image";

    $sql="UPDATE menu1 SET first='$newFirst', second='$newSecond', third='$newThird', image='$update_image' WHERE menu1_id='$id'";

    if($conn->query($sql) === TRUE){
        move_uploaded_file($_FILES["txtimage"]["tmp_name"],"uploads/".$_FILES['txtimage']['name']);
        $_SESSION['status'] = "Record Deleted Successfully";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Deletion Failed: " . $conn->error;
        header('location:admin.php');
    }

    $conn->close();
}


if (isset($_POST['update_menu2'])) {
    $id = $_POST['txtid'];
    $updatedImages = [];
    $newTitles = [];

    for ($i = 1; $i <= 9; $i++) {
        $newImage = $_FILES["txtimg$i"]['name'];
        $oldImage = $_POST["old_img$i"];
        $newTitle = $_POST["title$i"];

        if ($newImage != '') {
            $updatedImages[$i] = $newImage;
        } else {
            $updatedImages[$i] = $oldImage;
        }

        $newTitles[$i] = $newTitle;
    }


    $sql = "UPDATE menu2 SET ";
    for ($i = 1; $i <= 9; $i++) {
        $sql .= "img$i='" . $updatedImages[$i] . "', title$i='" . $newTitles[$i] . "'";
        if ($i != 9) {
            $sql .= ", ";
        }
    }
    $sql .= " WHERE menu2_id='$id'";

    if ($conn->query($sql) === TRUE) {
        for ($i = 1; $i <= 9; $i++) {
            if (!empty($_FILES["txtimg$i"]["tmp_name"])) {
                move_uploaded_file($_FILES["txtimg$i"]["tmp_name"], "uploads/" . $_FILES["txtimg$i"]['name']);
            }
        }
        $_SESSION['status'] = "Record Updated Successfully";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Update Failed: " . $conn->error;
        header('location:admin.php');
    }

    $conn->close();
}

if (isset($_POST['update_menu3'])) {
    $id = $_POST['txtid'];
    $updatedCert = [];
    $newName = [];
    $newIssuer = [];
    $newDate = [];
    $newLink = [];

    for ($i = 1; $i <= 6; $i++) {
        $newCert = $_FILES["txtcert$i"]['name'];
        $oldCert = $_POST["old_cert$i"];
        $newName[$i] = $_POST["name$i"];
        $newIssuer[$i] = $_POST["issuer$i"];
        $newDate[$i] = $_POST["date$i"];
        $newLink[$i] = $_POST["link$i"];

        if (!empty($newCert)) {
            $updatedCert[$i] = $newCert;
        } else {
            $updatedCert[$i] = $oldCert;
        }
    }

    $sql = "UPDATE menu3 SET ";
    for ($i = 1; $i <= 6; $i++) {
        $sql .= "cert$i='" . $updatedCert[$i] . "', name$i='" . $newName[$i] . "', issuer$i='" . $newIssuer[$i] . "', date$i='" . $newDate[$i] . "', link$i='" . $newLink[$i] . "'";
        if ($i != 6) {
            $sql .= ", ";
        }
    }
    $sql .= " WHERE menu3_id='$id'";

    if ($conn->query($sql) === TRUE) {
        for ($i = 1; $i <= 6; $i++) {
            if (!empty($_FILES["txtcert$i"]["tmp_name"])) {
                move_uploaded_file($_FILES["txtcert$i"]["tmp_name"], "uploads/" . $_FILES["txtcert$i"]['name']);
            }
        }
        $_SESSION['status'] = "Record Updated Successfully";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Update Failed: " . $conn->error;
        header('location:admin.php');
    }

    $conn->close();
}


if(isset($_GET['mynavbar_id'])){
    $id = $_GET['mynavbar_id'];
    echo "Attempting to delete record with ID: $id";

    $sql = "UPDATE mynavbar SET name='', tab1='', tab2='', tab3='', tab4='' WHERE mynavbar_id ='$id'";
    
    if($conn->query($sql) === TRUE){
        $_SESSION['status'] = "Record Deleted Successfully";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Deletion Failed: " . $conn->error;
        header('location:admin.php');
    }

    $conn->close();
}

if(isset($_GET['menu1_id'])){
    $id = $_GET['menu1_id'];
    $image = $_GET['menu1_image'];
    echo "Attempting to delete record with ID: $id";

    $sql = "UPDATE menu1 SET first='', second='', third='', image='' WHERE menu1_id ='$id'";
    if($conn->query($sql) === TRUE){
        unlink("img/".$image);
        $_SESSION['status'] = "Record Deleted Successfully";
        header('location:admin.php');

    } else {
        $_SESSION['status'] = "Deletion Failed: " . $conn->error;
        header('location:admin.php');
    }

    $conn->close();
}



if (isset($_GET['menu2_id'])) {
    $id = $_GET['menu2_id'];
    echo "Attempting to update record with ID: $id";

    $fetch_sql = "SELECT img1, img2, img3, img4, img5, img6, img7, img8, img9 FROM menu2 WHERE 'menu2_id' = '$id'";
    $result = $conn->query($fetch_sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        $imageFields = [
            'img1', 'img2', 'img3', 'img4', 'img5',
            'img6', 'img7', 'img8', 'img9'
        ];
    
        foreach ($imageFields as $imageField) {
            $imagePath = $row[$imageField];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }

    $sql = "UPDATE menu2 
            SET aboutme='', img1='', img2='', img3='', img4='', img5='', img6='', img7='', img8='', img9='',
                    title1='', title2='', title3='', title4='', title5='', title6='', title7='', title8='', title9=''
            WHERE menu2_id ='$id'";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "Record Updated Successfully";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Update Failed: " . $conn->error;
        header('location:admin.php');
    }

    $conn->close();
}

if (isset($_GET['menu3_id'])) {
    $id = $_GET['menu3_id'];
    echo "Attempting to update record with ID: $id";

    $fetch_sql = "SELECT cert1, cert2, cert3, cert4, cert5, cert6 FROM menu3 WHERE 'menu3_id' = '$id'";
    $result = $conn->query($fetch_sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        $imageFields = [
            'cert1', 'cert2', 'cert3', 'cert4', 'cert5','cert6'
        ];
    
        foreach ($imageFields as $imageField) {
            $imagePath = $row[$imageField];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }

    $sql = "UPDATE menu3 
            SET cert1='', cert2='', cert3='', cert4='', cert5='', cert6='',
                name1='', name2='', name3='', name4='', name5='', name6='', 
                issuer1='', issuer2='', issuer3='', issuer4='', issuer5='', issuer6='',
                date1='', date2='', date3='', date4='', date5='', date6='',
                link1='', link2='', link3='', link4='', link5='', link6='' 
            WHERE menu3_id ='$id'";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "Record Updated Successfully";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Update Failed: " . $conn->error;
        header('location:admin.php');
    }

    $conn->close();
}
?>