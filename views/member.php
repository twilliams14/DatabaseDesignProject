<?php
    //database details. 
    $servername = "98.157.243.73";
    $username = "groupuser";
    $password = "123";
    $dbname = "library";

    // Create connection
    $con =  mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
    }
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $zipcode = $_POST['zipcode'];

    $sql = "INSERT INTO `member` (`email`, `name`, `phone_number, `zipcode`)
    VALUES ('$email', '$name', '$phone_number', '$zipcode')";
    $rs = mysqli_query($con, $sql);

    if($rs)
{
	echo "Member Inserted";
}

    //connection closed.
    mysqli_close($con);
?> 