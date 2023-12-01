<?php 
include_once('../dbConnection.php');

//check email registered or not
if (isset($_POST['cekemail']) && isset($_POST['email'])) {
    $email = $_POST['email'];
    $sql = "SELECT email FROM users WHERE email = '".$email."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}

//login page
if (isset($_POST['username']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $sql = "SELECT username, email FROM users WHERE username = '".$username."' AND email = '".$email."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
    // if ($row === 1) {
    //     echo json_encode($row);
    // }elseif($row === 0){
    //     echo json_encode($row);
    // }
}
?>