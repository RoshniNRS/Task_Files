<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="file";
    $conn=mysqli_connect($host,$username,$password,);
    mysqli_select_db($conn,$database);

    if(!$conn)
        {
            die('not connected'.mysqli_error());
        }
 ?>
    