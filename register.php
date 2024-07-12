<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    if ($password != $confirmPassword) {
        echo "Passwords do not match!";
        exit();
    }

    // Here you can add code to save the user data to a database
    // For example, using MySQLi or PDO to insert data into a users table

   
}
?>
