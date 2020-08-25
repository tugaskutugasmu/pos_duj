<?php
include_once('../config.php');
include_once('../dateTime.php');

function doAbsent()
{
    global $koneksi;
    global $result;
    global $date_login;
    global $respose;
    $id_user = $result['id_user'];
    $query = "INSERT INTO absent(id_absent,id_user,date_login) VALUES(null, '$id_user','$date_login')";
    $login = mysqli_query($koneksi, $query);
    if ($login) {
        $response['absent'] = 'absent success';
    } else {
        $response['absent'] = mysqli_error($koneksi);
    }
}


$username = addslashes(htmlentities($_POST['username']));
$password = addslashes(htmlentities($_POST['password']));
$date_login = current_date_time();
$role = addslashes(htmlentities($_POST['role']));


$query = "SELECT * FROM user WHERE role ='$role'AND username = '$username' AND password = '$password'";
$login = mysqli_query($koneksi, $query);
$response = null;
$result = $login->fetch_assoc();

if ($login) {
    $role = $result['role'] ?? '';
    if ($role == 'kasir') {
        // redirect to to kasir home
        doAbsent();
        $response = success_message('to kasir home');
    } elseif ($role == 'manager') {
        // redirect to manager home
        doAbsent();
        $response = success_message('to manager home');
    } else {
        // user not found ?? 
        $response = error_message('user ' . $username . ' not found');
    }
} else {
    $response = error_message();
}




echo json_encode($response);

