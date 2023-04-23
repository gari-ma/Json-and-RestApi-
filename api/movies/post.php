<?php
//post= CREATE
if($_SERVER['REQUEST_METHOD']=="POST"){


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
