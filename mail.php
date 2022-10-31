<!DOCTYPE HTML>
<html>
    <body bgcolor="#95A5A6">
        <center><h1>signup</h1></center>
<?php
include("dbConnection.php");
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];

$query="insert into database(name,email,message) values('$name','$email','$message')";
$result=mysqli_query($con,$query);

?>
<h2>Database created</h2>
</html> 
