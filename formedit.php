<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="backgroun.css">
</head>
<body>


<div class="left">
	<img src="d99bf7fed78cdd6b227f0656908afcd2.jpg">
	<ul>
	<li><a href="pencarian.php">Cari</a></li>
		<li><a href="tambah.php">tambah data</a></li>
		<li><a href="index.php">tampil</a></li>
	</ul>
</div>

<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"mahasiswa1");
$query="select * from siswa where id='$id'";
$result=mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
	$nama=$row['nama'];
	$tempatlahir=$row['tempatlahir'];
	$tanggallahir=$row['tanggallahir'];
	$agama=$row['agama'];
	$jeniskelamin=$row['jeniskelamin'];
	$semester=$row['semester'];
	$alamat=$row['alamat'];
}
?>

<div class="rigth">
	<h1 style="font-family: sans-serif; background-color: green; color: white"  >Form Edit</h1>
	<form action="editsql.php" method="POST" class="form">
		<input type="hidden" name="id" value="<?php echo $id ?>">
	<p>Nama:</p>
	<input type="text" name="nama" placeholder="Masukan nama anda" value="<?php echo $nama ?>" > <br>
	<p>Tempat lahir:</p>
	<input type="text" name="tempatlahir" placeholder="Masukan kota anda" value="<?php echo $tempatlahir ?>"><br>
	<p>tangggal lahir:</p>
	<input type="date" name="tanggallahir" value="<?php echo $tanggallahir ?>"><br>
	<p>Agama Anda:</p>
	<select name="agama"><br>
		<option value="">Agama Anda?</option>
		<option value="islam" <?php if ($agama== 'islam') echo "selected='selected'"; ?>>islam</option>
		<option value="hindu" <?php if ($agama== 'hindu') echo "selected='selected'"; ?>>hindu</option>
		<option value="kristen" <?php if ($agama== 'kristen') echo "selected='selected'"; ?>>kristen</option>
		<option value="buddha" <?php if ($agama== 'buddha') echo "selected='selected'"; ?>>buddha</option>
	</select><br><br>

		<p>Jenis Kelamin:</p>
		
				<input type="radio" name="jeniskelamin" value="laki-laki" <?php if ($jeniskelamin== 'laki-laki') echo "checked='checked'"; ?>>laki-laki</option>
			
			
				<input type="radio" name="jeniskelamin" value="Perempuan" <?php if ($jeniskelamin== 'Perempuan') echo "checked='checked'"; ?>>Perempuan</option>
			<br>

	<p>Semester anda:</p>
	<select name="semester"><br>
				<option value="1" <?php if ($semester== '1') echo "selected='selected'"; ?> >1</option>
				<option value="2" <?php if ($semester== '2') echo "selected='selected'"; ?>>2</option>
				<option value="3" <?php if ($semester== '3') echo "selected='selected'"; ?>>3</option>
				<option value="4" <?php if ($semester== '4') echo "selected='selected'"; ?>>4</option>
				<option value="5" <?php if ($semester== '5') echo "selected='selected'"; ?>>5</option>
				<option value="6" <?php if ($semester== '6') echo "selected='selected'"; ?>>6</option>
				<option value="7" <?php if ($semester== '7') echo "selected='selected'"; ?>>7</option>
				<option value="8" <?php if ($semester== '8') echo "selected='selected'"; ?>>8</option>
			</select><br>
			<p>Alamat Lengkap anda:</p>
	<textarea name="alamat" placeholder="Alamat" rows="5px" cols="50px"> <?php echo $alamat; ?></textarea><br>
	<input type="submit" name="submit" value="Tambahkan">
	</form>
</body>
</html>