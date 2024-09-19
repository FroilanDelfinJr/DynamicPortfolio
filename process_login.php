<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valid_username = "admin123";
    $valid_password = "admin123";


    $username = $_POST["username"];
    $password = $_POST["password"];


    if ($username === $valid_username && $password === $valid_password) {

        header("Location: admin.php");
        exit();
    } else {
        echo "
        <script>
            alert('Invalid username or password.');
            document.location.href = 'login.php';
        </script>
        ";
    }
}
?>