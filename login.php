<?php

require 'connection.php';
$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM user WHERE email='$email' and password='$password'";
$result=$conn->query($query);
if($result->num_rows>0){
    $row=$result->fetch_all(MYSQLI_ASSOC);
    
    $response=array("status"=>"1","message"=>"Login Successfull","data"=>$row);

        
}else{
    $response=array("status"=>"0","message"=>"Login Not Successfull");
}
echo json_encode($response);
?>