<?php 
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbConnection.php');


//insert
if (isset($_POST['names']) && isset($_POST['username']) && isset($_POST['email'])) {
    $names = $_POST['names'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users(names, username, email) VALUES ('$names', '$username', '$email')";

    if ($conn->query($sql) == true) {
        $_SESSION['isLogin'] = true;
        $_SESSION['username'] = $username;
        echo json_encode("yes");
    }else{
        echo json_encode("no");
    }
};



?>