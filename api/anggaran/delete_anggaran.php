<?php include_once('../config.php');

$id_anggaran = addslashes(htmlentities($_POST['id_anggaran']));
$getdata = mysqli_query($koneksi,"SELECT * FROM anggaran WHERE id_anggaran = '$id_anggaran'");
$rows = mysqli_num_rows($getdata);

$delete = "DELETE FROM anggaran WHERE id_anggaran = '$id_anggaran'";
$exedelete = mysqli_query($koneksi,$delete);

$respose = array();
if($rows > 0)
{
  if ($exedelete) {
    $respose['code'] = 1;
    $respose['message'] = "Deleted Success";
  }else{
    $respose['code'] = 0;
    $respose['message'] = "Failed to Delete";
  }
}else{
  $respose['code'] = 0;
  $respose['message'] = "Failed to Delete, data Not Found";
}


echo json_encode($respose);
 ?>
