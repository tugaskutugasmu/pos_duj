<?php include_once('../config.php');

$id_product = addslashes(htmlentities($_POST['id_product']));
$role = addslashes(htmlentities($_POST['role']));

if ($role == 'assistent_director' || $role == 'kasir') {

  $getdata = mysqli_query($koneksi, "SELECT * FROM product WHERE id_product = '$id_product'");
  $rows = mysqli_num_rows($getdata);

  if ($rows > 0) {
    $query = "DELETE FROM product WHERE id_product = '$id_product'";
    $delete = mysqli_query($koneksi, $query);
    $response = null;
    if ($delete) {
      $response = success_message("Deleted :  . $id_product");
    } else {
      $response = error_message();
    }
  } else {
    $response = error_message('data not found');
  }
} else {
  $response = error_message('role ' + $role + ' cannot edit product table');
}

echo json_encode($response);

