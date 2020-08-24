<?php
include_once('../config.php');

$id_anggaran = $_POST['id_anggaran'];
$nama_anggaran = $_POST['nama_anggaran'];
$total_anggaran = $_POST['total_anggaran'];
$tgl_anggaran = $_POST['tgl_anggaran'];

$insertnorm = "INSERT INTO anggaran(id_anggaran,nama_anggaran,total_anggaran,tgl_anggaran) 
               VALUES(NULL, '$nama_anggaran','$total_anggaran','$tgl_anggaran')";
$exeinsertnorm = mysqli_query($koneksi,$insertnorm);
$response = array();
if($exeinsertnorm)
{
//   header("Location: ../../kasir/barang.php");
  $response['code'] =1;
}else{
  $response['code'] =0;
  // $response['message'] = "Failed! Data Not Inserted";
}

echo json_encode($response);

?>
