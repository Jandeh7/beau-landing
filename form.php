<?php
$firstname = $_POST['firstname'];
$gender = $_POST['gender'];
$email = $_POST['email'];

if (!empty($firstname) || !empty($gender) || !empty($email)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "sampledb";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From sample Where email = ? Limit 1";
        $INSERT = "INSERT Into sample (firstname, gender, email) values(?, ?, ?)";

        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $firstname, $gender, $email);
            $stmt->execute();
            echo "New record inserted successfully";
        } else {
            echo "Someone already registered with this email";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required";
    die();
}
?>