<?php

// Bài 1:
$st1 = "14092024";

$day = substr($st1, 0, 2);
$month = substr($st1, 2, 2);
$year = substr($st1, 4, 4);

$formattedDate = $day . "/" . $month . "/" . $year;

echo "Bài 1:<br>";
echo "Chuỗi sau khi định dạng: " . $formattedDate . "<br><br>";

// Bài 2:
$st2 = "ABDBA";

$reversed = strrev($st2);

echo "Bài 2:<br>";
if ($st2 === $reversed) {
    echo "Chuỗi \"$st2\" là chuỗi đối xứng<br><br>";
} else {
    echo "Chuỗi \"$st2\" là chuỗi không đối xứng<br><br>";
}

// Bài 3:
$st3 = 'nguyenthanh@husc.edu.vn';

$parts = explode('@', $st3);

echo "Bài 3:<br>";
if (count($parts) == 2) {
    echo "Username: " . $parts[0] . "<br>";
    echo "Tên miền: " . $parts[1] . "<br>";
} else {
    echo "Email không hợp lệ.<br>";
}
?>