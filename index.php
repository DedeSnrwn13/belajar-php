<?php

$todos = [];
$file = file_get_contents('todo.txt');
$todos = unserialize($file);

if (isset($_POST['todo'])) {
    $data = $_POST['todo'];
    $todos[] = [
        'todo' => $data,
        'status' => 0,
    ];

    file_put_contents('todo.txt', serialize($todos));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>
<body>
    <form action="" method="POST">
        <label>Daftar Belanja Hari ini<label><br>
        <input type="text" name="todo">
        <button type="submit">Simpan</button>
    </form>

    <ul>
        <li>
            <input type="checkbox" name="todo">
            <label> Todo 1</label>
            <a href='#'>hapus</a>
        </li>
        <li>
            <input type="checkbox" name="todo">
            <label> Todo 1</label>
            <a href='#'>hapus</a>
        </li>
        <li>
            <input type="checkbox" name="todo">
            <label> Todo 1</label>
            <a href='#'>hapus</a>
        </li>
    </ul>
</body>
</html>
