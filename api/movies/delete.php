<?php
header("Content-Type: application/json");
if($_SERVER['REQUEST_METHOD']=="DELETE"){


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