<?php
function inhcnhat($rows = 5, $cols = 7) {
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            if ($i == 0 || $i == $rows - 1 || $j == 0 || $j == $cols - 1) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo PHP_EOL; 
    }
}
echo "<pre>";
inhcnhat();
echo "</pre>";
?>