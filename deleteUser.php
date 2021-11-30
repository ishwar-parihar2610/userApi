<?php
require 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM user WHERE email='$email' and password='$password'";
$checkuser=$conn->query($sql);
if($checkuser->num_rows>0){
   $deleteuser="DELETE FROM user WHERE email='$email'";
   $deleteResult=$conn->query($deleteuser);
   if($deleteuser>0){
       $response=array("status"=>"1","message"=>"user account delete successfully");
   } else{
    $response=array("status"=>"0","message"=>"user account not delete successfully");
   }

}else{
    $response=array("status"=>"0","message"=>"user account not available");
   
}
echo json_encode($response);
?>