<?php 

include_once('../dbConnection.php');

//check email registered or not
// if (isset($_POST['email'])) {
//     $email = $_POST['email'];
//     $sql = "SELECT email FROM users WHERE email = '.$email.'";
//     $result = $conn->query($sql);
//     $row = $result->num_rows;
//     echo json_encode($row);
// }


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