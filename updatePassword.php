<?php
require 'connection.php';


$password=$_POST['password'];
$email=$_POST['email'];
$newPassword=$_POST['newpassword'];

$checkUser="SELECT * FROM user WHERE email='$email' and password='$password'";
$result=$conn->query($checkUser);

if($result->num_rows>0){
    $updateQuery="UPDATE user SET password='$newPassword' WHERE email='$email'";
    $updateResult=$conn->query($updateQuery);
    $response=array("status"=>"1","message"=>"update Successfully");
}else{
    $response=array("status"=>"0","message"=>"user not exist");
}


echo json_encode($response);
?>