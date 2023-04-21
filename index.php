<?php
header("Content-Type: application/json"); 
$servername="localhost";
$username="root";
$password="";
$database="cinema";
$data=array();

$connection = new mysqli($servername,$username,$password,$database);
if($connection->connect_error){
    die("connection failed");
}
 $sql = " SELECT * FROM movies;";
 
 $result=$connection->query($sql);
 if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      $data[]=$row;
    }
 }
$response=array(
    'status'=> 'ok',
    'data'=> $data
);

echo json_encode($response);
 $connection-> close();
?>