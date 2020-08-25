<?php
include_once('../config.php');
include_once('../dateTime.php');


$id_user = addslashes(htmlentities($_POST['id_user']));
$full_name = addslashes(htmlentities($_POST['full_name']));
$username = addslashes(htmlentities($_POST['username']));
$password = addslashes(htmlentities($_POST['password']));
$role = addslashes(htmlentities($_POST['role']));
$address = addslashes(htmlentities($_POST['address']));
// $date_created = addslashes(htmlentities($_POST['date_created']));
// $date_updated = addslashes(htmlentities($_POST['date_updated']));

$date_created = current_date_time();
$date_updated = current_date_time();

$insertnorm = "INSERT INTO user(id_user,full_name,username,password,role,address,date_created,date_updated) 
               VALUES(NULLIF('$id_user',''), '$full_name','$username','$password','$role','$address','$date_created','$date_updated')";
$exeinsertnorm = mysqli_query($koneksi, $insertnorm);
$response = null;
if ($exeinsertnorm) {
  $response = success_message("User inserted :  . $full_name");
  header("Location: ../../user/user_view.php");
} else {
  $response = error_message();
}

echo json_encode($response);
