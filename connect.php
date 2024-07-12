 <?php
 
 // Dummy database connection (replace with actual database operations)
    $db = new mysqli("localhost","users","username", "password", "byeolbit");

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>