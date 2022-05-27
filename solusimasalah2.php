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
        <h3 class="text-center p-2">
            Silahkan hubungi staff kami
        </h3>
     </header>     
        <body>
            <div class="text-center fs-4">
            <div class="container">
            <div class="row text-center">
                <div class="col">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <?php
                    $staff = ['staff' => 'Thomas Ajim', 'nomertlp' => '086242067613', 
                             'email' => 'thomas911@ngemail.com'];
                    
                    foreach ($staff as $key=>$value) {
                        echo "$value <br/>";
                        
                    }
                ?>
                </div>
                <div class="col-6">
                <?php
                    $staff2 = ['staff' => 'Alice', 'nomertlp' => '087623242513', 
                             'email' => 'alice.541@ngemail.com'];

                    foreach ($staff2 as $key=>$value) {
                        echo "$value <br/>";
                        
                    }
                ?>
                </div>
            </div>
            </div>
            </div>
        </body>
    </head>
</html>