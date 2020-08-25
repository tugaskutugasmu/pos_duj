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
$data = http_request("http://localhost/pos_duj/api/user/update_user.php");
$data = json_decode($data, TRUE);
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Edit Karyawan</title>
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div>
        <form action="../api/user/update_user.php" method="post" id="form">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-5">
					<h1>Edit Karyawan</h1>
					<p>Masukkan data dengan benar</p>
                    <hr class="mb-3">
					<label><b>Nama </b></label>
					<input type="text" name="full_name" id="full_name"  
                    value="<?= $data["full_name"] ?>" class="form-control" required>

					<label><b>Alamat</b></label>
					<input class="form-control" type="text" name="address" id="address" 
                    value="<?= $data["address"] ?>" required>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" value="Simpan">
				</div>
			</div>
		</div>
	</form>
        </div>
    </body>