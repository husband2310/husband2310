<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hoc tap</title>

    </head>
    <body>
        <form action="" method="get">
            <input type="text" name="name">
            <input type="submit">
        </form>
        <?php
            $name = $_GET['name'];
            echo $name.'<br>';
            $a = 10;
            $b = 5;
            if ($a >$b){
                echo "True";
            }
            else{
                echo"False";
            }
        ?>

    </body>
</html>
