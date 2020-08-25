<?php
include_once('../config.php');
include_once('../dateTime.php');

$id_user = addslashes(htmlentities($_POST['id_user']));
$full_name = addslashes(htmlentities($_POST['full_name']));
// $username = addslashes(htmlentities($_POST['username']));
// $password = addslashes(htmlentities($_POST['password']));
// $role = addslashes(htmlentities($_POST['role']));
$address = addslashes(htmlentities($_POST['address']));
$date_updated = current_date_time();
$query = "UPDATE user SET full_name = '$full_name', address = '$address', date_updated = '$date_updated' WHERE id_user = '$id_user'";
$update = mysqli_query($koneksi, $query);
$response = null;
if ($update) {
  // $response = success_message('data uptodated');
  header("Location: ../../user/user_view.php");
} else {
  $response = error_message('data uptodated');
}

echo json_encode($response);


