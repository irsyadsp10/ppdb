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

// sql to delete a record
if (isset($_GET['reset'])){
  $id = $_GET['reset'];
  
  $sql = "DELETE FROM ppdb WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("Location: http://localhost/ppdb/lpendaftar.php");
exit();
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Pendaftaran 2021</title>
    <h1 class="text-center">Pendaftaran Sekolah Swasta Standar Internasional</h1>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/ppdb/">Form Pendaftaran</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/ppdb/lpendaftar.php">List Pendaftar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled">Peserta lolos</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!--END Navbar-->
</head>
<body>
    
</body>
</html>