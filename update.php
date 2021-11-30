<?php
require 'connection.php';
$id=$_REQUEST['id'];
$username=$_POST['username'];
$email=$_POST['email'];

$sql="UPDATE user SET username='$username',email='$email' WHERE id='$id'";
$result=$conn->query($sql);
if($result){
    $response=array("status"=>"1","message"=>"update Successful");
}else{
    $response=array("status"=>"0","message"=>"update Not Successful");
}

echo json_encode($response);

?>