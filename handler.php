<?php
require __DIR__ . '/mysql.php';
session_start();
if (((isset($_POST['name']) && $_POST['name'] != "")) && isset($_FILES['image']) ) {
    $name = $_POST['name'];
    $sqlName = '/image/'. $_FILES['image']['name'];
    $newname = __DIR__ . '/image/' . basename($_FILES['image']['name']);
    if (is_uploaded_file($_FILES['image']['tmp_name'])){
        $res = move_uploaded_file($_FILES['image']['tmp_name'],$newname);
    }
    $sql = "INSERT INTO images (name,path) VALUES ('$name ',' $sqlName ')";
    querryToDB($sql);

}else{
    $_SESSION['error'] = "Вы не ввели название файла или не выбрали файл";
    header('Location: /index.php');
}



