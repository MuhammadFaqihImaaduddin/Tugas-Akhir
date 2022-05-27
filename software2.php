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
            Silahkan memilih di bawah ini
        </h2>
        </header>
     <section id="masalah">
         <p class="fs-5 m-4 p-1">Silahkan mengisi dengan tanda centang jika memiliki masalah terkait</p>
        <form action="masalah2software.php" method="post">
            <div class="form-check p-1 mx-5">
            <input value="value1" class="form-check-input" type="checkbox" id="flexCheckDefault" name="check1">
            <label class="form-check-label" for="flexCheckDefault">
                Layar hp tidak menyala tetapi aplikasi masih berjalan
            </label>
            </div>
            <div class="form-check p-1 mx-5">
            <input class="form-check-input" type="checkbox" value="value2" id="flexCheckDefault" name="check2">
            <label class="form-check-label" for="flexCheckDefault">
                Aplikasi terhenti mendadak
            </label>
            </div>  
            <div class="form-check p-1 mx-5">
            <input class="form-check-input" type="checkbox" value="value3" id="flexCheckDefault" name="check3">
            <label class="form-check-label" for="flexCheckDefault">
                Hp tidak bisa menangkap sinyal
            </label>
            </div>  
            <div class="form-check p-1 mx-5">
            <input class="form-check-input" type="checkbox" value="value4" id="flexCheckDefault" name="check4">
            <label class="form-check-label" for="flexCheckDefault">
                Hp hanya menampilkan logo brand
            </label>
            </div>
            <form action="masalah2software.php">
            <input type="submit" value="Cari" class="m-4">
        </form>
        </form>
     </section>
    </body>
  </head>
</html>