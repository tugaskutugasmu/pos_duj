<?php
include_once('../config.php');

$username = addslashes(htmlentities($_POST['username']));
$password = addslashes(htmlentities($_POST['password']));
$role = addslashes(htmlentities($_POST['role']));


$query = "SELECT * FROM user WHERE role ='" . $role . "'AND username = '" . $username . "' AND password = '" . $password . "'";
$login = mysqli_query($koneksi, $query);
$response = array();
$result = $login->fetch_assoc();

if ($login) {
    $role = $result['role'] ?? '';
    if ($role == 'kasir') {
        // redirect to to kasir home
        $response['message'] = 'to kasir home';
    } elseif ($role == 'manager') {
        // redirect to manager home
        $response['message'] = 'to manager home';
    } else {
        // user not found ?? 
        $response['message'] = 'user not found';
    }
} else {
    $response['message'] = 'error';
}


echo json_encode($response);
