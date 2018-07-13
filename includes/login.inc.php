<?php
session_start();
?>
include '../dbh.php';

$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql= "SELECT * FROM userdata WHERE uid='$uid' AND pwd= '$pwd'";
$res=$conn->query($sql);
if(!$row =$res->fetch_assoc()){
    echo" YOUR USERNAME OR PASSWORD IS INCORRECT";}
    else{
        $_SESSION['id']=$row['id'];
    }
header("Location: ../index.php");