<?php
header("Content-Type: application/json"); 

$servername="localhost";
$username="root";
$password="";
$database="cinema";
$sucess=false;

$connection = new mysqli($servername,$username,$password,$database);
if($connection->connect_error){
    die("connection failed");
}
 $sql = "INSERT INTO movies(id,title,descr) VALUES (null,'Garima','jpt');";
 
 $result=$connection->query($sql);
 if($result===TRUE){
     $success= true;
 }
 $response = array(
    'status'=> 'ok',
    'success' => $success
 );
 echo json_encode($response);
 $connection->close();
?>