<?php
include_once('../config.php');

$current_date_time = new DateTime();
$id_user = addslashes(htmlentities($_POST['id_user']));
$full_name = addslashes(htmlentities($_POST['full_name']));
$username = addslashes(htmlentities($_POST['username']));
$password = addslashes(htmlentities($_POST['password']));
$role = addslashes(htmlentities($_POST['role']));
$address = addslashes(htmlentities($_POST['address']));
// $date_created = addslashes(htmlentities($_POST['date_created']));
// $date_updated = addslashes(htmlentities($_POST['date_updated']));
$date_created = $current_date_time->format('Y-m-d H:i:s');
$date_updated = $current_date_time->format('Y-m-d H:i:s');

$insertnorm = "INSERT INTO user(id_user,full_name,username,password,role,address,date_created,date_updated) 
               VALUES(NULL, '$full_name','$username','$password','$role','$address','$date_created','$date_updated')";
$exeinsertnorm = mysqli_query($koneksi, $insertnorm);
$response = array();
if ($exeinsertnorm) {
  $response['code'] = 1;
  $response['message'] = "Success! Data Inserted";
} else {
  $response['code'] = 0;
  $response['message'] = mysqli_error($koneksi);
}

echo json_encode($response);
