<?php 

include_once('../dbConnection.php');

if (isset($_POST['signup']) && isset($_POST['names']) && isset($_POST['username']) && isset($_POST['email'])) {
    $names = $_POST['names'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users(names, username, email) VALUES ('$names', '$username', '$email')";

    if ($conn->query($sql) == true) {
        echo json_encode("ok");
    }else{
        echo json_encode("failed");
    }
};



?>