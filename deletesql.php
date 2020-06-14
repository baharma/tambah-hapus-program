<?php
$id=$_GET['id'];

	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"mahasiswa1");
	$query="delete from siswa where id ='$id'";
	$result=mysqli_query($con,$query);
	mysqli_close($con);

?>
<script type="text/javascript">
	window.location='index.php'
</script>