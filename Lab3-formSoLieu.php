<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form Thống kê Doanh thu</title>
</head>
<body>
    <h2>Thống kê Doanh thu</h2>
    <form action="Lab3-xuLyForm.php" method="GET">
        <label for="thang">Tháng:</label>
        <select name="thang" id="thang">
            <option value="">-- Chọn tháng --</option>
            <option value="Jan">Jan</option>
            <option value="Feb">Feb</option>
            <option value="Mar">Mar</option>
            <option value="Apr">Apr</option>
            <option value="May">May</option>
            <option value="Jun">Jun</option>
            <option value="Jul">Jul</option>
            <option value="Aug">Aug</option>
            <option value="Sep">Sep</option>
            <option value="Oct">Oct</option>
            <option value="Nov">Nov</option>
            <option value="Dec">Dec</option>
        </select>
        <br><br>

        <label for="thongke">Thống kê doanh thu:</label>
        <select name="thongke" id="thongke">
            <option value="">-- Chọn thống kê --</option>
            <option value="max">Doanh thu cao nhất</option>
            <option value="min">Doanh thu thấp nhất</option>
        </select>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
