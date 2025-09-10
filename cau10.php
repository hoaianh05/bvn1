<?php
//tinh trung binh cong cua mang//
function tinhTBCcuaMang($arr) {
    if (count($arr) == 0) return null;
    $tong = array_sum($arr);
    $tb = $tong / count($arr);
    return $tb;
}

// Test
$mang = [5, 7, 11, 14, 20 ];
echo "Trung bình cộng của mảng = " . tinhTBCcuaMang($mang) . "<br>";
?>