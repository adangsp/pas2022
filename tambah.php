<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PENDATAAN ALUMNI - SMK SAMNUS</title>
</head>
<body>
 
	<h2>APLIKASI PENDATAAN ALUMNI - SMK SAMNUS</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA ALUMNI</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
			<td><input list="jenis_kelamin" name="jenis_kelamin">
				<datalist id="jenis_kelamin">
					<option value="Laki-Laki"></option>
					<option value="Perempuan"></option>
				</datalist></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input  type="text" name="tempat_lahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>