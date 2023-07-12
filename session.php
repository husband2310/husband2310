<?php
    // $_Session : Lưu trữ thông tin người dùng ở phía Server
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Đăng nhập sử dụng session</title>

    </head>
    <body>
        <h1>Trạng thái đăng nhập:</h1>
        <?php
            $_SESSION['username'] = "husband2310";
            echo $_SESSION['username'];

            if (!isset($_SESSION['username'])){
                echo "You aren't login";
            } else {
                echo "You are login";
            }
        ?>
    </body>

</html>