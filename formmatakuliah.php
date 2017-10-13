<?php
	if ($_GET['action'] == "edit")
	{
		echo "<h1> Edit Matakuliah </h1>";
		include ("db.php");
		$query = "SELECT * FROM matakuliah WHERE id=$_GET[id]";
		$hasil = mysqli_query ($koneksi, $query);
		$row = mysqli_fetch_assoc($hasil);
	}
	else
	{
		echo "<h1>Add Matkul</h1>";
		$row ['kode_matkul'] = "";
		$row ['nama_matkul'] = "";
		$row ['id'] = "";
	}
?>

<form action = "proses_matakuliah.php?action=<?php echo $_GET['action']; ?>" method="post">
	Kode Matakuliah:
	<input type="text" name="kode_matkul" value="<?php echo $row['kode_matkul']; ?>"/>
	<br/>
	Nama Matakuliah:
	<input type="text" name="nama_matkul" value="<?php echo $row['nama_matkul']; ?>"/>
	<br/>
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>
