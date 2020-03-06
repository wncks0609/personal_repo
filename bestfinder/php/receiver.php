<?php

/**
 * Checks if request method is post and post data is not empty
 * if not, exits with error status
 */
if($_SERVER['REQUEST_METHOD'] ==  "POST" && !empty($_POST)) {

    //includes only with post method
    include('handler.php');

    $handler = new Handler();
    $request_url = $handler->buildURL($_POST);

    //echo response or a error message if exists in building an endpoint.
    if(isset($request_url['error'])) {
        echo json_encode($request_url);
        exit();
    } else {
        $response = $handler->request($request_url['url']);
        echo $response;
        exit();
    }
} else {
    $fail_request = new stdClass();

    $fail_request->status = "Invalid access";

    echo json_encode($fail_request);
    exit();
}

?>