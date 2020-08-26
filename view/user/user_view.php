<?php

function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/pos_duj/api/user/view_user.php");
$data = json_decode($data, TRUE); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Karyawan</title>
    <link href="../../css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../js/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user_view.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Karyawan<sup></sup></div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="user_add.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tambah Karyawan</span></a>
      </li>
    </ul>  
        <div class="container-fluid">

            <h1 class="h3 mb-2 text-gray-800"> </h1>
            <p class="mb-4"> </p>

            <div class="card shadow mb-4">
                <div class="card-header py-3">

                <h6 class="m-0 font-weight-bold text-primary">Daftar Karyawan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Edit | Hapus</th>
                    </tr>
                    </thead>
                    <?php foreach ($data as $data) { ?>
                    <tbody>
                        <tr class="table-primary">
                            <td>
                                <?= $data["id_user"] ?>
                            </td>
                            <td>
                                <?= $data["username"] ?>
                            </td>
                            <td>
                                <?= $data["password"] ?>
                            </td>
                            <td>
                                <?= $data["full_name"] ?>
                            </td>
                            <td>
                                <?= $data["address"] ?>
                            </td>
                            <td colspan="2"><a   href="user_update.php">Edit</a> |
                                            <form action="....//api/user/delete_user.php" method="post">
                                                <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">
                                                <input type="submit" value="Hapus">
                                            </form> 
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
                </div>
            </div>
        </div>
</body>

</html>