<!DOCTYPE html>
<html>
<head>
	<title>Menu Awal</title>
</head>
<body>
 	<br><br><br>
	<center>
		<h2><b>Registrasi Mahasiswa</b></h2>
	<form action="" method="POST">
		<table>

			<tr bgcolor="#6dc066">
				<td>NIM</td>
				<td><input type="text" name="nim" required=""></td>
			</tr>

			<tr bgcolor="#6dc066">
				<td>Nama</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>

			<tr bgcolor="#6dc066">
				<td>Email</td>
				<td><input type="email" name="email" value="@gmail.com" required=""></td>
			</tr>

			<tr bgcolor="#6dc066">
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jeniskelamin" value="Laki-Laki" required="">Laki-Laki<br></td>
				<td><input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br></td>
			</tr>

			<tr bgcolor="#6dc066">
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>

			<tr bgcolor="#6dc066">
				<td>Program Studi</td>
				<td><select name="prodi" required="">

    				<option value="Desain Interior">Desain Interior</option>
    				<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
    				<option value="Teknik Informatika">Teknik Informatika</option>
    				<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
    				<option value="Sistem Multimedia">Sistem Multimedia</option>
    				<option value="Manajemen Informatika">Manajemen Informatika</option>
    				<option value="Teknik Elektro">Teknik Elektro</option>
    				<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
    				<option value="Teknik Fisika">Teknik Fisika</option>
    				<option value="Teknik Industri">Teknik Industri</option>
    				<option value="Seni Rupa">Seni Rupa</option>	
                    <option value="Kriya Tekstil dan Mode">Kriya Tekstil dan Mode</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>

				</select></td>
			</tr>

			<tr bgcolor="#6dc066">
				<td>Fakultas</td>
				<td><select name="fakultas" required="">
    				
    				<option value="FIT">Fakultas Ilmu Terapan</option>
                    <option value="FKB">Fakultas Fakultas Komunikasi Bisnis</option>
                    <option value="FTE">Fakultas Teknik Elektro</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
                    <option value="FEB">Fakultas Ekonomi Bisnis</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
                    <option value="FIF">Fakultas Informatika</option>
    			</select></td>
    		</tr>

			<tr>
				<td colspan="3"><br><center><input type="submit" name="submit"></center> </td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>

<?php
	$konek = mysqli_connect('localhost','root','','d_modul5');
	session_start();
	if(isset($_POST['submit'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$jeniskelamin=$_POST['jeniskelamin'];
		$tanggal_lahir=$_POST['tanggal_lahir'];
		$prodi=$_POST['prodi'];
		$fakultas=$_POST['fakultas'];

		$error=array();
		if(strlen($_POST['nim']) != 15){
			$error['nim']=="Harus 10";
		} if(strlen($_POST['nama']) <= 25){
			$error['nama']=="Harus 25";
		} if(empty($email)){
			$error['email']=="Email harus diisi";
		}if(empty($tanggal_lahir)){
			$error['tanggal_lahir']=="Tanggal lahir harus diisi";
		}if(empty($jeniskelamin)){
			$error['jeniskelamin']=="Jenis Kelamin harus diisi";
		}if(empty($prodi)){
			$error['studi']=="Program Studi harus diisi";
		}if(empty($fakultas)){
			$error['fakultas']=="fakultas harus diisi";
		}


	$query=mysqli_query($konek,"INSERT INTO t_jurnal1 VALUES ($nim,'$nama','$email','$jeniskelamin','$tanggal_lahir','$prodi','$fakultas')");
	if($query){
		header('Location:tampil.php');
	}
}
    

?>

	