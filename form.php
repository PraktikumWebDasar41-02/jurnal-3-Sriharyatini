<!DOCTYPE>
<html>
<head>
	<title>Jurnal 3</title>
</head>
<body>
		<form action=" " method="post"></form>
		Nama : 
		<input type="text" name="nm"><br><br>
		NIM :
		<input type="text" name="nim"><br><br>
		GAMBAR :
		<input type="file"  name="gambar"><br><br>
		<input type="Submit" value="Kirim">

</form>
</body>
</html>

<?php
$target_dir = "E:\jurnal";
$target_file = $target_dir.basename($_FILES['gambar']["name"]);
$db = "praktik";
$conn = new mysqli('localhost','root','','praktik');

if (isset($_POST['submit'])) {
	if (move_uploaded_file($_FILES['gambar']['tmp_name'],$target_file)) {

		$nm = $_POST['nama'];
		$nim = $_POST['nim'];

		$db = "INSERT INTO datadiri(nama, nim, gambar) values ('$nm', '$nim', $gambar')";
		$sqloutput = mysqli_query($conn, "SELLECT * FROM praktik");

		while ($row = mysqli_fetch_assoc($result)) {
		echo "nama : " .$row['nama']."<br>";
			echo "nim : " .$row['nim']."<br>";
				echo "gambar : img src='' " .$row['gambar']."<br>";

		}
		echo "the file" . basename($_FILES['gambar']['name']) . "has been uploaded.";
		echo "<img src = '$target_file' height ='240' width='240'>";
	}else{
		echo "Sorry, gambar yang anda masukan error.";
	}
}

if(isset($_POST['kirim'])){
	$nm = $_POST['nama'];
	$nim = $_POST['nim'];
	$gambar = $_FILES['gambar']["name"];
	
}
//enctype="multipart/form-data";
?>