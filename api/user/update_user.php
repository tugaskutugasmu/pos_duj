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
$response = array();
if ($update) {
  // $response['code'] = 1;
  // $response['message'] = "data uptodated";
  header("Location: ../../user/user_view.php");
} else {
  $response['code'] = 0;
  $response['message'] = mysqli_error($koneksi);
}

echo json_encode($response);


// $id = addslashes(htmlentities($_POST['id']));
// $nama_user = addslashes(htmlentities($_POST['nama_user']));
// $username = addslashes(htmlentities($_POST['username']));
// $password = addslashes(htmlentities($_POST['password']));
// $id_role = addslashes(htmlentities($_POST['id_role']));
// $alamat_user = addslashes(htmlentities($_POST['alamat_user']));
// $tanggal_lahir_user = addslashes(htmlentities($_POST['tanggal_lahir_user']));
// $dibuat_tanggal_user = addslashes(htmlentities($_POST['dibuat_tanggal_user']));
// $terupdate_tanggal_user = addslashes(htmlentities($_POST['terupdate_tanggal_user']));

// $getdata = mysqli_query($koneksi,"SELECT * FROM userr WHERE id='$id'");
// $rows = mysqli_num_rows($getdata);

// $update = "UPDATE userr SET nama_user='$nama_user',username='$username',password='$password',id_role='$id_role',alamat_user='$alamat_user',tanggal_lahir_user='$tanggal_lahir_user',dibuat_tanggal_user='$dibuat_tanggal_user',terupdate_tanggal_user='$terupdate_tanggal_user'
// WHERE id='$id'";
// $update = mysqli_query($koneksi,$update);

// $respose = array();

// if($rows > 0)
// {
//   if($update)
//   {
//     $respose['code'] = 1;
//     $respose['message'] = "Updated Success";
//   }else{
//     $respose['code'] = 0;
//     $respose['message'] = "Updated Failed";
//   }
// }else{
//   $respose['code'] = 0;
//   $respose['message'] = "Updated Failed, Not data selected";
// }
// echo json_encode($respose);
