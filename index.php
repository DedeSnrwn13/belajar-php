<?php
    $nama   = $_GET['nama'];
    $alamat = $_GET['alamat'];
?>
<!DOCTYPE html>
<html>
<body>
    <form action="">
        <input type="text" name="nama">
        <input type="text" name="alamat">
        <input type="submit" value="submit">
    </form>
    <h1>Selamat Datang <?php echo $nama; ?></h1>
    <h1>Alamat <?php echo $alamat; ?></h1>
    <p>Selamat belajar pemrograman PHP</p>
</body>
</html>