<?php

define('HOSTNAME', 'localhost');

define('USERNAME', 'root');

define('PASSWORD', '');

define('DB_NAME', 'db_duj');



$koneksi = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);

function error_message($message = null)
{
    $preMessage = 'Error: ';
    $response = array();
    global $koneksi;
    $response['code'] = 0;
    if ($message == null) {
        $response['message'] =  $preMessage . mysqli_error($koneksi);
        return $response;
    }
    $response['message'] =  $preMessage . $message;
    return $response;
}

function success_message($message = null)
{

    $preMessage = 'Success: ';
    $response = array();
    global $koneksi;
    $response['code'] = 1;
    $response['message'] = $preMessage . $message;
    return $response;;
}
