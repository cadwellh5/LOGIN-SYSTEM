<?php

$conn=mysqli_connect("localhost", "root", "", "phplessons");
if(!$conn)
{
    die("connection failed : ".mysqli_connect_error());
}
?>