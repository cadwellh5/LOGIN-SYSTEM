<?php
session_start();
include '../dbh.php';

$first=$_POST['first'];
$last=$_POST['last'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql= "INSERT INTO userdata(first,last,uid,pwd) VALUES('$first','$last','$uid','$pwd')";
$res=$conn->query($sql);
header("Location: ../index.php");//to send back to front page;