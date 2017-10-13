<?php //filename: proses_dsn.php

include("db.php");

if($_GET['action'] == "add"){
	//2.query
	$query = "INSERT INTO dosen (kode, namadosen) 
	VALUES('$_POST[kode]', '$_POST[namadosen]')";
}else if($_GET['action'] == "edit"){
	//2.query
	$query = "UPDATE dosen
	SET kode = '$_POST[kode]',
	namadosen = '$_POST[namadosen]',
	WHERE id = $_POST[id]";
}else if($_GET['action'] == "delete"){
	$query = "DELETE FROM dosen
			WHERE id=$_GET[id]";
}

mysqli_query($koneksi, $query);

//REDFIRECT ke template.phpheader
('Location: template.php?page=dosen');