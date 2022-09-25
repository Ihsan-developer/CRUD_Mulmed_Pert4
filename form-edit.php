<?php

// Memasukkan kode php lain ke file php ini dengan fungsi include


/*
Note :
Perbedaan fungsi include dengan require pada php adalah ketika file yang mau 
di-include tidak ditemukan maka, program atau script php akan tetap berjalan
meskipun menampilkan error. Sementara jika, fungsi require tidak menemukan file
yang ingin dimasukkan, maka akan terjadi fatal error yang berarti program atau 
script php berhenti dijalankan
*/

// Menginisiasi variabel untuk menampung data pada tabel yang memiliki kolom id


// Query untuk mengambil data


// Mengeksekusi query yang sudah didefine sebelumnya 


// Menampung data hasil eksekusi query sebelumnya



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir pendaftaran siswa baru | smk coding</title>
</head>
<body>

    <header>
        <h3>Formulir Edit Siswa baru</h3>
    </header>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>">
            </p>

            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </p>

            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <?php $jk = $siswa['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'lakilaki') ? "checked": ""  ?>>Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": ""  ?>>Perempuan</label>
            </p>

            <p>
                <label for="agama">Agama: </label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                </select>
            </p>

            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>">
            </p>

            <p>
                <input type="submit" value="Simpan" name="simpan">
            </p>
        </fieldset>

    </form>

</body>
</html>