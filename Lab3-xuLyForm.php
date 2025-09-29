<?php
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

$thang = isset($_GET['thang']) ? $_GET['thang'] : "";
$thongke = isset($_GET['thongke']) ? $_GET['thongke'] : "";

if (!empty($thang) && isset($doanhThuTheoThang[$thang])) {
    $thangSo = array_search($thang, array_keys($doanhThuTheoThang)) + 1; // tìm số tháng
    $doanhThu = $doanhThuTheoThang[$thang];
    echo "Tháng $thangSo - $thang: doanh thu $doanhThu.";
    exit;
}

if (!empty($thongke)) {
    if ($thongke === "max") {
        $maxValue = max($doanhThuTheoThang);
        $maxMonth = array_search($maxValue, $doanhThuTheoThang);
        $thangSo = array_search($maxMonth, array_keys($doanhThuTheoThang)) + 1;
        echo "Doanh thu cao nhất - Tháng $thangSo ($maxMonth): $maxValue.";
    } elseif ($thongke === "min") {
        $minValue = min($doanhThuTheoThang);
        $minMonth = array_search($minValue, $doanhThuTheoThang);
        $thangSo = array_search($minMonth, array_keys($doanhThuTheoThang)) + 1;
        echo "Doanh thu thấp nhất - Tháng $thangSo ($minMonth): $minValue.";
    }
    exit;
}
echo "Vui lòng chọn Tháng hoặc Thống kê doanh thu!";
