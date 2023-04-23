first include this in all:
header("Content-Type: application/json");



if method doesnt matched :: 
    http_response_code(404);
   
    $response = array(
        "message"=>"error"
    );
       
    echo json_encode($response);
    die();