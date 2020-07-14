<<<<<<< HEAD
<?php
$email = $_POST['email'];

mysql://b0c59a8d7c863e:07dbf7dc@us-cdbr-east-02.cleardb.com/heroku_45453237903a3c6?reconnect=true

if (!empty($email)) {
    $host = "us-cdbr-east-02.cleardb.com";
    $dbUsername = "b0c59a8d7c863e";
    $dbPassword = "07dbf7dc";
    $dbName = "heroku_45453237903a3c6";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From sample Where email = ? Limit 1";
        $INSERT = "INSERT Into sample (email) value (?)";

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
            $stmt->bind_param("s", $email);
            $stmt->execute();
            echo "You'll definitely hear from us!";
        } else {
            echo "Oops! Someone already submitted this email";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Please enter your email address...";
    die();
}
=======
<?php
$email = $_POST['email'];

if (!empty($email)) {
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
        $INSERT = "INSERT Into sample (email) value (?)";

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
            $stmt->bind_param("s", $email);
            $stmt->execute();
            echo "You'll definitely hear from us!";
        } else {
            echo "Oops! Someone already submitted this email";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Please enter your email address...";
    die();
}
>>>>>>> deec312fb439903a645cd900ee07a97ff5470aea
?>