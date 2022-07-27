<?php
    if(isset($_POST['submit']))
    {
        $ISBN = $_POST['isbn'];
       
        
        //database details. 
        $host = "98.157.243.73";
        $username = "groupuser";
        $password = "123";
        $dbname = "library";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO contactform_entries (id, name_fld, email_fld, msg_fld) VALUES ('0', '$name', '$email', '$message')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Message has been sent successfully!";
        }
      	else{
         	echo "Error, Message didn't send! Something's Wrong."; 
        }
      //connection closed.
        mysqli_close($con);
    }
?>