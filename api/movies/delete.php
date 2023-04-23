<?php
header("Content-Type: application/json");
if($_SERVER['REQUEST_METHOD']=="DELETE"){
    //echo $_GET['id'];
    // gali khana manxaina vane echo nagarne 
  $response=array(
    'id'=>$_GET['id'],
    'success'=>true
  );
  echo json_encode($response);

}
else{
    http_response_code(404);
   
    $response = array(
        "message"=>"error"
    );
       
    echo json_encode($response);
    die();
}
?>