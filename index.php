<?php
    if (!empty($_POST['proses'])) {
        print_r($_POST);
    }
?>
<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        Nama : <input type="text" name="nama">
        <br><br>
        Alamat : <textarea type="text" name="alamat"></textarea>
        <br><br>
        Program Studi :
        <select name="program_studi" id="">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
            <option value="MI">Manajemen Informatika</option>
        </select>
        <br><br>
        <input type="submit" name="proses" value="submit">
    </form>
</body>
</html>