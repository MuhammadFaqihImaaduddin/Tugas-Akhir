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
        <body>
            <section id="Home">
             <header>
             <nav class="navbar navbar-expand-lg bg-dark">
             <div class="container-fluid p-3">
                <a class="navbar-brand fs-3">Service Center</a>
             </div>
             </nav>
                <h2 class="text-center p-2">
                    Selamat Datang Di Service Center
                    <br>
                    Apa yang bisa kami bantu?
                </h2>
             </header>
            </section>
            <div class="d-grid gap-4 p-5" id="pilihan">
                 <a class="btn btn-info fs-4 bg-primary text-white fw-semibold p-3" href="hardware.php" type="button">Saya memiliki masalah hardware</a>
                 <a class="btn btn-info fs-4 bg-primary text-white fw-semibold p-3" href="software.php" type="button">Saya memiliki masalah software</a>
            </div><br><br><br>
            <footer class="text-center p-5">
                <p class="fs-6" id="waktu">
                    <?php
                        echo date("l, d M Y")
                    ?>
                </p>
            </footer>
        </body>
    </head>
</html>