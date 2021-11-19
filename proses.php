<?php

#DB Insert

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbppdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$update= $_POST['update'];
//update
if ($update==true){
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $nomorhp = $_POST['nomorhp'];
  $email = $_POST['email'];

  //updatesql

$sql = "UPDATE ppdb SET nama='$nama', alamat='$alamat', nomorhp='$nomorhp', email='$email' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header("Location: http://localhost/ppdb/lpendaftar.php");
exit();

}else{
//post

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomorhp = $_POST['nomorhp'];
$email = $_POST['email'];

//echo "Nama Anda: $nama <br>";
//echo "Alamat: $alamat <br>";
//echo "Nomorhp: $nomorhp <br>";

//insert

$sql = "INSERT INTO ppdb (nama, alamat, nomorhp, email)
VALUES ('$nama', '$alamat', '$nomorhp', '$email')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


header("Location: http://localhost/ppdb/lpendaftar.php");
exit();
}

?>
