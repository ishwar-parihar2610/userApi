<?php
require 'connection.php';
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$checkUser="SELECT * FROM user WHERE email='$email'";
$checkUserResult=$conn->query($checkUser);
if($checkUserResult->num_rows>0){
    $response=array("status"=>"0","message"=>"user already exist");
}else{
    $query="INSERT INTO user(username,email,password) VALUES('$username','$email','$password')";
    $result=$conn->query($query);
    if($result==1){
        $response=array("status"=>"1","message"=>"Registration Sucess");
    }else{
        $response=array("status"=>"0","message"=> "Register Not Success");
    }
    
}

echo json_encode($response);
?>