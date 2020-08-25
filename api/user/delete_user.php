<?php include_once('../config.php');

$id_user = addslashes(htmlentities($_POST['id_user']));
$getdata = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
$rows = mysqli_num_rows($getdata);

if ($rows > 0) {
  $query = "DELETE FROM user WHERE id_user = '$id_user'";
  $delete = mysqli_query($koneksi, $query);
  $response = null;
  if ($delete) {
    $response = success_message("Deleted : . $id_user");
    header("Location: ../../user/user_view.php");
  } else {
    $response = error_message();
  }
} else {
  $response = error_message("Data not found");
}

echo json_encode($response);