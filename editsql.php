<?php
$id=$_POST['id'];
$nama=$_POST['nama'];
$tempatlahir=$_POST['tempatlahir'];
$tanggallahir=$_POST['tanggallahir'];
$agama=$_POST['agama'];
$jeniskelamin=$_POST['jeniskelamin'];
$semester=$_POST['semester'];
$alamat=$_POST['alamat'];

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"mahasiswa1");
$query= "update siswa set nama='$nama',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir',agama='$agama',jeniskelamin='$jeniskelamin',semester='$semester',alamat='$alamat' where  id='$id'";
$result =mysqli_query($conn,$query);
mysqli_close($conn);
?>
<script type="text/javascript">
	window.location='index.php';
</script>