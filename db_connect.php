<?php
$db_connect = mysqli_connect("localhost","root","","foods_sake");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>