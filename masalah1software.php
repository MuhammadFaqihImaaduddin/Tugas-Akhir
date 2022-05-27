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
                <a class="navbar-brand fs-3" href="index.php">Kembali</a>
            </div>
        </nav>
        <h3 class="text-center p-2">
            Hubungi staff kami
        </h3>
        </header>
        <div class="text-center fs-4">
            <?php               
            class staff {
                    public $nama;
                    public $notlp;
                    public $email;
                
                    public function setnama($a){
                        $this->nama = $a;
                    }
                    public function setnotlp($a){
                        $this->notlp = $a;
                    }
                    public function setemail($a){
                        $this->email = $a;
                    }

                    public function getnama() {
                        return $this->nama; 
                    }
                    public function getnotlp() {
                        return $this->notlp;
                    }
                    public function getemail() {
                        return $this->email;
                    }

                }

                $staff = new staff;
                $staff->setnama("Joko");
                $staff->setnotlp("082417701364");
                $staff->setemail("joko123@ngemail.com");

                echo $staff->getnama()."<br>"; 
                echo $staff->getnotlp()."<br>";
                echo $staff->getemail()."<br>";                
            ?>
        </div>
    </body>
  </head>
</html>