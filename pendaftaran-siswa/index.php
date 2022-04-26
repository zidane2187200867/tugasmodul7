<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>STMIK AUB SURAKARTA</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran mahasiswa baru berhasil!";
            } else {
                echo "Pendaftaran mahasiswa gagal!";
            }
        ?>
    </p>
<?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    </body>
</html>
