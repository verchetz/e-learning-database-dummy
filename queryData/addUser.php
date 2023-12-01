<?php 

include_once('../dbConnection.php');


//insert
if (isset($_POST['names']) && isset($_POST['username']) && isset($_POST['email'])) {
    $names = $_POST['names'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users(names, username, email) VALUES ('$names', '$username', '$email')";

    if ($conn->query($sql) == true) {
        echo json_encode("yes");
    }else{
        echo json_encode("no");
    }
};



?>