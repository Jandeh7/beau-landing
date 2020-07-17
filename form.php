<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
      body {
       background-color: #21E6C1;
       font-size: 14px;
       text-align: center;
       padding-top: 2em;
    }
  </style>
  <title>Beau</title>
</head>
<body>
    <?php

    $email = $_POST['email'];

    if (!empty($email)) {

        /*in Development connection
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "sampledb";
        */

        //remote database connection
        $host = "e11wl4mksauxgu1w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $dbUsername = "wqm7659rcpesfhim";
        $dbPassword = "cdpcz61aox5hhu5u";
        $dbName = "bj1tzzyeokb4rebj";

        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);


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

            echo "THANK YOU! YOU'LL DEFINITELY HEAR FROM US!";
        } else {
            echo "OOPS! SOMEONE ALREADY SUBMITTED THIS EMAIL.";
        }
        $stmt->close();
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="1;URL=index.html">
    <?php
    $conn->close();
    }
    ?>
</body>
</html>