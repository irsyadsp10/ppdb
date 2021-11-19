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


//IF EDIT
 $nama = "";
 $alamat = "";
 $nomorhp = "";
 $email = "";
 $update = false;
// sql to edit a record
if (isset($_GET['edit'])){
  $id = $_GET['edit'];
  $update = true;
  $sql = "SELECT * FROM ppdb WHERE id=$id";
  $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1){
      $row = $result->fetch_array();
      $nama = $row['nama'];
      $alamat = $row['alamat'];
      $nomorhp = $row['nomorhp'];
      $email = $row['email'];
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
              <a class="nav-link active" aria-current="page" href="http://localhost/ppdb/">Tambahkan Pendaftar</a>
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
   <div class="container">
    <!--Form--->
    <h2 class="text-center">Tambahkan Pendaftar</h2>
    <form action="proses.php" method="post" name="input">
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <input type="hidden" name="update" value="<?php echo $update;?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" value="<?php echo $nama ?>" class="form-control" name="nama" required />
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" value="<?php echo $alamat ?>" class="form-control" name="alamat" />
      </div>
      <div class="mb-3">
        <label for="nomorhp" class="form-label">Nomor HP</label>
        <input type="number" value="<?php echo $nomorhp ?>" class="form-control" name="nomorhp" />
      </div>
      <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" value="<?php echo $email ?>" class="form-control" name="email" />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" />
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        <label class="form-check-label" for="exampleCheck1">Saya memastikan data yang diisikan adalah benar</label>
      </div>
      <?php if($update == true){?>
      <button type="submit" class="btn btn-primary">Update</button>
      <?php }else{ ?>
      <button type="submit" class="btn btn-primary">Submit</button>
      <?php } ?>
     
    </form>
    <!--END Form--->
    <!---ECHO--->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</div>
  </body>
</html>
