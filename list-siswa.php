<?php 
// Memasukkan kode php lain ke file php ini dengan fungsi include


?>
<IDOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
    <header>
         <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border ="1">
    <thead>
         <tr>
             <th>No</th>
             <th>Nama</th>
             <th>Alamat</th>
             <th>Jenis Kelamin</th>
             <th>Agama</th>
             <th>Sekolah Asal</th>
             <th>Tindakan</th>
         </tr>
    </thead>
    <tbody>

        <?php
        // Query untuk mengambil data
    

        // Mengeksekusi query yang sudah didefine sebelumnya 
        

        // Menampilkan data dalam bentuk tabel
       
        ?>
    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>