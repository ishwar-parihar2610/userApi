<?php
require 'connection.php';

$query="SELECT * FROM user";
$result=$conn->query($query);
$row=$result->fetch_all(MYSQLI_ASSOC);
if(empty($row)){
    $response=array("status"=>"0","message"=>"recod is empty","data"=>$row);
}else{
    $response=array("status"=>"1","message"=>"recod available","data"=>$row);
}

echo json_encode($response);

?>