<?php
header("Content-Type:application/json");
$servername="localhost";
$username="root";
$password="";
$database="cinema";

$connection = new mysqli("$servername", "$username", "$password","$database");
if($connection->connect_error){
    die("connection error");
}

$sql= "DELETE FROM movies WHERE id=2";

    $result=$connection->query($sql);
 if($result===TRUE){
     $success= true;
 }    
 $response = array(
    'status'=> 'ok',
    'success' => $success
 );
 echo json_encode($response);

$connection-> close();