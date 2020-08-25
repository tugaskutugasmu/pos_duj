<?php include_once('../config.php');

$id_user = addslashes(htmlentities($_POST['id_user']));

$getdata = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id_user'");
$rows = mysqli_num_rows($getdata);

if ($rows > 0) {
  $query = "DELETE FROM user WHERE id_user = '$id_user'";
  $delete = mysqli_query($koneksi, $query);
  $response = array();
  if ($delete) {
    // $response['code'] = 1;
    // $response['message'] = "Deleted Success";
    header("Location: ../../user/user_view.php");
  } else {
    $response['code'] = 0;
    $response['message'] = mysqli_error($koneksi);
  }
} else {
  $response['code'] = 0;
  $response['message'] = "data not found";
}

echo json_encode($response);

// $id = addslashes(htmlentities($_POST['id']));
// $getdata = mysqli_query($koneksi,"SELECT * FROM userr WHERE id = '$id'");
// $rows = mysqli_num_rows($getdata);

// $delete = "DELETE FROM userr WHERE id = '$id'";
// $exedelete = mysqli_query($koneksi,$delete);

// $respose = array();
// if($rows > 0)
// {
//   if ($exedelete) {
//     $respose['code'] = 1;
//     $respose['message'] = "Deleted Success";
//   }else{
//     $respose['code'] = 0;
//     $respose['message'] = "Failed to Delete";
//   }
// }else{
//   $respose['code'] = 0;
//   $respose['message'] = "Failed to Delete, data Not Found";
// }


// echo json_encode($respose);
