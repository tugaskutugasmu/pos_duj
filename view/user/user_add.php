<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KARYAWAN</title>

  <link href="../../css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">

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
    <div>
	<form action="../../api/user/create_user.php" method="post" id="form">
		<div class="container">
			
			<div >
				<div >
					<h1>Tambah Karyawan</h1>
					<p>Masukkan data dengan benar</p>
					<hr class="mb-3">
					<label><b>Role</b></label>
					<select class="form-control" name="role" id="role">
                        <option>direktur</option>
                        <option>manager</option>
                        <option>kasir</option>
                        <option>resepsionis</option>
                    </select>

					<label><b>Username</b></label>
					<input class="form-control" type="text" name="username" id="username" placeholder="Username" required>

					<label><b>Password</b></label>
					<input class="form-control" type="text" name="password" id="password" placeholder="Password" required>

					<label><b>Nama</b></label>
					<input class="form-control" type="text" name="full_name" id="full_name" placeholder="Sesuai KTP" required>
                    
                    <label><b>Alamat</b></label>
					<input class="form-control" type="text" name="address" id="address" placeholder="Sesuia KTP" required>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" value="Simpan">
				</div>
			</div>
		</div>
	</form>
</div>
</div>