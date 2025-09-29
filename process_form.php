<?php 
include "layout.php"; 
define("PAGE_TITLE", "Kết quả thống kê"); 
template_header(); 
?>

<div class="container mt-4">
    <h2>Kết quả thống kê</h2>
    <div class="alert alert-info">
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
            $thangSo = array_search($thang, array_keys($doanhThuTheoThang)) + 1; 
            $doanhThu = $doanhThuTheoThang[$thang];
            echo "Tháng $thangSo - $thang: doanh thu <b>" . number_format($doanhThu, 0, ',', '.') . " VND</b>.";
        }
        elseif (!empty($thongke)) {
            if ($thongke === "max") {
                $maxValue = max($doanhThuTheoThang);
                $maxMonth = array_search($maxValue, $doanhThuTheoThang);
                $thangSo = array_search($maxMonth, array_keys($doanhThuTheoThang)) + 1;
                echo "Doanh thu <b>cao nhất</b> - Tháng $thangSo ($maxMonth): <b>" . number_format($maxValue, 0, ',', '.') . " VND</b>.";
            } elseif ($thongke === "min") {
                $minValue = min($doanhThuTheoThang);
                $minMonth = array_search($minValue, $doanhThuTheoThang);
                $thangSo = array_search($minMonth, array_keys($doanhThuTheoThang)) + 1;
                echo "Doanh thu <b>thấp nhất</b> - Tháng $thangSo ($minMonth): <b>" . number_format($minValue, 0, ',', '.') . " VND</b>.";
            }
        } 
        else {
            echo "Vui lòng chọn <b>Tháng</b> hoặc <b>Thống kê doanh thu</b>!";
        }
        ?>
    </div>

    <a href="form.php" class="btn btn-primary">Quay lại Form</a>
</div>

<?php template_footer(); ?>