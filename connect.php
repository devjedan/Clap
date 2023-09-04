<?php

$FirstName = $_POST('FirstName');
$LastName = $_POST('LastName');
$EmailId = $_POST('EmailId');
$Password = $_POST('Password');

$conn = new mysqli('localhost','root','','clap');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else {
  $stmt =$conn->prepare("insert into registration(FirstName,LastName,UserName,EmailId,Password) values(?,?,?,?,?)");
  $stmt->bind_param("sssss",$FirstName,$LastName,$UserName,$EmailId,$Password);
  $stmt->execute();
  echo "registration succesfully";
  $stmt->close();
  $conn->close();

}


?>
