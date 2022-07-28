<?php

    //database details. 
    $servername = "98.157.243.73";
    $username = "groupuser";
    $password = "123";
    $dbname = "library";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
    }

    //Taking all of the values from the form data(input)
    $memberEmail =  $_REQUEST['memberEmail'];
    $phoneNumber =  $_REQUEST['phoneNumber'];
    $memberName =   $_REQUEST['memberName'];
    $zipCode =      $_REQUEST['zipCode'];

    //insert into table book
    $sql = "Insert INTO book VALUES ('$memberEmail', '$phoneNumber', '$memberName', '$zipCode')";

    if(mysqli_query($conn, $sql)){
      echo "<h3>data stored in a database successfully."
          . " Please browse your localhost php my admin"
          . " to view the updated data</h3>";

          echo nl2br("\n$memberEmail\n $phoneNumber \n $memberName \n $zipCode");

        } else{
          echo "ERROR: Hush! Sorry $sql. "
              . mysqli_error($conn);
      }
  //connection closed.
    mysqli_close($con);
?>