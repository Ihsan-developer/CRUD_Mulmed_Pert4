<?php 
// Memasukkan kode php lain ke file php ini dengan fungsi include


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <style>
        .beranda{
            position: absolute;
            left: 50%;
            top: 30%;
            transform: translate(-50%, -50%);
            border: 2px solid ;
            padding: 10px;
            text-align: justify;
        }


    </style>
</head>
<body>
    <section class="beranda">
    
        <div>
        <header>
            <span><h3>Pendaftaran Siswa Baru</h3></span>
            <span><h1>SMK Coding</h1></span>
        </header>

        
        <h4>Menu</h4>
        <nav>
           
            <ul type="none">
                <li ><a href="form-daftar.php">Daftar Baru</a></li>
                <li ><a href="list-siswa.php">Pendaftar</a></li>
            </ul>
        </nav>
        
    </div>
    </section>
    


</body>
</html>
    