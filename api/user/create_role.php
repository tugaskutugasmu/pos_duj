<?php
include_once('../config.php');

$role = addslashes(htmlentities($_POST['role']));

$query = "INSERT INTO role(role)VALUES ('$role')";
$create_role = mysqli_query($koneksi, $query);

$response = null;
if ($create_role) {
    $response = success_message("creating new role : " . $role);
} else {
    $response = error_message();
}

echo json_encode($response);
