<?php
include_once('../config.php');
$query = "SELECT * FROM product";
$result = mysqli_query($koneksi, $query);
$array_data = array();
while ($rows = mysqli_fetch_assoc($result)) {
  $array_data[] = $rows;
}


echo json_encode($array_data);
