<?php
 if($_SERVER['REQUEST_METHOD']=="PUT"){


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