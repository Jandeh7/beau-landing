<?php
$email = $_POST['email'];

if (!empty($email)) {
    $host = "e11wl4mksauxgu1w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbUsername = "wqm7659rcpesfhim";
    $dbPassword = "cdpcz61aox5hhu5u";
    $dbName = "bj1tzzyeokb4rebj";
    
    //create connection
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    //Prepare statement
    $stmt = $conn->prepare("SELECT email From table Where email = ? Limit 1");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum==0) {
        $stmt->close();

        $stmt = $conn->prepare("INSERT Into table (email) value (?)");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        echo "You'll definitely hear from us!";
    } else {
        echo "Oops! Someone already submitted this email";
    }
    $stmt->close();
    $conn->close();
} else {
    echo "Please enter your email address...";
    die();
}
?>