<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Service Center</title>      
         <header>
            <nav class="navbar navbar-expand-lg bg-dark">
             <div class="container-fluid p-3">
                <a class="navbar-brand fs-3" href="hardware.php">Hardware</a>
             </div>
            </nav>
            <h2 class="text-center p-2">
                Silahkan mengisi form berikut
            </h2>
         </header>
            <body>
             <div class="nyoba" id="nyoba">
                <form method="post" class="nyoba" id="form" action="solusimasalah1.php" name="form1">
                    Masukkan Nama anda: <input type="text" name="nama"><br><br>
                    Masukkan alamat email anda: <input type="text" name="email"><br><br>
                    Masukkan nomor telepon anda: <input type="text" name="nomer"><br><br> 
                    Masukkan alamat anda: <input type="text" name="alamat"><br><br> 
                    <input type="submit" value="Masukkan" name="proses">
                </form>
                
                <?
                    include "solusimasalah1.php";

                    if (isset($_POST['proses'])){
                        $Nama   = $_POST['nama'];
                        $Email  = $_POST['email'];
                        $Nomor  = $_POST['nomer'];
                        $Alamat = $_POST['alamat'];

                        $query= "INSERT INTO datamasukan VALUES('$Nama', '$Email', '$Nomor', '$Alamat')";
                        mysqli_query($koneksi,$query);
                    }
                ?>

                <?php 
                    if(isset($_GET['nama'])){
                        if($_GET['nama'] == "kosong"){
                            echo "<h5 style='color:red'>Mohon untuk mengisi data</h5>";
                        }
                    }
                    if(isset($_GET['email'])){
                        if($_GET['email'] == "kosong"){
                            echo "<h5 style='color:red'>Mohon untuk mengisi data</h5>";
                        }
                    }
                    if(isset($_GET['nomer'])){
                        if($_GET['nomer'] == "kosong"){
                            echo "<h5 style='color:red'>Mohon untuk mengisi data</h5>";
                        }
                    }
                    if(isset($_GET['alamat'])){
                        if($_GET['alamat'] == "kosong"){
                            echo "<h5 style='color:red'>Mohon untuk mengisi data</h5>";
                        }
                    }
                ?>
             </div>
            </body>
    </head>
</html>