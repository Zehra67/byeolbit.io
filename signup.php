<?php
session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['confirm-password'];

    if ($password != $confirmPassword) {
        echo "Passwords do not match!";
        exit();
    }


    if(!empty($email)&&!empty($user_name)&&!empty($user_email))
    {
        $query = "insert into form (name,email, pass) values ('$firstname', ' $email',' $password', '$password_confirm' )";
    
        mysqli_query($con, $query);

        echo "<script type='text/javascript'>alert('Successfully Register')</script>";
    
    }
    else
    {
        echo "<script type='text/javascript'>alert('Enter some Valid Information')</script>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="logo.png">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="logo3.png" alt="Cosmetic products illustration">
        </div>
        <div class="right-section">
            <form action="register.php" method="post">
                <h2>Create an Account</h2>
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                <label for="confirm-password">Confirm Password</label>
                <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                <input type="password" id="confirm-password" name="confirm-password" required>
                
                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">Accept our Terms and Conditions</label>
                </div>
                
                <button type="submit">Create Account</button>
                <button type="button" onclick="loginWithGoogle()">Login with Google</button>
            </form>
            <p>Already a member? <a href="login.html">Login</a></p>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
