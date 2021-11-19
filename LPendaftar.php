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




?>



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
    <h2 class="text-center">List Pendaftar</h2>
    <!--Tabel--->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Nomor HP</th>
          <th scope="col">E-mail</th>
          <th scope="col">Aksi</th>
          
        </tr>
      </thead>
      <tbody>
      
      
      <!--SELECT-->
      <?php
$sql = "SELECT * FROM ppdb";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['nama']; ?></td>
      <td><?php echo $row['alamat']; ?></td>
      <td><?php echo $row['nomorhp']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><a href="index.php?edit=<?php echo $row['id'];?>" 
            class="btn btn-warning">Edit</a>
          <a href="reset.php?reset=<?php echo $row['id'];?>" 
            class="btn btn-danger">Reset</a>
      </td>
    </tr><?php
   

  
  }
} else {
  echo "0 results"; 
}

mysqli_close($conn);
      
      ?>

 

      
      </tbody>
    </table>
    <!--END Tabel--->
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