
<?php
// Hôm nay là thứ mấy và hiển thị ra màn hình
    $dayofweak = date('w');
    
    switch ($dayofweak) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thurstday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Sartuday";
            break;
        case 0:
            echo "Sunday";
            break;
    }
?>