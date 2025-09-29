<?php
//BÀI 1 

// a.
$doanhThu = [
    10000000, 12000000, 15000000, 11000000,
    16000000, 17000000, 14000000, 11000000,
    12500000, 16500000, 13000000, 10000000
];

// b.
$doanhThuTheoThang = [
    "Jan" => 10000000,
    "Feb" => 12000000,
    "Mar" => 15000000,
    "Apr" => 11000000,
    "May" => 16000000,
    "Jun" => 17000000,
    "Jul" => 14000000,
    "Aug" => 11000000,
    "Sep" => 12500000,
    "Oct" => 16500000,
    "Nov" => 13000000,
    "Dec" => 10000000
];

$minValue = min($doanhThu);
$maxValue = max($doanhThu);
$avgValue = array_sum($doanhThu) / count($doanhThu);

$minMonth = array_search($minValue, $doanhThu) + 1; // tháng bắt đầu từ 1
$maxMonth = array_search($maxValue, $doanhThu) + 1;

echo "<h3>Bài 1a</h3>";
echo "Doanh thu thấp nhất: $minValue (Tháng $minMonth)<br>";
echo "Doanh thu cao nhất: $maxValue (Tháng $maxMonth)<br>";
echo "Doanh thu trung bình năm: $avgValue<br>";

$minValue2 = min($doanhThuTheoThang);
$maxValue2 = max($doanhThuTheoThang);

$minMonth2 = array_search($minValue2, $doanhThuTheoThang);
$maxMonth2 = array_search($maxValue2, $doanhThuTheoThang);

echo "<h3>Bài 1b</h3>";
echo "Tháng có doanh thu thấp nhất: $minMonth2 ($minValue2)<br>";
echo "Tháng có doanh thu cao nhất: $maxMonth2 ($maxValue2)<br>";

//BÀI 2

// a.
function doanhThuThapNhat($arr) {
    $min = min($arr);
    $month = array_search($min, $arr) + 1;
    return ["value" => $min, "month" => $month];
}

function doanhThuCaoNhat($arr) {
    $max = max($arr);
    $month = array_search($max, $arr) + 1;
    return ["value" => $max, "month" => $month];
}

function doanhThuTrungBinh($arr) {
    return array_sum($arr) / count($arr);
}

echo "<h3>Bài 2a</h3>";
$thapNhat = doanhThuThapNhat($doanhThu);
$caoNhat = doanhThuCaoNhat($doanhThu);
$trungBinh = doanhThuTrungBinh($doanhThu);

echo "Doanh thu thấp nhất: {$thapNhat['value']} (Tháng {$thapNhat['month']})<br>";
echo "Doanh thu cao nhất: {$caoNhat['value']} (Tháng {$caoNhat['month']})<br>";
echo "Doanh thu trung bình: $trungBinh<br>";

// b.
function tenThangDoanhThuThapNhat($arr) {
    $min = min($arr);
    $month = array_search($min, $arr);
    return ["value" => $min, "month" => $month];
}

function tenThangDoanhThuCaoNhat($arr) {
    $max = max($arr);
    $month = array_search($max, $arr);
    return ["value" => $max, "month" => $month];
}

echo "<h3>Bài 2b</h3>";
$thapNhat2 = tenThangDoanhThuThapNhat($doanhThuTheoThang);
$caoNhat2 = tenThangDoanhThuCaoNhat($doanhThuTheoThang);

echo "Tháng có doanh thu thấp nhất: {$thapNhat2['month']} ({$thapNhat2['value']})<br>";
echo "Tháng có doanh thu cao nhất: {$caoNhat2['month']} ({$caoNhat2['value']})<br>";
?>