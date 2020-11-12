<?php

class JsonResponse
{
    public function __construct()
    {
        header("Access-Control-Allow-Origin: *");
        header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        http_response_code(200);
    }

    function response($code = 200, $message = null, $data = [])
    {
        // clear the old headers
        header_remove();
        // set the actual code
        http_response_code($code);
        // set the header to make sure cache is forced
        $status = array(
            200 => '200 OK',
            400 => '400 Bad Request',
            422 => 'Unprocessable Entity',
            500 => '500 Internal Server Error',
            404 => 'Not Found Data',
            403 => 'Validate error'
        );
        // ok, validation error, or failure
        header('Status: ' . $status[$code]);
        // return the encoded json
        return json_encode(array(
            'status' => $code,
            'message' => $message,
            'data' => $data
        ));
    }

}