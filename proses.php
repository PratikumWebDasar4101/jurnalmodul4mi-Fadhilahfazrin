<?php
$foto = $_FILES['dokumen']['name'];
if (isset($_POST['submit'])) {
	move_uploaded_file($_FILES['dokumen']['tmp_name'], "upload/".$_FILES['dokumen']['name']);
	echo "<h3>Foto anda :</h3>";
	echo "<br>";
	echo "<img src = 'upload/$foto'>";
}

$hobi = $_POST["hobi"];
echo "<br>";
echo "<h3>Hobi yang anda pilih :</h3>";
echo "<br>";
foreach ($hobi as $nilai) {
	echo "- $nilai";
	echo "<br>";
}

if (isset($_POST['delete'])) {
	unset($hobi);
}
?>

<form action="halamanakhir.php">
	<input type="submit" name="delete" value="Hapus">
</form>
