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
        <form method="POST">
            <input type="text" name="ten">
            <input type="submit" value="Test"> 

        </form>
        <?php
            $_SESSION['user'] = "husband2310";
            if (isset($_POST['ten'])) {
                if ($_POST['ten'] == $_SESSION['user'])
                {
                    echo "You are login";
                }
                else
                {
                    echo "You are not login";
                }
            }
            
        ?>
    </body>

</html>