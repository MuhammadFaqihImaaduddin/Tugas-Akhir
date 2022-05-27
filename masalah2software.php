<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Service Center</title>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid p-3">
                <a class="navbar-brand fs-3" href="software.php">Software</a>
            </div>
        </nav>
        <h2 class="text-center p-2">
            Berikut penjelasannya
        </h2>
        </header>
      <div class="ms-5">
      <?php
        if(isset($_POST['check1'])){
          echo "<h5>Hard brick</h5> Adalah keadaan dimana smartphone mati total secara visual tetapi ketika disambungkan ke komputer<br> akan terdeteksi. 
                Hard brick biasanya disebabkan oleh gagal flashing atau bisa juga dari IC Emmc.<br><br>";
        }
        if(isset($_POST['check2'])){
          echo "<h5>Sistem Berhenti</h5> Sistem berhenti juga disebabkan oleh internal yang hampir penuh, atau adanya aplikasi yang terlalu besar untuk<br> kapasitas 
                smartphone. Akibatnya sistem smartphone berhenti. Hal ini dapat diatasi dengan melakukan<br> install ulang aplikasi tersebut atau dengan melakukan
                flashing.<br><br>";
        }
        if(isset($_POST['check3'])){
          echo "<h5>IMEI invalid atau IMEI null</h5> Adalah kondisi dimana smartphone gagal membaca IMEI yang tertera pada mesin. IMEI invalid atau IMEI null bisa<br> terjadi karena 
                kesalahan setelah melakukan proses flashing.<br><br>";
        }
        if(isset($_POST['check4'])){
          echo "<h5>Bootloop</h5> Adalah suatu keaadaan dimana smartphone hanya menampilkan logo brand dan tidak kunjung selesai. Hal ini bisa disebabkan oleh<br> banyak hal
              yang pastinya adalah penggunaan smartphone yang salah atau berlebihan. Bootloop dapat diatasi dengan flashing ROM.";
        }
      ?>
      </div>
      <div class="m-5" id="inputan">
       <form action="index.php" method="post" name="checkbox" id="inputan" class="p-1">
          Apakah informasi ini membantu ?<br> <input type="submit" value="Ya" id="inputan">
        </form>
        <form action="masalah1software.php" class="p-1">
          </input> <input type="submit" value="Tidak"><input?>
        </form>
      </div>
    </body>
  </head>
</html>