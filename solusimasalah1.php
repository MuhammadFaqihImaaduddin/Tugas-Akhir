<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">    <meta charset="utf-8">
    <title>Service Center</title>
     <header>
      <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid p-3">
                <a class="navbar-brand fs-3" href="index.php">Kembali</a>
            </div>
        </nav>
        <h2 class="text-center p-2">
            Data anda telah dimasukkan
        </h2>
     </header>     
        <body>
            <div class="kalimat">
                <?php
                    $nama = $_POST['nama'];
                    if($nama == ""){
                        header("location:masalah1.php?nama=kosong");
                    }else{
                        echo "Teknisi kami akan menuju ke tempat anda";
                    }
                ?>

                <?
                    $koneksi = mysqli_connect("localhost", "root", "", "datamasukan");
                ?>
            </div>
        </body>
    </head>
</html>