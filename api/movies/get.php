<?php
//get=READ
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']=="GET"){


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