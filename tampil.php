<?php

$connect = mysqli_connect('localhost','root','','d_modul5');
$result = mysqli_query($connect, "SELECT * FROM t_jurnal1");

echo 
'<center><table border = "4px">
	<thead>
		<tr bgcolor="#6dc066">
			<th> nim</th>
			<th> Nama </th>
			<th> Email </th>
			<th> Jenis Kelamin</th>
			<th>Tanggal Lahir </th>
			<th> Prodi </th>
			<th> Fakultas </th>
		</tr>
	</thead>
<tbody>';

$row = mysqli_fetch_row($result);
echo
	'<tr>
		<td>'.$row[0].'</td>
		<td>'.$row[1].'</td>
		<td>'.$row[2].'</td>
		<td>'.$row[3].'</td>
		<td>'.$row[4].'</td>
		<td>'.$row[5].'</td>
		<td>'.$row[6].'</td>
	</tr></center>';
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 	<br><br><br>
	<center>
		<h2><b>Daftar Data Mahasiswa Yang Telah Diinput</b></h2>
	<form action="" method="POST">
		<input type="submit" name="submit" value="Logout"><br><br>
	</form>

</body>
</html>
<?php
    session_start();
    
	if (isset($_POST['submit'])) {


			$nim=$_POST['nim'];
			$nama=$_POST['nama'];
			$email=$_POST['email'];
			$jeniskelamin=$_POST['jeniskelamin'];
			$tanggal_lahir=$_POST['tanggal_lahir'];
			$prodi=$_POST['prodi'];
            $fakultas=$_POST['fakultas'];	
            
            
		session_destroy();
		header("Location:awal.php");
    }
    
?>