<?php
include_once('../config.php');
include_once('../dateTime.php');
$role = addslashes(htmlentities($_POST['role']));
if ($role == 'assistent_director' || $role == 'kasir') {

  $id_product = addslashes(htmlentities($_POST['id_product']));
  $name = addslashes(htmlentities($_POST['name']));
  $price = addslashes(htmlentities($_POST['price']));
  $quantity = addslashes(htmlentities($_POST['quantity']));
  $date_created = current_date_time();
  $date_updated = current_date_time();
  // do product 
  $query = "INSERT INTO product(id_product,name, price, quantity, date_created, date_updated) 
               VALUES('$id_product', '$name', '$price', '$quantity', '$date_created', '$date_updated')";
  $insert_product = mysqli_query($koneksi, $query);

  $response = null;
  if ($insert_product) {
    // do product update
    $message =  "product inserted :" . "id_product : " .  $id_product . "
         product: " . $name . " price : " . $price . " quantity" . $quantity .  " dateTime : " . $date_created;
    $response = success_message($message);
  } else {
    $response =  error_message();
  }
} else {
  $response = error_message('role ' + $role + ' cannot edit product table');
}

echo json_encode($response);
