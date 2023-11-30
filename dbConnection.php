<?php 
$conn = new mysqli("localhost", "root", "password", "data-test", "3307");
if($conn->connect_error){
  die("connection failed");
}

?>