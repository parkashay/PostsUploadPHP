<?php
function openCon()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysite";

    $conn = new mysqli($servername, $username, $password, $dbname) or die("Connection error: %s\n".$conn->error);
    return $conn;
}
function closeCon($conn)
{
    $conn->close();
}
?>