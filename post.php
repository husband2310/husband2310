<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lay gia tri get | post</title>

    </head>
    <body>
        <form method="POST" >
            <input type="text" name="ten">
            <input type="submit" value="Ấn đi">

        </form>
    </body>

</html>
<?php
    // GET : Lấy dữ liệu lên thanh address bar
    // POST : Lấy dữ liệu và sử dụng
    if(isset($_POST['ten'])){
        echo $_POST['ten'];
    }
?>