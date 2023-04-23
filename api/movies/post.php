<?php
//post= CREATE
if($_SERVER['REQUEST_METHOD']=="POST"){
//we never send query on post method

 $json_data= file_get_contents("php://input");
 
 //print_r($json_data);

 $request=json_decode($json_data);

 $response=array(
    'id'=>$request->id,
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
