<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<?php
if (isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<form action="/handler.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name"><br>
    <input type="file" name="image">
    <input type="submit" value="Отправить">
</form>
</body>
</html>
