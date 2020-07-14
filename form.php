<?php
$host = "e11wl4mksauxgu1w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbUsername = "wqm7659rcpesfhim";
$dbPassword = "cdpcz61aox5hhu5u";
$dbName = "bj1tzzyeokb4rebj";

//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
$message = '';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn, $email);
    $query = "INSERT INTO sample (email) VALUE (?)";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "You'll definitely hear from us!";
    }else {
        echo "Please enter your email address...";
        die();
    }
    
}

?>
