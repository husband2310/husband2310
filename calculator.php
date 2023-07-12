<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Calculator PHP</title>
    </head>
    <body>
        <form method="GET">
            <input type="text" name="soA" placeholder="Nhập số a">
            <input type="text" name="soB" placeholder="Nhập số b">
            <select name="operator" id="">
                <option value="cong">+</option>
                <option value="tru">-</option>
                <option value="nhan">*</option>
                <option value="chia">/</option>
            </select>
            <input type="submit" name="submit" value="Cal">
        </form>
        <p>Ket qua phep tinh la:</p>
        
        <?php
            if(isset($_GET['submit'])){
                $soA = $_GET['soA'];
                $soB = $_GET['soB'];
                $operator = $_GET['operator'];

                switch($operator) {
                    case "cong" :
                        echo $soA + $soB;
                        break;
                    case "tru":
                        echo $soA - $soB;
                        break;
                    case "nhan":
                        echo $soA * $soB;
                        break;
                    case "chia":
                        if ($soB != 0){
                            echo $soA/$soB;
                        }
                        break;                  
                }
            }
        ?>
    </body>
</html>