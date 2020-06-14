<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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

<div class="rigth">
	<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"mahasiswa1");
	$query="select * from siswa";
	$result=mysqli_query($con,$query);

	?>
	<table>
		<h1>Tabel Barang</h1>
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>tanggallahir</th>
			<th>action</th>
		
		</tr>
		<?php
		for($count= 0; $row = mysqli_fetch_array($result);$count++){
		?>
	<tr>
		<th><?php echo $row['id'] ?></th>
		<th><?php echo $row['nama'] ?></th>
		<th><?php echo $row['tanggallahir'] ?></th>
		<th><a href="formedit.php?id=<?php echo $row['id'] ?>">edit</a>|<a href="deletesql.php?id=<?php echo $row['id'] ?>">delete</a></th>
	</tr>

	<?php 
}
	?>
	</table>
	
</div>
</body>
</html>